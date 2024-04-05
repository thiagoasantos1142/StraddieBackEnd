<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'entidade_type_id', 'cnpj', 'main_CNAE', 'nome_fantasia', 'razao_social', 'state_registration', 'municipal_registration', 'UF', 'website', 'cnpj_opening_date', 'contacts_id', 'addresses_id'];
}
