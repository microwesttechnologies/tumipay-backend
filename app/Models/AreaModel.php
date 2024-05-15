<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreaModel extends Model
{
    protected $table = 'area';
    protected $primaryKey = 'id_area';
    public $timestamps = false;
    protected $fillable = ['name_area'];

    public function employees()
    {
        return $this->hasMany(EmployeeModel::class, 'id_area');
    }
}
