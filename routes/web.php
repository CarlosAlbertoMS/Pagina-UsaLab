<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('home');
});

Route::get('/nosotros', function() {
    return view('nosotros');
});

Route::get('/investigaciones', function () {
    return view('investigacion');
});

Route::get('/thanks', function(){
    return view('thanks');
});

Route::get('/academica', function(){
    return view('academica');
});

Route::get('/servicios-academia', function () {
    return view('servicios-academia');
});

Route::get('/servicios-industria', function () {
    return view('servicios-industria');
});

Route::get('/eventos', function(){
    return view('eventos');
});

Route::get('/trabajemos-juntos', function () {
    return view('trabajemos-juntos');
})->name('contacto');

Route::post('/trabajemos-juntos/enviar', function (Request $request) {
    $request->validate([
        'nombre' => 'required|string|max:30',
        'apellidos' => 'required|string|max:30',
        'email' => 'required|email',
        'telefono' => 'required|string|min:7|max:20',
        'pais' => 'required|string|max:50',
        'empresa' => 'required|string|max:50',
        'hablanos-de-tu-proyecto' => 'required|string'
    ]);

    $response = Http::post('http://localhost:4000/contactanos', [
        'nombre' => $request->input('nombre'),
        'apellido' => $request->input('apellidos'),
        'email' => $request->input('email'),
        'celular' => $request->input('telefono'),
        'pais' => $request->input('pais'),
        'empresa' => $request->input('empresa'),
        'descripcion_proyecto' => $request->input('hablanos-de-tu-proyecto')
    ]);

    return redirect()->route('contacto')->with('info', "Correo enviado correctamente");
})->name('contacto.enviar');


Route::get('/en-construccion', function () {
    return view('vacio');
});
