@extends('layaouts.app')

@section('titulo', 'detalle curso')

@section('contenido')

    <form class="form-group" action="/docente/{{ $docentesito->id }}" method="POST">
        <div class="col-sm">
            <div class="card" style="width: 16rem; margin-top:30px;">

                <img src="{{ Storage::url($docentesito->img) }}" class="card-img-top" alt="..."
                    style="width: 150px; margin-top:25px; margin-left: 50px">
                <div class="" style="margin-top: 35px;">
                    <li class="list-group-item">{{ $docentesito->nombres }}</li>
                </div>
                <div class="">
                    <li class="list-group-item">{{ $docentesito->titulo }}</li>
                </div>
                <div class="" style="margin-bottom: 30px;">
                    <li class="list-group-item">{{ $docentesito->c_asociado }}</li>
                </div>
                <a href="/docente/{{ $docentesito->id }}/edit" class="btn btn-dark" style="margin-bottom: 25px;  ">Editar
                    cursos</a>

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-dark" style="margin-top:5px; margin-bottom:25px;">Eliminar</button>
    </form>
    </div>

    </div>
    </div>
@endsection
