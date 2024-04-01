<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email', 'telefone', 'cliente_type', 'ativo_disponivel', 'mensagem'];

    public function setTelefoneAttribute($value)
    {
        $this->attributes['telefone'] = str_replace(['-', '(', ')', ' '], '', $value);
    }
}
