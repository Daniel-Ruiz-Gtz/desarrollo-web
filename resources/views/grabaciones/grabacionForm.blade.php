@extends('layouts.tabler')

@section('content')

<div class="row">
    <div class="col-12">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(isset($grabacion))
            <form action="{{ route('grabacion.update', [$grabacion]) }}" method="POST" class="card">
            @method('patch')
        @else
            <form action="{{ route('grabacion.store') }}" method="POST" class="card">
        @endif

            <div class="card-header">
                <h3 class="card-title">Formulario de Grabación</h3>
            </div>

            <div class="card-body col-6">
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
            <div class="card-footer text-right">
                <div class="d-flex">
                  <button type="submit" class="btn btn-primary ml-auto">Aceptar</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
