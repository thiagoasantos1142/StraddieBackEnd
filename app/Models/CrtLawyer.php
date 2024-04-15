<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrtLawyer extends Model
{
    use HasFactory;

    protected $fillable = [
        'lawyer_id',
        'credit_rights_title_id',
    ];
}
