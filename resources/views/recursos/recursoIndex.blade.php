@extends('layouts.tabler')

@section('content')
<ol class="breadcrumb" aria-label="breadcrumbs">
    <li class="breadcrumb-item active"><a href="{{ route('recurso.index') }}">Recursos</a></li>
</ol>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Recursos</h3>
                <div class="card-options">
                    <a href="{{ route('recurso.create') }}" class="btn btn-sm btn-primary">Nuevo Recurso</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-outline">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>URL</th>
                            <th>Titulo</th>
                            <th>Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recursos as $recurso)
                            <tr>
                                <td>{{ $recurso->id }}</td>
                                <td>{{ $recurso->url }}</td>
                                <td>{{ $recurso->titulo }}</td>
                                <td>{{ $recurso->categoria->categoria }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
