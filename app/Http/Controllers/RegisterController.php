<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Contact;
use App\Models\User;
use App\Models\V1\Admin\Organization;
use App\Models\V1\Admin\UserRole;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class RegisterController extends Controller
{
    public function storeOriginador(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',   
            'cpf' => 'required|string|max:255|unique:users',
            'phone' => 'required|string|max:20',        
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
       

        $user = User::create([
            'name' => $request->name,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type_id' => 3, // Define o tipo de usuário "originador" como 3
        ]);

        $formatedPhone = $this->cleanAndValidatePhoneNumber($request->phone);

        if($formatedPhone === NULL){

            return redirect()->back()->withErrors('Formato telefone invalido');
        }

        $contact = new Contact;
        $contact->user_id = $user->id;
        $contact->phone = $formatedPhone;
        $contact->save();


        $user->user_type_id = 3; // Define o tipo de usuário "originador" como 3
        $user->save();
        
        $roles = [5,13,15];

        $userRoles = new UserRole();
        $userRoles->assignRole($user, $roles);

        // Autentique o usuário imediatamente após o registro
        auth()->login($user);

        return redirect()->route('profile'); // Redirecione para a página inicial ou outra página desejada
    }

    public function storeOrganization(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // User validation
            'name' => 'required|string|max:255',
            'cpf' => 'required|string|max:255|unique:users',
            'phone' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            // Organization validation
            'nome_fantasia' => 'required|string|max:255',
            'razao_social' => 'required|string|max:255',
            'cnpj' => 'required|string|max:255|unique:organizations',
            'organization_email' => 'required|string|email|max:255|unique:organizations,email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction(); // Inicia uma transação

        try {
            // Create organization
            $organization = Organization::create([
                'nome_fantasia' => $request->nome_fantasia,
                'razao_social' => $request->razao_social,
                'email' => $request->organization_email,
                'cnpj' => $request->cnpj
            ]);

            // Create contact for organization phone
            Contact::create([
                'organization_id' => $organization->id,
                'phone' => $request->organization_phone,
            ]);

            // Create user
            $user = User::create([
                'name' => $request->name,
                'cpf' => $request->cpf,
                'email' => $request->email,
                'organization_id' => $organization->id,
                'password' => Hash::make($request->password),
            ]);

            $formatedPhone = $this->cleanAndValidatePhoneNumber($request->phone);

            if($formatedPhone === NULL){
                throw new \Exception('Formato telefone invalido');
            }

            $contact = new Contact;
            $contact->user_id = $user->id;
            $contact->phone = $formatedPhone;
            $contact->save();

            $user->user_type_id = 5; // Define o tipo de usuário "Cliente Empresa" como 5
            $user->save();

            $roles = [7,10,14];

            $userRoles = new UserRole();
            $userRoles->assignRole($user, $roles);

            DB::commit(); // Se tudo foi bem, comita a transação

            // Autentique o usuário imediatamente após o registro
            auth()->login($user);

            return redirect()->route('profile'); // Redirecione para a página inicial ou outra página desejada

        } catch (\Exception $e) {
            DB::rollBack(); // Se algo deu errado, reverte todas as operações
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
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
}
