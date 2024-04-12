<?php

namespace App\Models\V1\Admin;

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
        'vara_id'
       
    ];

    use HasFactory;

  

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

    

}
