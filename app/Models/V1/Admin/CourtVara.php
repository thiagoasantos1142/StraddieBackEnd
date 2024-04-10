<?php

namespace App\Models\V1\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourtVara extends Model
{
    use HasFactory;

    public function court()
    {
        return $this->belongsTo(court::class);
    }
}
