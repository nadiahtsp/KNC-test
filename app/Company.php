<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $primaryKey = 'company_id';
    protected $fillable = ['company_name', 'company_address', 'company_email', 'company_phone'];

    public function employee()
    {
        return $this->hasMany(Employee::class, 'id_comp');
    }
}
