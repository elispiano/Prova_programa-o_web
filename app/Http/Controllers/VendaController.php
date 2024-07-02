<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function index()
    {
        return Venda::all();
    }

    public function show($id)
    {
        return Venda::findOrFail($id);
    }

    public function store(Request $request)
    {
        $venda = Venda::create($request->all());
        return response()->json($venda, 201);
    }

    public function update(Request $request, $id)
    {
        $venda = Venda::findOrFail($id);
        $venda->update($request->all());
        return response()->json($venda, 200);
    }

    public function destroy($id)
    {
        Venda::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
