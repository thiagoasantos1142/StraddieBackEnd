<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'street', 'zip', 'neighborhood', 'street_number', 'complement', 'organization_id', 'city_id'];

    protected $appends = ['title_city'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function getTitleCityAttribute()
    {
        return City::find($this->city_id)['title'] ?? 'N/A';
    }

    public function setZipAttribute($value)
    {
        $value = str_replace(['-', '.'], '', $value);
        $this->attributes['zip'] = $value;
    }
}
