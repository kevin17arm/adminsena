@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Crear Área</h2>
    <form action="{{ route('areas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Área</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('areas.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection