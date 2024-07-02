<?php

namespace App\Http\Controllers;

use App\Models\Telefone;
use Illuminate\Http\Request;

class TelefoneController extends Controller
{
    public function index()
    {
        return Telefone::all();
    }

    public function show($id)
    {
        return Telefone::findOrFail($id);
    }

    public function store(Request $request)
    {
        $telefone = Telefone::create($request->all());
        return response()->json($telefone, 201);
    }

    public function update(Request $request, $id)
    {
        $telefone = Telefone::findOrFail($id);
        $telefone->update($request->all());
        return response()->json($telefone, 200);
    }

    public function destroy($id)
    {
        Telefone::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
