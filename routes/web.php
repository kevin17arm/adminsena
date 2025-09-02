<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\areas;

Route::get('/', function () {
    return view('welcome');
});
// Listar todas las áreas
Route::get('/areas', [areas::class, 'index']);
// Crear una nueva área
Route::post('/areas', [areas::class, 'store']);
// Mostrar una área específica
Route::get('/areas/{id}', [areas::class, 'show']);
// Actualizar una área
Route::put('/areas/{id}', [areas::class, 'update']);
// Eliminar una área
Route::delete('/areas/{id}', [areas::class, 'destroy']);
