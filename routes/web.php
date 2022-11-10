<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

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

Route::get('/', [PaginaController::class, 'landingpage']);

Route::get('/contacto/{contacto_id?}', [PaginaController::class, 'contactos']);
Route::post('/contactos_form', [PaginaController::class, 'contactos_form']);