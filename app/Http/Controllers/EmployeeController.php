<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeModel;


class EmployeeController extends Controller
{

    public function index()
    {
        $employees = EmployeeModel::select('employee.id_employee', 'employee.full_name', 'employee.hire_date', 'employee.email', 'company.name_company', 'area.name_area', 'category.name_category', 'employee.satisfaction_level', 'employee.favorite')
            ->join('company', 'employee.id_company', '=', 'company.id_company')
            ->join('area', 'employee.id_area', '=', 'area.id_area')
            ->join('category', 'employee.id_category', '=', 'category.id_category')
            ->get();

        return response()->json($employees);
    }

    public function store(Request $request)
    {
        $employee = EmployeeModel::create($request->all());
        $employeeId = $employee->id_employee;

        return response()->json($employeeId, 201);
    }





    public function show($id)
    {
        $employee = EmployeeModel::select('employee.id_employee', 'employee.full_name', 'employee.hire_date', 'employee.email', 'company.name_company', 'area.name_area', 'category.name_category', 'employee.satisfaction_level', 'employee.favorite')
            ->join('company', 'employee.id_company', '=', 'company.id_company')
            ->join('area', 'employee.id_area', '=', 'area.id_area')
            ->join('category', 'employee.id_category', '=', 'category.id_category')
            ->where('employee.id_employee', $id)
            ->first();

        if (!$employee) {
            return response()->json(['message' => 'Empleado no encontrado'], 404);
        }

        return response()->json($employee);
    }


    public function update(Request $request, $id)
    {
        $employee = EmployeeModel::findOrFail($id);
        $employee->update($request->all());
        return response()->json($employee, 200);
    }

    public function destroy($id)
    {
        $employee = EmployeeModel::findOrFail($id);
        $employee->delete();
        return response()->json(null, 204);
    }
}
