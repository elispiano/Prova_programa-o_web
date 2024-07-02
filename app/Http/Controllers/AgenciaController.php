<?php

namespace App\Http\Controllers;

use App\Models\Agencia;
use Illuminate\Http\Request;

class AgenciaController extends Controller
{
    public function index()
    {
        return Agencia::all();
    }

    public function show($id)
    {
        return Agencia::findOrFail($id);
    }

    public function store(Request $request)
    {
        $agencia = Agencia::create($request->all());
        return response()->json($agencia, 201);
    }

    public function update(Request $request, $id)
    {
        $agencia = Agencia::findOrFail($id);
        $agencia->update($request->all());
        return response()->json($agencia, 200);
    }

    public function destroy($id)
    {
        Agencia::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
