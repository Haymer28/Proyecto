<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeDocenteRequest;
use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentesito = Docente::all();

        return view('docente.indice', compact('docentesito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeDocenteRequest $request)
    {
        $docentesito = new Docente();
        //esto me permitira manipular la tabla
        $docentesito->nombres = $request->input('nombres');
        $docentesito->apellidos = $request->input('apellidos');
        $docentesito->titulo = $request->input('titulo');
        $docentesito->c_asociado = $request->input('c_asociado');

        if ($request->hasfile('img')) {
            $docentesito->img = $request->file('img')->store('public/docente');
        }

        //con esto ejecutamos comandos para guardar
        $docentesito->save();
        return 'Lograste guardar';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docentesito = Docente::find($id);
        //Asocio el array a la vista usando el compact
        //return $docentesito;
        return view('docente.mostrar', compact('docentesito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docentesito = Docente::find($id);

        return view('docente.editar', compact('docentesito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $docentesito = Docente::find($id);

        $docentesito->fill($request->except('img'));

        if ($request->hasfile('img')) {
            $docentesito->img = $request->file('img')->store('public');
        }
        $docentesito->save();
        $docentesito = Docente::all();

        return view('docente.indice', compact('docentesito'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docentesito =  Docente::find($id);

        $urlImagenBD = $docentesito->img;
        //return $urlImagenBD;
        //$rutaCompleta = public_path().$urlImagenBD;
        //return $rutaCompleta;
        $nombreImagen = str_replace('public/', '\storage\\', $urlImagenBD);
        $rutaCompleta = public_path() . $nombreImagen;
        unlink($rutaCompleta);
        $docentesito->delete();
        return 'Eliminado';
    }
}
