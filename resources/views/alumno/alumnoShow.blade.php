@extends('layouts.tabler')

@section('content')

<ol class="breadcrumb" aria-label="breadcrumbs">
    <li class="breadcrumb-item"><a href="#">Usuario</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="#">Información Alumno</a></li>
</ol>

<div class="row">
    <div class="col-8 offset-2">
        <div class="card">
            <ul>
                <li>{{ $alumno->carrera }}</li>
                <li>{{ $alumno->seccion }}</li>
                <li>{{ $alumno->calendario }}</li>
            </ul>
        </div>
    </div>
</div>
@endsection
