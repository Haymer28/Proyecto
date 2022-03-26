@extends ('layaouts.app')

@section('titulo','editar curso')

@section('contenido')

<h3>Editar Curso</h3>
<form action="/docente/{{$docentesito->id}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="Modificarnombre">Modificar nombre:</label>
        <input id="Modificarnombre" name="nombres" value = "{{$docentesito->nombres}}" type="text" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="Apellido">Modificar el apellido:</label>
        <input type="text" name="apellidos" class="form-control" value="{{$docentesito->apellidos}}" id="Apellido" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="titulo">Modificar el titulo:</label>
        <input type="text" name="titulo" class="form-control" value="{{$docentesito->titulo}}" id="titulo" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="Modificar el Curso asociado">Modificar el Curso asociado</label>
        <input type="text" name="c_asocidos" class="form-control" value="{{$docentesito->c_asociado}}" id="descripcurso" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="img"><b>Foto</b></label>
        <input name="img" type="file" id="img" value="{{$docentesito->img}}">
    </div>
    <button type="submit" class="btn btn-danger">Actualizar</button>
</form>

@endsection
