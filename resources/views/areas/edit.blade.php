@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Área</h2>
    <form action="{{ route('areas.update', $area->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Área</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $area->nombre }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('areas.index') }}" class="btn btn-