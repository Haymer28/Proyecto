
{{-- Para poder implementar la plantilla necesito usar @extends--}}

@extends('layaouts.app')

@section('titulo','Crear registro')

@section('contenido')


<h3>Crear un Nuevo Estudiante</h3>
<form action="/estudiante" method="post" enctype="multipart/form-data">
    @csrf

    @if ($errors->any())
        @foreach ($errors->all() as $alerta)
            <div class="alert alert-danger" role="alerta">
                <ul>
                    <li>{{$alerta}}</li>
                </ul>
            </div>
        @endforeach
    @endif

    <div class="form-group">
        <label for="nombre">Nombre del estudiante:</label>
        <input id="nombre" name="nombre" type="text" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="apellidosDocente">Apellidos del estudiante:</label>
        <input type="text" name="apellidos" class="form-control" id="apellidosDocente" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="img">Edad del estudiante:</label>
        <input type="text" name="edad" class="form-control" id="apellidosDocente" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="img">Curso del estudiante:</label>
        <input type="text" name="curso" class="form-control" id="apellidosDocente" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="img">Foto estudiante</label>
        <input name="img" type="file" id="img">
    </div>
    <button type="submit" class="btn btn-danger">Crear</button>
</form>

@endsection
{{--
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <title>Vista de registros</title>
    </head>

    <body>
        --}}
        {{--Bootstrap requiere un div container para mostrar los elementos
            centrados y ordenados--}}

        {{--
        <div class="container">
            <br>
            <h3>Crear Nuevo Curso</h3>
            <form action="/cursos" method="post">
                @csrf
                <div class="form-group">
                    <label for="nombrecurso">Nombre del curso:</label>
                    <input id="nombrecurso" name="nombre" type="text" class="form-control" aria-describedby="emailHelp">
                    <label for="descripcurso">Descripcion del curso:</label>
                    <input type="text" name="descripcion" class="form-control" id="descripcurso" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-danger">Crear</button>
            </form>
        </div>

    </body>


</html>
--}}
