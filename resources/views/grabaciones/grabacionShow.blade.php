@extends('layouts.tabler')

@section('content')
<div class="page-header">
    <h1 class="page-title">
        Grabación # {{ $grabacion->id }}
    </h1>
</div>

<div class="row">
    <div class="col-12 col-md-10">
        <ul>
            <li>Fecha: {{ $grabacion->fecha }}</li>
            <li>Tema: {{ $grabacion->tema }}</li>
            <li>Observaciones: {{ $grabacion->observaciones }}</li>
            <li>Enlace: {{ $grabacion->enlace }}</li>
        </ul>
    </div>
    <div class="col-12 col-md-2">
        <a class="btn btn-primary" href="{{ route('grabacion.index') }}">Listado de Grabaciones</a>
        <a class="btn btn-warning" href="{{ route('grabacion.edit', [$grabacion->id]) }}">Editar Grabación</a>
        <form action="{{ route('grabacion.destroy', [$grabacion]) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
</div>
@endsection
