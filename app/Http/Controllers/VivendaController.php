<?php

namespace App\Http\Controllers;

use App\Models\Vivenda;
use Illuminate\Http\Request;

class VivendaController extends Controller
{
    public function index()
    {
        return Vivenda::all();
    }

    public function show($id)
    {
        return Vivenda::findOrFail($id);
    }

    public function store(Request $request)
    {
        $vivenda = Vivenda::create($request->all());
        return response()->json($vivenda, 201);
    }

    public function update(Request $request, $id)
    {
        $vivenda = Vivenda::findOrFail($id);
        $vivenda->update($request->all());
        return response()->json($vivenda, 200);
    }

    public function destroy($id)
    {
        Vivenda::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
