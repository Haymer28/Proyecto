<?php

use App\Http\Controllers\controladorPrecios;
use App\Http\Controllers\DocenteController;
use Illuminate\Support\Facades\Route;


//Invocar el controlador sobre la ruta.
use App\Http\Controllers\miprimerController;

use App\Http\Controllers\heladosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*

Lo primero es nombrar La ruta entre comillas simple con el
nombre que desee darle. Luego va la coma, seguido de la funcion y el return.

*/
Route::get('/miprimeraruta', function(){
    return 'Hola mundo';
}
);

/*

Los parametros son muy importantes en la ruta de las paginas web y los indicamos
entre llaves {}. Los parametros van dentro de la misma ruta.

*/

Route::get('/minombre/{nombre}',function($nombre){
    return 'Hola soy ' .  $nombre;
});

Route::get('/suma/{uno}+{dos}',function($uno, $dos){
    return 'Resultado:' . $uno+$dos ;
});

Route::get('micontroller/{a}/{b}', [miprimerController::class,'suma']);


Route::get('carrera/{a}', [miprimerController::class,'carrera']);


// La clase va igual que el metodo entre corchetes o parentesis cuadrados
// La clase va acompañada "::class", y el metodo tiene que llamarse igual
// a como esta en la clase y entre comillas simples.

Route::get('heladeria/{opcion}', [heladosController::class,'helado']);


Route::get('precio/{valor}', [controladorPrecios::class,'precio']);


Route::get('precio/{nombre}/{valor}', [controladorPrecios::class,'getIva']);


Route::resource('cursos', cursoController::class);

Route::resource('docente', DocenteController::class);
