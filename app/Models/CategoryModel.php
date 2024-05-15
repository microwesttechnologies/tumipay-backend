<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'id_category';
    public $timestamps = false;
    protected $fillable = ['name_category'];
    public function employees()
    {
        return $this->hasMany(EmployeeModel::class, 'id_category');
    }
}
