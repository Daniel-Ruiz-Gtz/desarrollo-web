@extends('layouts.tabler')

@section('content')
<ol class="breadcrumb" aria-label="breadcrumbs">
    <li class="breadcrumb-item"><a href="{{ route('recurso.index') }}">Recursos</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="#">{{ isset($recurso) ? 'Editar' : 'Crear' }}</a></li>
</ol>

<div class="row">
    <div class="col-8 offset-2">
        @if(isset($recurso))
            {!! Form::model($recurso, ['route' => ['recurso.update', $recurso->id], 'method' => 'PATCH', 'class' => 'card']) !!}
        @else
            {!! Form::open(['route' => 'recurso.store', 'class' => 'card']) !!}
        @endif
            <div class="card-header">
                <h3 class="card-title">{{ isset($grabacion) ? 'Editar' : 'Crear' }} Recurso</h3>
            </div>

            @include('partials.form-error')

            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('categoria_id', 'Categoría:', ['class' => 'form-label']) !!}
                    {!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('url', 'URL:', ['class' => 'form-label']) !!}
                    {!! Form::text('url', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('titulo', 'Título:', ['class' => 'form-label']) !!}
                    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('descripcion', 'Descripción:', ['class' => 'form-label']) !!}
                    {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => '3']) !!}
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
