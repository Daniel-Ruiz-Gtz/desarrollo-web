@extends('layouts.tabler')

@section('content')

<div class="page-header">
    <h1 class="page-title">Listado de Grabaciones</h1>
</div>

<div class="row">
    <div class="col-12 col-md-10">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-hover table-outline">
                    <tr>
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Tema</th>
                        <th>Enlace</th>
                    </tr>
                    @foreach ($grabaciones as $grabacion)
                        <tr>
                            <td>{{ $grabacion->id }}</td>
                            <td>{{ $grabacion->fecha }}</td>
                            <td>
                                <a href="{{ route('grabacion.show', [$grabacion]) }}">{{ $grabacion->tema }}</a>
                            </td>
                            <td>{{ $grabacion->enlace }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-2">
        <a href="{{ route('grabacion.create') }}" class="btn btn-blue">Nueva Grabación</a>
    </div>
</div>

@endsection
