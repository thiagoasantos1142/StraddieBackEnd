<?php

namespace App\Models\V1\Admin;

use App\Helpers\CustomHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DueDiligence extends Model
{
    use HasFactory;

    public function crt()
    {
        return $this->belongsTo(CreditRightsTitle::class, 'credit_rights_title_id');
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
