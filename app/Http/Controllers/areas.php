<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Area;

class areas extends Controller
{
    // Listar todas las áreas
    public function index()
    {
        $areas = area::all();
        return response()->json($areas);
    }

    // Guardar una nueva área solo con nombre
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $area = area::create([
            'nombre' => $request->nombre,
        ]);

        return response()->json($area, 201);
    }
}
