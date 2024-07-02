<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index()
    {
        return Funcionario::all();
    }

    public function show($id)
    {
        return Funcionario::findOrFail($id);
    }

    public function store(Request $request)
    {
        $funcionario = Funcionario::create($request->all());
        return response()->json($funcionario, 201);
    }

    public function update(Request $request, $id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->update($request->all());
        return response()->json($funcionario, 200);
    }

    public function destroy($id)
    {
        Funcionario::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
