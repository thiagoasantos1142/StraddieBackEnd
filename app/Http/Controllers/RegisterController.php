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
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
      
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type_id' => 3, // Defina o tipo de usuário desejado
        ]);
        
        $roles = [4,5];

        $userRoles = new UserRole();
        $userRoles->assignRole($user, $roles);

        // Autentique o usuário imediatamente após o registro
        auth()->login($user);

        return redirect()->route('profile'); // Redirecione para a página inicial ou outra página desejada
    }
}
