<?php

use Illuminate\Support\Facades\Route;

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
    return view('landingpage');
});

Route::get('/contactos/{contacto_id?}', function ($contacto_id = null) {

    if($contacto_id == '1234'){
        $nombre = "Oscar Leonardo Cárdenas Ulloa";
        $correo = "leo@test.com";
    } else {
        $nombre = null;
        $correo = null;
    }


    return view('contactos', compact('nombre', 'correo'));
})->name('contacto_url');

