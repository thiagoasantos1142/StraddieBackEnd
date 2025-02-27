<?php

namespace App\Http\Controllers;

use App\Models\Lawyer;
use App\Models\Role;
use App\Models\User;
use App\Models\UserType;
use App\Models\V1\Admin\Organization;
use App\Rules\NameAndSurname;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function index(Request $request)
    {
        // Obtém o usuário atual
        $loggedUser = auth()->user();

        // Verificar se o usuário tem a permissão para visualizar outros usuários
        if (!Gate::allows('view-users', $loggedUser)) {

             // Se não tiver permissão, lance uma exceção de autorização
            //abort(403, 'Você não tem permissão para visualizar usuários.');

            if ($request->ajax()) {
                $search = $request->input('search');
    
                if (!isset($search)) {
                    return response()->json(User::where('id', $loggedUser->id), 200);
                }
    
                $organizations = Organization::where('id', $loggedUser->organization_id)
                    ->where('email', 'like', "%$search%")
                    ->orWhere('cnpj', 'like', "%$search%")
                    ->orWhere('nome_fantasia', 'like', "%$search%")
                    ->select(['id', 'nome_fantasia as name', 'email'])
                    ->get();
    
                $users = User::where('id', $loggedUser->id)
                    ->where('email', 'like', "%$search%")
                    ->orWhere('id', 'like', "%$search%")
                    ->orWhere('name', 'like', "%$search%")
                    ->orWhere('cpf', 'like', "%$search%")
                    ->select(['id', 'name', 'email'])
                    ->latest()
                    ->limit(10)
                    ->get();
    
                if (isset($organizations) && isset($users)) {
                    $userPfAndPj = $users->merge($organizations);
                    return response()->json($userPfAndPj, 200);
                } else if (isset($users)) {
                    return response()->json($users, 200);
                } else if (isset($organizations)) {
                    return response()->json($organizations, 200);
                };
            }
    
            $users = User::where('id', $loggedUser->id)->get();
            
            return view('v1.admin.users.index', compact('users'));
            
           
        }
        if(($loggedUser->user_type_id == 1) || ( Gate::allows('view-users', $loggedUser))){

            if ($request->ajax()) {
                $search = $request->input('search');
    
                if (!isset($search)) {
                    return response()->json(User::get(), 200);
                }
    
                $organizations = Organization::where('email', 'like', "%$search%")
                    ->orWhere('cnpj', 'like', "%$search%")
                    ->orWhere('nome_fantasia', 'like', "%$search%")
                    ->select(['id', 'nome_fantasia as name', 'email'])
                    ->get();
    
                $users = User::where('email', 'like', "%$search%")
                    ->orWhere('id', 'like', "%$search%")
                    ->orWhere('name', 'like', "%$search%")
                    ->orWhere('cpf', 'like', "%$search%")
                    ->select(['id', 'name', 'email'])
                    ->latest()
                    ->limit(10)
                    ->get();
    
                if (isset($organizations) && isset($users)) {
                    $userPfAndPj = $users->merge($organizations);
                    return response()->json($userPfAndPj, 200);
                } else if (isset($users)) {
                    return response()->json($users, 200);
                } else if (isset($organizations)) {
                    return response()->json($organizations, 200);
                };
            }
    
            $users = User::get();
            return view('v1.admin.users.index', compact('users'));

        }else{

           

        }
        
    }

    public function show(Request $request, string $id)
    {   
        // Obtém o usuário atual
        $loggedUser = auth()->user();

        // Verificar se o usuário tem a permissão para visualizar outros usuários
        if (!Gate::allows('view-users', $loggedUser || $loggedUser->id !== $id)){
            // Se não tiver permissão, lance uma exceção de autorização
            //abort(403, 'Você não tem permissão para visualizar usuários.');
        }
        
        if($loggedUser->user_type_id == 1 || $loggedUser->id == $id){

            $user = User::with('addresses', 'roles')->with('contacts')->find($id);
            
            // Verificar se o usuário está tentando visualizar seu próprio perfil
            if (auth()->id() !== $user->id) {
                // Verificar se o usuário tem a permissão para visualizar outros usuários
                if (!Gate::allows('view-users')) {
                    // Se não tiver permissão, lance uma exceção de autorização
                    abort(403, 'Você não tem permissão para visualizar usuários.');
                }
            }

        
            if ($request->ajax()) {            
                return response()->json($user, 200);        }

            
            $roles = Role::all();
            
            $dataForm = $this->formCreateUpdate($user);

            return view('v1.admin.users.show', compact('user', 'roles', 'dataForm'));

        }else{
            // Se não tiver permissão, lance uma exceção de autorização
            abort(403, 'Você não tem permissão para editar usuários.');
        }

        
    }


    public function create()
    {
        // Verificar se o usuário tem a permissão para criar outros usuários
        if (!Gate::allows('create-users', auth())) {
            // Se não tiver permissão, lance uma exceção de autorização
            abort(403, 'Você não tem permissão para criar usuários.');
        }

        $user = Auth::user();
        $typeUser = UserType::get();
        //type users filter
        if (in_array($user->role->role_id, [5])) {
            $typeUser = UserType::where('id', 5)->get();
        }

        $dataForm = $this->formCreateUpdate();

        return view('v1.admin.users.create', compact('dataForm', 'typeUser'));
    }

    public function store(Request $request)
    {
        // Verificar se o usuário tem a permissão para criar outros usuários
        if (!Gate::allows('create-users', auth())) {
            // Se não tiver permissão, lance uma exceção de autorização
            abort(403, 'Você não tem permissão para cadastrar usuários.');
        }

        $validator = Validator::make(
            $request->all(),
            [
                'name' => ['required', 'string', 'min:5', 'max:255', new NameAndSurname],
                'email' => "unique:users,email|email|max:255",
                'cpf' => [
                    'nullable',
                    'max:20',
                    Rule::unique('users', 'cpf')->whereNotNull('cpf')
                ],
                // 'phone' => 'required|max:20'
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
        // Obtém o usuário atual
        $loggedUser = auth()->user();

        $alterUser = User::where('id', $id)->first();

        // Verificar se o usuário está tentando atualizar seu próprio perfil
        if ($loggedUser->id !== $alterUser->id) {

            // Verificar se o usuário tem a permissão para visualizar outros usuários
            if (!Gate::allows('edit-users', auth())) {
                // Se não tiver permissão, lance uma exceção de autorização
                abort(403, 'Você não tem permissão para editar usuários.');
            }
        }

        // Validação dos dados recebidos do formulário
        $validator = Validator::make($request->all(), [
            'name' => 'required_without_all:firstName,lastName|string|max:255',
            'firstName' => 'required_without:name|string|max:255',
            'lastName' => 'required_without:name|string|max:255',

            'email' => [
                'nullable',
                'email',
                'max:255',
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

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }




        // Obtém o CPF do formulário
        $cpf = $request->input('cpf');

        // Valida e limpa o CPF
        if ($cpf != NULL) {
            $cleanedCPF = $this->validateAndCleanCPF($cpf);
            // Verifica se o CPF é válido
            if ($cleanedCPF === 'erro') {
                // CPF inválido
                return redirect()->back()->withErros('CPF inválido.');
            }
        }


         // Combinar os valores de 'name' ou 'firstName' e 'lastName'
         if ($request->has('name')) {
            $name = $request->input('name');
        } else {
            $name = $request->input('firstName') . ' ' . $request->input('lastName');
        }

       

        if ($loggedUser->id != $alterUser->id) {

            if ($loggedUser->user_type_id == 1) {
                
                try {
                    // Atualiza os dados do usuário
                    $alterUser->update([
                        'name' => $name,
                        'title' => $request->input('title'),
                        'email' => $request->input('email'),
                        'cpf' => $cleanedCPF ?? null,
                        'bio' => $request->input('bio'),
                        // Adicione outros campos para atualizar conforme necessário
                    ]);
                    $alterUser->user_type_id = $request->input('user_type_id');
                    $alterUser->save();

                    // Redireciona de volta para a página do perfil do usuário
                    return redirect()->back()->with('success', 'Perfil atualizado com sucesso.');
                } catch (\Exception $e) {

                    // Se ocorrer um erro, redireciona de volta para a página do perfil do usuário
                    // com uma mensagem de erro
                    return redirect()->back()->withErrors('error', 'Erro ao atualizar perfil');
                }
            } else {

                return redirect()->back()->withErrors('Sem permissão para realizar essa operação.');
            }
        } else {

            try {
                // Atualiza os dados do usuário
                $alterUser->update([
                    'name' => $name ,
                    'title' => $request->input('title'),
                    'email' => $request->input('email'),
                    'cpf' => $cleanedCPF ?? null,

                    'bio' => $request->input('bio'),
                    // Adicione outros campos para atualizar conforme necessário
                ]);


                // Redireciona de volta para a página do perfil do usuário
                return redirect()->back()->with('success', 'Seus dados foram alterados com sucesso.');
            } catch (\Exception $e) {
                // Se ocorrer um erro, redireciona de volta para a página do perfil do usuário
                // com uma mensagem de erro
                return redirect()->back()->withErrors('error', 'Erro ao atualizar perfil');
            }
        }
    }

    public function updateRoles(Request $request, string $id)
    {
        if(Auth::user()->user_type_id == 1){
            // Verificar se o usuário tem a permissão para visualizar outros usuários
            if (!Gate::allows('edit-users', auth())) {

                // Se não tiver permissão, lance uma exceção de autorização
                abort(403, 'Você não tem permissão para editar usuários.');

                 // Verificar se o usuário tem a permissão para visualizar outros usuários
                if (!Gate::allows('edit-roles', auth())) {
                    // Se não tiver permissão, lance uma exceção de autorização
                    abort(403, 'Você não tem permissão para editar permissões.');
                }
            }
           
        }

        $alterUser = User::find($id);

         // Receber as roles enviadas no request
        $roles = $request->input('roles', []);

        // Atualizar as roles do usuário
        $alterUser->roles()->sync($roles);

        return redirect()->route('users.show', $alterUser->id)->with('success', 'Permissões atualizadas com sucesso.');
    }
    
    protected function validateAndCleanCPF($cpf)
    {
        // Remove caracteres especiais do CPF
        $cpf = preg_replace('/[^0-9]/', '', $cpf);

        // Verifica se o CPF possui 11 dígitos
        if (strlen($cpf) !== 11) {
            return 'erro'; // CPF inválido
        }

        // Verifica se todos os dígitos do CPF são iguais
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return 'erro'; // CPF inválido
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
