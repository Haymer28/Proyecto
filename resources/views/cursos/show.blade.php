@extends('layaouts.app')

@section('titulo', 'detalle curso')

@section('contenido')

<div class="text-center" style="width: 18rem; margin-top:30px;">

    <img src="{{ Storage::url($cursito->img) }}" class="card-img-top" alt="..." style="width: 85%; margin-top:30px;"  >
<div class="card-body">
    <li class="list-group-item">{{ $cursito->descripcion }}</li>
</div>
    <a href="/cursos/{{$cursito->id}}/edit" class="btn btn-dark" style="margin-left:5px" >Editar cursos</a>
</div>

@endsection
