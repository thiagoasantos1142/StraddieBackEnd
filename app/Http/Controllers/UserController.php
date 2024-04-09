<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $search = $request->input('search');

            $users = User::where('email', 'like', "%$search%")
                ->orWhere('id', 'like', "%$search%")
                ->orWhere('name', 'like', "%$search%")
                ->orWhere('cpf', 'like', "%$search%")
                ->latest()
                ->limit(10)
                ->get();

            return response()->json($users, 200);
        }
    }

    public function show(Request $request, string $id)
    {
        if ($request->ajax()) {
            $user = User::find($id);
            return response()->json($user, 200);
        }
    }

    public function update(Request $request)
    {
        // Obtém o ID do usuário atual
        $userId = auth()->id();

        // Validação dos dados recebidos do formulário
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => "unique:users,email,{$userId}|email|max:255",
            'phone' => 'required|max:20',
            'cpf' => "unique:users,cpf,{$userId}|max:20",

            // Adicione outras regras de validação conforme necessário
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
}
