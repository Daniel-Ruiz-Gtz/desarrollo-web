@extends('layouts.tabler')

@section('content')

<ol class="breadcrumb" aria-label="breadcrumbs">
    <li class="breadcrumb-item"><a href="{{ route('grabacion.index') }}">Grabaciones</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="#">{{ $grabacion->tema }}</a></li>
</ol>

<div class="row">
    <div class="col-9">
        <div class="card">
            {{--<a href="#"><img class="card-img-top" src="#" alt="And this isn&#39;t my nose. This is a false one."></a>--}}
            <div class="card-body d-flex flex-column">
              <h4><a href="{{ $grabacion->enlace }}">{{ $grabacion->tema }}</a></h4>
              <div class="text-muted">{{ $grabacion->observaciones }}</div>
              <div class="d-flex align-items-center pt-5 mt-auto">
                {{--<div class="avatar avatar-md mr-3" style="background-image: url(./demo/faces/female/18.jpg)"></div>--}}
                <div>
                  <a href="#" class="text-default"></a>
                  <small class="d-block text-muted">{{ $grabacion->fecha }}</small>
                </div>
                <div class="ml-auto text-muted">
                  <a href="#" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                </div>
              </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    @can('admin')
                        <div class="col-1">
                            <a class="btn btn-outline-warning" href="{{ route('grabacion.edit', [$grabacion->id]) }}">Editar</a>
                        </div>
                        <div class="col-1">
                            <form action="{{ route('grabacion.destroy', [$grabacion]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                            </form>
                        </div>
                    @endcan
                    <div class="col-8 text-right">
                        Calificaciones:
                        @foreach ($grabacion->users as $data)
                            {{ $data->pivot->calificacion }}<br />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Calificar -->
    <div class="col-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Califica esta grabación</h3>
            </div>
            <div class="card-body">
                {!! Form::open(['route' => ['grabacion.calificar', $grabacion->id]]) !!}
                    {!! Form::label('calificacion', 'Califica del 1 al 5:', ['class' => 'form-label']) !!}
                    {!! Form::number('calificacion', null, ['class' => 'form-control', 'min' => '1', 'max' => '5', 'step' => '1']) !!}
                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary btn-sm']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
