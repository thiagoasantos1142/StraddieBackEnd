<?php

namespace App\Models\V1\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

     // Adicione as colunas user_id e role_id ao array fillable
     protected $fillable = ['user_id', 'role_id'];


      public function assignRole($user, $roles)
    {
        foreach ($roles as $role_id) {
            $this->create([
                'user_id' => $user->id,
                'role_id' => $role_id,
            ]);
        }
    }
}
