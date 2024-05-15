<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyModel;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = CompanyModel::all();
        return response()->json($companies);
    }

    public function store(Request $request)
    {
        $company = CompanyModel::create($request->all());
        return response()->json($company, 201);
    }

    public function show($id)
    {
        $company = CompanyModel::findOrFail($id);
        return response()->json($company);
    }

    public function update(Request $request, $id)
    {
        $company = CompanyModel::findOrFail($id);
        $company->update($request->all());
        return response()->json($company, 200);
    }

    public function destroy($id)
    {
        $company = CompanyModel::findOrFail($id);
        $company->delete();
        return response()->json(null, 204);
    }
}
