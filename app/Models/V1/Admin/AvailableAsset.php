<?php

namespace App\Models\V1\Admin;

use App\Helpers\CustomHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailableAsset extends Model
{
    use HasFactory;

    public function due_diligence()
    {
        return $this->hasOne(DueDiligence::class, 'id', 'due_diligence_id');
    }

    public function getCreatedAtAttribute($value)
    {
        return CustomHelpers::formatDate($value);
    }
}
