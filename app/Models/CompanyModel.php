<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyModel extends Model
{
    protected $table = 'company';
    protected $primaryKey = 'id_company';
    public $timestamps = false;
    protected $fillable = ['name_company', 'country_company'];

    public function employees()
    {
        return $this->hasMany(EmployeeModel::class, 'id_company');
    }
}
