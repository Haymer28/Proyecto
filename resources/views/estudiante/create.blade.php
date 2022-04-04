
{{-- Para poder implementar la plantilla necesito usar @extends--}}

@extends('layaouts.app')

@section('titulo','Crear registro')

@section('contenido')


<h3>Crear Nuevo Curso</h3>
<form action="/docente" method="post" enctype="multipart/form-data">
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
        <label for="nombreDocente">Nombre del docente:</label>
        <input id="nombreDocente" name="nombres" type="text" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="apellidosDocente">Apellido:</label>
        <input type="text" name="apellidos" class="form-control" id="apellidosDocente" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="Titulo">Titulo</label>
        <input type="text" name="titulo" class="form-control" id="titulo" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="c_asociado">Curso asociado:</label>
        <input type="text" name="c_asociado" class="form-control" id="c_asociado" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="img"><b>Imagen del docente</b></label>
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
