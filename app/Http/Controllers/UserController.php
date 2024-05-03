<?php

namespace App\Http\Controllers;

use App\Models\Lawyer;
use App\Models\User;
use App\Models\UserType;
use App\Rules\NameAndSurname;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $search = $request->input('search');

            if (!isset($search)) {
                return response()->json(User::get(), 200);
            }

            $users = User::where('email', 'like', "%$search%")
                ->orWhere('id', 'like', "%$search%")
                ->orWhere('name', 'like', "%$search%")
                ->orWhere('cpf', 'like', "%$search%")
                ->latest()
                ->limit(10)
                ->get();

            return response()->json($users, 200);
        }

        $users = User::get();
        return view('v1.admin.users.index', compact('users'));
    }

    public function show(Request $request, string $id)
    {
        if ($request->ajax()) {
            $user = User::find($id);
            return response()->json($user, 200);
        }

        $user = User::with('addresses')->with('contacts')->find($id);

        $dataForm = $this->formCreateUpdate($user);

        return view('v1.admin.users.show', compact('user', 'dataForm'));
    }


    public function create()
    {
        $dataForm = $this->formCreateUpdate();

        return view('v1.admin.users.create', compact('dataForm'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => ['required', 'string', 'min:5', 'max:255', new NameAndSurname],
                //'email' => "unique:users,email|email|max:255",
                //'cpf' => "unique:users,cpf|max:20",
                //'phone' => 'required|max:20'
            ]
        );

        if ($request->user_type_id == 4) {
            $validator = Validator::make($request->all(), [
                'title' => 'required|string|max:255',
                'OAB_number' => 'required|string|max:255',
                'UF' => 'required|string|max:255'
            ]);
        }


        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $request->merge(['password' => $request->cpf]);

        if ($request->ajax()) {
            try {
                $user = User::create($request->all());
                //code...
            } catch (\Throwable $th) {
                //throw $th;
                return response()->json(['errors' => ["message" => $th->getMessage()]], 422);
            }

            return response()->json($user, 200);
        }

        $user = User::create($request->all());
        if ($request->user_type_id == 4) {
            $request->merge(['user_id' => $user->id]);
            Lawyer::create($request->all());
        }

        return redirect()->route('users.show', ['user' => $user->id]);
    }

    public function update(Request $request, string $id)
    {
        // Validação dos dados recebidos do formulário
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => [
                'nullable',
                "required|email|max:255",
                Rule::unique('users', 'email')->ignore($id),
            ],
            'phone' => 'max:20',
            'cpf' => [
                'nullable',
                Rule::unique('users', 'cpf')->where(function ($query) use ($id) {
                    return $query->whereNotNull('cpf')->where('id', '!=', $id);
                }),
                'max:20'
            ]
        ]);

        $name = $request->input('firstName') . ' ' . $request->input('lastName');

        // Obtém o usuário atual
        $user = auth()->user();

        // Obtém o CPF do formulário
        $cpf = $request->input('cpf');

        // Valida e limpa o CPF
        $cleanedCPF = $this->validateAndCleanCPF($cpf);

        // Verifica se o CPF é válido
        if ($cleanedCPF === null) {
            // CPF inválido
            return redirect()->back()->with('error', 'CPF inválido.');
        }

        try {
            // Atualiza os dados do usuário
            $user->update([
                'name' => $name,
                'title' => $request->input('title'),
                'email' => $request->input('email'),
                'cpf' => $cleanedCPF,
                'bio' => $request->input('bio'),
                // Adicione outros campos para atualizar conforme necessário
            ]);

            // Verifica se houve alterações nos dados de contato
            foreach ($user->contacts as $contact) {
                // Limpa e valida o número de telefone
                $cleanedPhone = $this->cleanAndValidatePhoneNumber($request->input('phone'));

                // Verifica se o número de telefone é válido
                if ($cleanedPhone !== null) {
                    // Se for válido, atualiza e salva o número de telefone

                    if ($contact->phone !== $request->input('phone')) {
                        $contact->phone = $cleanedPhone;
                        $contact->save();
                    }
                } else {
                    // Se não for válido, retorna um erro
                    return redirect()->back()->with('error', 'Número de telefone inválido.');
                }
            }


            // Redireciona de volta para a página do perfil do usuário
            return redirect()->route('profile')->with('success', 'Perfil atualizado com sucesso.');
        } catch (\Exception $e) {
            // Se ocorrer um erro, redireciona de volta para a página do perfil do usuário
            // com uma mensagem de erro
            return redirect()->route('profile')->with('error', 'Erro ao atualizar perfil: ' . $e->getMessage());
        }
    }

    protected function validateAndCleanCPF($cpf)
    {
        // Remove caracteres especiais do CPF
        $cpf = preg_replace('/[^0-9]/', '', $cpf);

        // Verifica se o CPF possui 11 dígitos
        if (strlen($cpf) !== 11) {
            return null; // CPF inválido
        }

        // Verifica se todos os dígitos do CPF são iguais
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return null; // CPF inválido
        }

        // Calcula os dígitos verificadores do CPF
        for ($i = 9; $i < 11; $i++) {
            $sum = 0;
            for ($j = 0; $j < $i; $j++) {
                $sum += $cpf[$j] * (($i + 1) - $j);
            }
            $digit = ((10 * $sum) % 11) % 10;
            if ($cpf[$i] != $digit) {
                return null; // CPF inválido
            }
        }

        // Retorna o CPF limpo
        return $cpf;
    }

    private function cleanAndValidatePhoneNumber($phone)
    {
        // Remove todos os caracteres não numéricos do número de telefone
        $cleanedPhone = preg_replace('/\D/', '', $phone);

        // Verifica se o número de telefone está no formato correto
        if (preg_match('/^\d{10,11}$/', $cleanedPhone)) {
            // Se for, retorna o número de telefone limpo
            return $cleanedPhone;
        } else {
            // Se não for, retorna null
            return null;
        }
    }

    public function addUserCorporate(Request $request)
    {
        $user = User::find($request->user_id);

        $user->update($request->all());

        return response()->json(["message" => "success."], 200);
    }

    public function formCreateUpdate($data = null)
    {
        return [
            "card" => [
                "name" => "Usuário"
            ],
            "inputs" => [
                [
                    "label" => "Nome e sobrenome",
                    "name" => "name",
                    "col" => "6",
                    "value" => $data->name ?? null
                ],
                [
                    "label" => "E-mail",
                    "name" => "email",
                    "col" => "6",
                    "value" => $data->email ?? null
                ],
                [
                    "label" => "Cpf",
                    "name" => "cpf",
                    "col" => "4",
                    "value" => isset($data->cpf) ? $data->getRawOriginal('cpf') : null
                ],
                [
                    "label" => "Tipo do usuário",
                    "name" => "user_type_id",
                    "col" => "4",
                    "input" => "select",
                    "value" => $data->user_type_id ?? null,
                    "identifier_value" => 'id',
                    "identifier_title" => 'title',
                    "options" => UserType::get()
                ],
                // [
                //     "label" => "Organização",
                //     "name" => "organization_id",
                //     "col" => "4",
                //     "value" => $data->organization_id ?? null
                // ],
                [
                    "label" => "Título",
                    "name" => "title",
                    "col" => "4",
                    "value" => $data->title ?? null
                ],
                [
                    "label" => "Bio",
                    "name" => "bio",
                    "col" => "12",
                    "value" => $data->bio ?? null
                ]
            ]
        ];
    }
}
