@extends('layaouts.app')

@section('titulo', 'detalle curso')

@section('contenido')

<div class="text-center" style="width: 18rem; margin-top:30px;">

    <img src="{{Storage::url($docentesito->img)}}" class="card-img-top" alt="..." style="width: 85%; margin-top:30px;"  >
<div class="card-body">
    <li class="list-group-item">{{$docentesito->apellidos}}</li>
</div>
    <a href="/docente/{{$docentesito->id}}/edit" class="btn btn-dark" style="margin-left:5px">Editar cursos</a>
</div>

@endsection
