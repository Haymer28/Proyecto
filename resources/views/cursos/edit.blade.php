@extends ('layaouts.app')

@section('titulo','editar curso')

@section('contenido')

<h3>Editar Curso</h3>
<form action="/cursos/{{$cursito->id}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="nombrecurso">Modificar del curso:</label>
        <input id="nombrecurso" name="nombre" value = "{{$cursito->nombre}}" type="text" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="descripcurso">Modificar del curso:</label>
        <input type="text" name="descripcion" class="form-control" value="{{$cursito->descripcion}}" id="descripcurso" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="img"><b>Imagen del Curso</b></label>
        <input name="img" type="file" id="img" value="{{$cursito->img}}">
    </div>
    <button type="submit" class="btn btn-danger">Actualizar</button>
</form>

@endsection
