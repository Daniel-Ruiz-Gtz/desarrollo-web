@extends('layouts.tabler')

@section('content')
<ol class="breadcrumb" aria-label="breadcrumbs">
    <li class="breadcrumb-item"><a href="#">Usuario</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="#">Información de Alumno</a></li>
</ol>

<div class="row">
    <div class="col-8 offset-2">
        @if(isset($alumno))
            {!! Form::model($alumno, ['route' => ['alumno.update', $alumno->id], 'method' => 'PATCH', 'class' => 'card']) !!}
        @else
            {!! Form::open(['route' => 'alumno.store', 'class' => 'card']) !!}
        @endif

            <div class="card-header">
                <h3 class="card-title">{{ isset($alumno) ? 'Editar' : 'Agregar' }} Información de Alumno</h3>
            </div>

            @include('partials.form-error')

            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('carrera', 'Carrera:', ['class' => 'form-label']) !!}
                    {!! Form::text('carrera', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('seccion', 'Sección:', ['class' => 'form-label']) !!}
                    {!! Form::text('seccion', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('calendario', 'Calendario:', ['class' => 'form-label']) !!}
                    {!! Form::text('calendario', null, ['class' => 'form-control']) !!}
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
