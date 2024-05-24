<?php

namespace App\Models\V1\Admin;

use App\Helpers\CustomHelpers;
use App\Models\User;
use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Return_;

class AvailableAsset extends Model
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

    protected $appends = ['total_negotiated_value', 'count_offer'];

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
        return $this->hasMany(Offer::class);
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
        $count = Offer::where('available_asset_id', $this->id)->count();
        if (!$count) {
            return '0';
        }
        $value = $count;
        return $value;
    }
    public static function getTotalNegotiatedValue($statusIds)
    {
        $assets = self::whereIn('status_id', $statusIds)->get();

        $total = $assets->sum(function($asset) {
            $mainValue = self::parseCurrency($asset->negotiated_main_value);
            $feeValue = self::parseCurrency($asset->negotiated_fee_value);
            return $mainValue + $feeValue;
        });

        return 'R$ ' . number_format($total, 2, ',', '.');
    }

    private static function parseCurrency($value)
    {
        // Remove "R$", pontos e converte a vírgula para ponto decimal
        $value = str_replace(['R$', '.', ','], ['', '', '.'], $value);
        return (float) $value;
    }

     // Opcional: Adicionar acessor para total_negotiated_value se necessário
     public function getTotalNegotiatedValueAttribute()
     {
         $mainValue = self::parseCurrency($this->negotiated_main_value);
         $feeValue = self::parseCurrency($this->negotiated_fee_value);
         return $mainValue + $feeValue;
     }
}
