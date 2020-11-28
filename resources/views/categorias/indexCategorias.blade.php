<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <h1>Listado de Categorias y sus Recursos</h1>

        @foreach ($categorias as $categoria)
            <h3>{{ $categoria->categoria }}</h3>

            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>URL</th>
                        <th>Titulo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categoria->recursos as $recurso)
                        <tr>
                            <td>{{ $recurso->id }}</td>
                            <td>{{ $recurso->url }}</td>
                            <td>{{ $recurso->titulo }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <hr>
        @endforeach


    </body>
</html>
