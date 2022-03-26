@extends('layaouts.app')

@section('titulo','Listado de cursos')

@section('contenido')
    <center>
        <h3>Listado de cursos disponibles</h3>
    </center>
    {{--foreach es un ciclo espcial para arrays
        recorderis: existen ciclos como while, for, do while, foreach--}}
    <div class="row">
        @foreach ($docentesito as $co)
        {{--para llamar la informacion de php basta con interpretar
            las variables usando la doble llave--}}
{{--Es una regla en todos los lenguajes que el foreach lleve un alias para el array--}}

            <div class="col-sm">
                <div class="card" style="width: 16rem; margin-top:30px;">
                    <center>
                        <img src="{{ Storage::url($co->f_docente) }}" class="card-img-top" alt="..." style="width: 250px; margin-top:30px; height:200px; padding:25px;"  >
                    </center>
                    <div class="card-body">

                        <li class="list-group-item">{{ $co->nombre }}</li>

                    <br>
                    {{--Se necesita el id para ver un registro en particular--}}
                    <a href="/docente/{{$co->id}}" class="btn btn-dark" style="margin-left:65px">Ver más</a>
                </div>
            </div>
        </div>

        <br>
    @endforeach
    </div>
@endsection
