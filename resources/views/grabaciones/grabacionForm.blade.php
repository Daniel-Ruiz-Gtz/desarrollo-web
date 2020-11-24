@extends('layouts.tabler')

@section('content')
<ol class="breadcrumb" aria-label="breadcrumbs">
    <li class="breadcrumb-item"><a href="{{ route('grabacion.index') }}">Grabaciones</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="#">{{ isset($grabacion) ? 'Editar' : 'Crear' }}</a></li>
</ol>

<div class="row">
    <div class="col-8 offset-2">



        @if(isset($grabacion))
            <form action="{{ route('grabacion.update', [$grabacion]) }}" method="POST" class="card">
            @method('patch')
        @else
            <form action="{{ route('grabacion.store') }}" method="POST" class="card">
        @endif

            <div class="card-header">
                <h3 class="card-title">{{ isset($grabacion) ? 'Editar' : 'Crear' }} Grabación</h3>
            </div>

            @if ($errors->any())
                <div class="card-alert alert alert-warning mb-0">
                    <ul class="m-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card-body">
                @csrf

                <div class="form-group">
                    <label class="form-label" for="fecha">Fecha:</label>
                    <input class="form-control" type="date" name="fecha" value="{{ old('fecha') ?? $grabacion->fecha ?? '' }}">
                </div>

                <div class="form-group">
                    <label class="form-label" for="tema">Tema:</label>
                    <input class="form-control" type="text" name="tema" value="{{ old('tema') ?? $grabacion->tema ?? '' }}">
                </div>

                <div class="form-group">
                    <label class="form-label" for="observaciones">Observaciones:</label>
                    <textarea class="form-control" name="observaciones">{{ old('observaciones') ?? $grabacion->observaciones ?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label class="form-label" for="enlace">Enlace:</label>
                    <input class="form-control" type="text" name="enlace" value="{{ old('enlace') ?? $grabacion->enlace ?? '' }}">
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
