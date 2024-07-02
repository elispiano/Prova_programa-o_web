<?php

namespace App\Http\Controllers;

use App\Models\Imovel;
use Illuminate\Http\Request;

class ImovelController extends Controller
{
    public function index()
    {
        return Imovel::all();
    }

    public function show($id)
    {
        return Imovel::findOrFail($id);
    }

    public function store(Request $request)
    {
        $imovel = Imovel::create($request->all());
        return response()->json($imovel, 201);
    }

    public function update(Request $request, $id)
    {
        $imovel = Imovel::findOrFail($id);
        $imovel->update($request->all());
        return response()->json($imovel, 200);
    }

    public function destroy($id)
    {
        Imovel::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
