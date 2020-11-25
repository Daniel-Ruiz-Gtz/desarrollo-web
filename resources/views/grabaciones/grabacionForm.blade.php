@extends('layouts.tabler')

@section('content')
<ol class="breadcrumb" aria-label="breadcrumbs">
    <li class="breadcrumb-item"><a href="{{ route('grabacion.index') }}">Grabaciones</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="#">{{ isset($grabacion) ? 'Editar' : 'Crear' }}</a></li>
</ol>

<div class="row">
    <div class="col-8 offset-2">
        @if(isset($grabacion))
            {!! Form::model($grabacion, ['route' => ['grabacion.update', $grabacion->id], 'method' => 'PATCH', 'class' => 'card']) !!}
        @else
            {!! Form::open(['route' => 'grabacion.store', 'class' => 'card']) !!}
        @endif

            <div class="card-header">
                <h3 class="card-title">{{ isset($grabacion) ? 'Editar' : 'Crear' }} Grabación</h3>
            </div>

            @include('partials.form-error')

            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('fecha', 'Fecha:', ['class' => 'form-label']) !!}
                    {!! Form::date('fecha', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('tema', 'Tema:', ['class' => 'form-label']) !!}
                    {!! Form::text('tema', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('observaciones', 'Observaciones:', ['class' => 'form-label']) !!}
                    {!! Form::textarea('observaciones', null, ['class' => 'form-control', 'rows' => '3']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('enlace', 'Enlace:', ['class' => 'form-label']) !!}
                    {!! Form::text('enlace', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('tema_id[]', 'Temas:', ['class' => 'form-label']) !!}
                    {!! Form::select('tema_id[]', $temas, isset($grabacion) ? $grabacion->temas()->pluck('id') : null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>

@endsection
