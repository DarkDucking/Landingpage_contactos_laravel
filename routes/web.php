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

Route::get('/contacto{contacto_id}', function ($contacto_id) {

    $contacto = [
        'Contacto 1',
        'Contacto 2',
        'Contacto 3',
        'Contacto 4'
    ]

    if (!empty($contacto_id)){
        $contacto = $contactos[$contacto_id]
    }

    return view('contacto');
});
