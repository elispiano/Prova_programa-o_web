<?php

namespace App\Http\Controllers;

use App\Models\Terreno;
use Illuminate\Http\Request;

class TerrenoController extends Controller
{
    public function index()
    {
        return Terreno::all();
    }

    public function show($id)
    {
        return Terreno::findOrFail($id);
    }

    public function store(Request $request)
    {
        $terreno = Terreno::create($request->all());
        return response()->json($terreno, 201);
    }

    public function update(Request $request, $id)
    {
        $terreno = Terreno::findOrFail($id);
        $terreno->update($request->all());
        return response()->json($terreno, 200);
    }

    public function destroy($id)
    {
        Terreno::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
