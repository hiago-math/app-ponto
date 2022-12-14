<?php

namespace App\Domain\Models;

class Company extends BaseModel
{
    protected $primaryKey = 'uid_company';
    protected $table = 'company';

    protected $fillable = [
        'name',
        'fantasy_name',
        'cnpj',
        'uid_status'
    ];

    public function phonesCompany()
    {
        return $this->hasMany(PhonesCompany::class, 'uid_company');
    }

    public function status()
    {
        return $this->hasOne(Status::class, 'uid_status', 'uid_status');
    }

    public function users()
    {
        return $this->belongsToMany(Users::class, 'user_x_company','uid_company','uid_user');
    }
}
