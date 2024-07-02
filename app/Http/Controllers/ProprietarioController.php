<?php

namespace App\Http\Controllers;

use App\Models\Proprietario;
use Illuminate\Http\Request;

class ProprietarioController extends Controller
{
    public function index()
    {
        return Proprietario::all();
    }

    public function show($id)
    {
        return Proprietario::findOrFail($id);
    }

    public function store(Request $request)
    {
        $proprietario = Proprietario::create($request->all());
        return response()->json($proprietario, 201);
    }

    public function update(Request $request, $id)
    {
        $proprietario = Proprietario::findOrFail($id);
        $proprietario->update($request->all());
        return response()->json($proprietario, 200);
    }

    public function destroy($id)
    {
        Proprietario::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
