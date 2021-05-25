<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['id_comp', 'fullname', 'email', 'phone', 'department'];
    public function company()
    {
        return $this->belongsTo(Company::class, 'id_comp', 'company_id');
    }
}
