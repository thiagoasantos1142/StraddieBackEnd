<?php

namespace App\Models\V1\Admin;

use App\Helpers\CustomHelpers;
use App\Models\User;
use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DueDiligence extends Model
{
    use HasFactory;

    
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (Auth::check()) {
                $model->created_by = Auth::id();
            }
        });
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function crt()
    {
        return $this->belongsTo(CreditRightsTitle::class, 'credit_rights_title_id');
    }

    public function crtOriginDebtor()
    {
        return $this->hasOneThrough(
            CrtOriginDebtor::class, // Model destino
            CreditRightsTitle::class, // Model intermediária
            'id', // Chave estrangeira na model intermediária (CreditRightsTitle)
            'id', // Chave estrangeira na model de destino (CrtOriginDebtor)
            'credit_rights_title_id', // Chave local na model de origem (DueDiligence)
            'origin_debtor_id' // Chave local na model intermediária (CreditRightsTitle)
        );
    }
    
    public function status()
    {
        return $this->belongsTo(DueDiligenceStatuses::class, 'status_id');
    }

    public function getCreatedAtAttribute($value)
    {
        return CustomHelpers::formatDate($value);
    }
}
