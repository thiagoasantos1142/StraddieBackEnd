<?php

namespace App\Models\V1\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersCreditRightsTitle extends Model
{
    use HasFactory;
    
    public function users()
    {
        return $this->belongsToMany(User::class, 'users_credit_rights_titles', 'credit_rights_title_id', 'user_id');
    }
}
