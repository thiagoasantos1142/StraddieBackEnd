<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\V1\Admin\UserRole;
use Hash;
use Illuminate\Http\Request;
use Validator;

class RegisterController extends Controller
{
    public function storeOriginador(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',   
            'cpf' => 'required|string|max:255|unique:users',
            'phone' => 'required|string|max:20|unique:users',        
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $formatedPhone = $this->cleanAndValidatePhoneNumber($request->phone);

        if($formatedPhone === NULL){

            return redirect()->back()->withErrors('Formato telefone invalido');
        }

        $user = User::create([
            'name' => $request->name,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'phone' => $formatedPhone,
            'password' => Hash::make($request->password),
            'user_type_id' => 3, // Define o tipo de usuário "originador" como 3
        ]);

        $user->user_type_id = 3; // Define o tipo de usuário "originador" como 3
        $user->save();
        
        $roles = [5,13,15];

        $userRoles = new UserRole();
        $userRoles->assignRole($user, $roles);

        // Autentique o usuário imediatamente após o registro
        auth()->login($user);

        return redirect()->route('profile'); // Redirecione para a página inicial ou outra página desejada
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
