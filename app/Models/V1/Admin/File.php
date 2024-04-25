<?php

namespace App\Models\V1\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(FileType::class, 'type_id');
    }

    public function status()
    {
        return $this->belongsTo(FileStatus::class, 'status_id');
    }

}
