@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalle del Área</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID: {{ $area->id }}</h5>
            <p class="card-text"><strong>Nombre:</strong> {{ $area->nombre }}</p>
        </div>
    </div>
    <a href="{{ route('areas.index') }}" class="btn btn-secondary mt-