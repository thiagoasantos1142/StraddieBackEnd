<?php

namespace App\Models\V1\Admin;

use App\Helpers\CustomHelpers;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditRightsTitle extends Model
{
    protected $fillable = [
        'title',
        'specie_id',
        'court_id',
        'nature_credit_id',
        'nature_obligation_id',
        'origin_debtor_id',
        'principal_amount',
        'vara_id',
        'process_number',
        'class'
       
    ];

    use HasFactory;

    // Método para manipular os dados antes de salvar
    // protected static function boot()
    // {
    //     parent::boot();

    //     // Manipulação dos dados antes de salvar
    //     static::saving(function ($creditRightsTitle) {
    //         // Verifica se o campo principal_amount está definido e não é nulo
    //         if (isset($creditRightsTitle->principal_amount) && !is_null($creditRightsTitle->principal_amount)) {
    //             // Remove qualquer caracter não numérico, exceto o ponto decimal
    //             $creditRightsTitle->principal_amount = preg_replace('/[^0-9.]/', '', $creditRightsTitle->principal_amount);

    //             // Converte o valor para float
    //             $creditRightsTitle->principal_amount = floatval($creditRightsTitle->principal_amount);
    //         }
    //     });
    // }

    public function crtOriginDebtor()
    {
        return $this->belongsTo(CrtOriginDebtor::class, 'origin_debtor_id');
    }
    public function crtNatureCredit()
    {
        return $this->belongsTo(CrtNatureCredit::class, 'nature_credit_id');
    }

    public function court()
    {
        return $this->belongsTo(Court::class, 'court_id');
    }

    public function vara()
    {
        return $this->belongsTo(CourtVara::class, 'court_id');
    }

    public function users_titles()
    {
        return $this->belongsToMany(User::class, 'users_credit_rights_titles', 'credit_rights_title_id', 'user_id');
    }

    public function getPrincipalAmountAttribute($value)
    {
        return 'R$ ' . number_format($value, 2, ',', '.');
    }

    public function setPrincipalAmountAttribute($value)
    {
        $this->attributes['principal_amount'] = CustomHelpers::removeFormatMoney($value);
    }

}
