<?php

namespace App\Models\V1\Admin;

use App\Helpers\CustomHelpers;
use App\Models\OfferCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    public function asset()
    {
        return $this->belongsTo(AvailableAsset::class, 'available_asset_id');
    }
    public function organization()
    {
        return $this->belongsTo(Organization::class, 'organization_id');
    } 

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    } 
    
    public function category()
    {
        return $this->hasOne(OfferCategory::class, 'id', 'offer_category_id');
    }
    public function status()
    {
        return $this->hasOne(OfferStatus::class, 'id', 'status_id');
    }
    public function getCreatedAtAttribute($value)
    {
        return CustomHelpers::formatDate($value);
    }
    public function getValueAttribute($value)
    {
        return CustomHelpers::formatMoney($value);
    }
}
