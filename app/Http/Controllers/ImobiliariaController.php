<?php

namespace App\Http\Controllers;

use App\Models\Imobiliaria;
use Illuminate\Http\Request;

class ImobiliariaController extends Controller
{
    public function index()
    {
        return Imobiliaria::all();
    }

    public function show($id)
    {
        return Imobiliaria::findOrFail($id);
    }

    public function store(Request $request)
    {
        $imobiliaria = Imobiliaria::create($request->all());
        return response()->json($imobiliaria, 201);
    }

    public function update(Request $request, $id)
    {
        $imobiliaria = Imobiliaria::findOrFail($id);
        $imobiliaria->update($request->all());
        return response()->json($imobiliaria, 200);
    }

    public function destroy($id)
    {
        Imobiliaria::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
