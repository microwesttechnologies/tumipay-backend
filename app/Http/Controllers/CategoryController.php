<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = CategoryModel::all();
        return response()->json($categories);
    }
    public function store(Request $request)
    {
        $category = CategoryModel::create($request->all());
        return response()->json($category, 201);
    }
    public function show($id)
    {
        $category = CategoryModel::findOrFail($id);
        return response()->json($category);
    }
    public function update(Request $request, $id)
    {
        $category = CategoryModel::findOrFail($id);
        $category->update($request->all());
        return response()->json($category, 200);
    }
    public function destroy($id)
    {
        $category = CategoryModel::findOrFail($id);
        $category->delete();
        return response()->json(null, 204);
    }
}
