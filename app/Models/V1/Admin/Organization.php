<?php

namespace App\Models\V1\Admin;

use App\Helpers\CustomHelpers;
use App\Models\Address;
use App\Models\Contact;
use App\Models\OrganizationType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organization extends Model
{
    use HasFactory;

    // use SoftDeletes;

    protected $fillable = ['user_id', 'organization_type_id', 'cnpj', 'main_CNAE', 'nome_fantasia', 'razao_social', 'state_registration', 'municipal_registration', 'UF', 'website', 'cnpj_opening_date', 'contacts_id', 'addresses_id', 'email'];

    protected $appends = [
        'is_pj'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function OrganizationType()
    {
        return $this->belongsTo(OrganizationType::class, 'organization_type_id');
    }
    public function getTypes()
    {
        return $this->hasMany(OrganizationType::class);
    }
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
    public function users_organization()
    {
        return $this->hasMany(User::class, 'organization_id');
    }
    public function getCreatedAtAttribute($value)
    {
        return CustomHelpers::formatDate($value);
    }
    public function getCnpjAttribute($value)
    {
        return CustomHelpers::formatCnpj($value);
    }

    public function setCnpjAttribute($value)
    {
        $this->attributes['cnpj'] = CustomHelpers::removeFormat($value);
    }

    public function getIsPjAttribute()
    {
        return  "true";
    }
}
