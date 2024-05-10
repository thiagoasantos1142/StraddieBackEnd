<?php

namespace App\Models\V1\Admin;

use App\Helpers\CustomHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailableAsset extends Model
{
    use HasFactory;

    public function status()
    {
        return $this->belongsTo(AvailableAssetStatus::class, 'status_id');
    }

    public function dueDiligence()
    {
        return $this->belongsTo(DueDiligence::class, 'due_diligence_id');
    }

    public function offers()
    {
        return $this->hasMany(Offers::class);
    }


    
    public function getNegotiatedMainValueAttribute($value)
    {
        return 'R$ ' . number_format($value, 2, ',', '.');
    }

    public function setNegotiatedMainValueAttribute($value)
    {
        $this->attributes['negotiated_main_value'] = CustomHelpers::removeFormatMoney($value);
    }

    
    
    public function getNegotiatedFeeValueAttribute($value)
    {
        return 'R$ ' . number_format($value, 2, ',', '.');
    }

    public function setNegotiatedFeeValueAttribute($value)
    {
        $this->attributes['negotiated_fee_value'] = CustomHelpers::removeFormatMoney($value);
    }

}
