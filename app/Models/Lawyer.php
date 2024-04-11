<?php

namespace App\Models;

use App\Models\V1\Admin\Organization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'title',
        'OAB_number',
        'UF',
       // '_token', // Adicione o atributo _token à lista de atributos preenchíveis.
    ];
    public function user()
    {
        return $this->belongsTo(Organization::class);
    }


}
