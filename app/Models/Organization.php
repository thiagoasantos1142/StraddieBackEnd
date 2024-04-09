<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'razao_social', 'nome_fantasia', 'cnpj', 'state_registration', 'municipal_registration', 'email', 'entidade_type_id'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function EntidadeType()
    {
        return $this->belongsTo(EntidadeType::class, 'entidade_type_id');
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
    public function users_company()
    {
        return $this->hasMany(User::class, 'organization_id');
    }
}
