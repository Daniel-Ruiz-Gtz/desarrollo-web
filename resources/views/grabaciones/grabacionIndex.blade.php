@extends('layouts.tabler')

@section('content')
<ol class="breadcrumb" aria-label="breadcrumbs">
    <li class="breadcrumb-item active"><a href="{{ route('grabacion.index') }}">Grabaciones</a></li>
</ol>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Grabaciones</h3>
                <div class="card-options">
                    <a href="{{ route('grabacion.create') }}" class="btn btn-sm btn-primary">Nueva Grabación</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-outline">
                    <tr>
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Tema</th>
                        <th>Enlace</th>
                        <th>Temas</th>
                    </tr>
                    @foreach ($grabaciones as $grabacion)
                        <tr>
                            <td>{{ $grabacion->id }}</td>
                            <td>{{ $grabacion->fecha }}</td>
                            <td>
                                <a href="{{ route('grabacion.show', [$grabacion]) }}">{{ $grabacion->tema }}</a>
                            </td>
                            <td>{{ $grabacion->enlace }}</td>
                            <td>
                                @foreach ($grabacion->temas as $tema)
                                    {{ $tema->tema }} <br>
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
