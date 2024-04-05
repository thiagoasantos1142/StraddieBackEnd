<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function EntidadeType()
    {
        return $this->belongsTo(EntidadeType::class, 'entidade_type_id');
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
