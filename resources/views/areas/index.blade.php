@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Listado de Áreas</h2>
    <a href="{{ route('areas.create') }}" class="btn btn-primary mb-3">Crear Área</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach($areas as $area)
            <tr>
                <td>{{ $area->id }}</td>
                <td>{{ $area->nombre }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection