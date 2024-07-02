<?php

namespace App\Http\Controllers;

use App\Models\Apartamento;
use Illuminate\Http\Request;

class ApartamentoController extends Controller
{
    public function index()
    {
        return Apartamento::all();
    }

    public function show($id)
    {
        return Apartamento::findOrFail($id);
    }

    public function store(Request $request)
    {
        $apartamento = Apartamento::create($request->all());
        return response()->json($apartamento, 201);
    }

    public function update(Request $request, $id)
    {
        $apartamento = Apartamento::findOrFail($id);
        $apartamento->update($request->all());
        return response()->json($apartamento, 200);
    }

    public function destroy($id)
    {
        Apartamento::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
