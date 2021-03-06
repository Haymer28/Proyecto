<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;
use App\Http\Requests\storeCursosRequest;

class cursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //creamos un array para poder manipular información de la tala cursos
        // a su vez el array actuara como objeto
        $cursito = curso::all();

        return view('cursos.index', compact('cursito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeCursosRequest $request)
    {
        //Con el metodo all() veo toda la información
        //eturn $request->all();
        //Obtuvimos el dato de lo que el usuario envia por el input
        //cuyo name es 'nombre'
        //return $request->input('descripcion');
        //Creamos una nueva instancia del modelo
        //$validacionDatos = $request->validate([
        //    'nombre'=>'required|max:10',
        //    'img'=>'required|image'
        //]);
        $cursito = new curso();
        //esto me permitira manipular la tabla
        $cursito->nombre = $request->input('nombre');
        $cursito->descripcion = $request->input('descripcion');
        $cursito->horas = $request->input('horas');

        if ($request->hasfile('img')) {
            $cursito->img = $request->file('img')->store('public/cursos');
        }

        //con esto ejecutamos comandos para guardar
        $cursito->save();
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

        // creo un array con informacion del registro
        // del id que viajo en la solicitud usando el metodo find
        $cursito = curso::find($id);
        //Asocio el array a la vista usando el compact
        //return $cursito;
        return view('cursos.show', compact('cursito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cursito = curso::find($id);

        return view('cursos.edit', compact('cursito'));
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
        $cursito = curso::find($id);

        $cursito->fill($request->except('img'));

        if ($request->hasfile('img')) {
            $cursito->img = $request->file('img')->store('public');
        }
        $cursito->save();
        $cursito = curso::all();

        return view('cursos.index', compact('cursito'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cursito =  curso::find($id);

        $urlImagenBD = $cursito->img;
        //return $urlImagenBD;
        //$rutaCompleta = public_path().$urlImagenBD;
        //return $rutaCompleta;

        $nombreImagen = str_replace('public/cursos', '\storage\cursos\\', $urlImagenBD);
        $rutaCompleta = public_path() . $nombreImagen;

        unlink($rutaCompleta);
        $cursito->delete();
        return 'Eliminado';
    }
}
