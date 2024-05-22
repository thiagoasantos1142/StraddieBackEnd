<?php

namespace App\Models\V1\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationsCreditRightsTitle extends Model
{
    use HasFactory;

    protected $fillable = [
        'organizations_id',
        'credit_rights_titles_id',
    ];

    public function organizations()
    {
        return $this->hasMany(Organization::class, 'id', 'organizations_id');
    }
}
