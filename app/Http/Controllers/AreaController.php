<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AreaModel;

class AreaController extends Controller
{
    public function index()
    {
        $areas = AreaModel::all();
        return response()->json($areas);
    }

    public function store(Request $request)
    {
        $area = AreaModel::create($request->all());
        return response()->json($area, 201);
    }

    public function show($id)
    {
        $area = AreaModel::findOrFail($id);
        return response()->json($area);
    }

    public function update(Request $request, $id)
    {
        $area = AreaModel::findOrFail($id);
        $area->update($request->all());
        return response()->json($area, 200);
    }

    public function destroy($id)
    {
        $area = AreaModel::findOrFail($id);
        $area->delete();
        return response()->json(null, 204);
    }
}

