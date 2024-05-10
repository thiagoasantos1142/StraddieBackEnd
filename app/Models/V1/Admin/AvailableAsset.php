<?php

namespace App\Models\V1\Admin;

use App\Helpers\CustomHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Return_;

class AvailableAsset extends Model
{
    use HasFactory;

    protected $appends = ['count_offer'];

    public function due_diligence()
    {
        return $this->hasOne(DueDiligence::class, 'id', 'due_diligence_id');
    }

    public function getCreatedAtAttribute($value)
    {
        return CustomHelpers::formatDate($value);
    }
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
        return CustomHelpers::formatMoney($value);
    }

    public function setNegotiatedMainValueAttribute($value)
    {
        $this->attributes['negotiated_main_value'] = CustomHelpers::removeFormatMoney($value);
    }



    public function getNegotiatedFeeValueAttribute($value)
    {
        return CustomHelpers::formatMoney($value);
    }

    public function setNegotiatedFeeValueAttribute($value)
    {
        $this->attributes['negotiated_fee_value'] = CustomHelpers::removeFormatMoney($value);
    }

    public function getNegotiatedValueAttribute($value)
    {
        return CustomHelpers::formatMoney($value);
    }

    public function getPercentageContractualFeeAttribute($value)
    {
        return CustomHelpers::formatPercentage($value);
    }

    public function getCountOfferAttribute($value)
    {
        $count = Offers::where('available_assets_id', $this->id)->count();
        if (!$count) {
            return 'N/A';
        }
        $value = $count;
        return $value;
    }
}
