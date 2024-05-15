<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    protected $table = 'employee';

    protected $primaryKey = 'id_employee';

    public $timestamps = false;
    protected $fillable = [
        'id_employee',
        'full_name',
        'hire_date',
        'email',
        'id_area',
        'id_category',
        'id_company',
        'satisfaction_level',
        'favorite'
    ];

    public function area()
    {
        return $this->belongsTo(AreaModel::class, 'id_area');
    }

    public function category()
    {
        return $this->belongsTo(CategoryModel::class, 'id_category');
    }

    public function company()
    {
        return $this->belongsTo(CompanyModel::class, 'id_company');
    }
}
