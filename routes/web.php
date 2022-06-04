<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoadTurnos;


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

Route::get('/vista1', function () {
    return view('vista1');
});

Route::get('/inicio', function () {
    return view('plantilla');
});

Route::get('/vista2', function () {
    return view('vista2');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/vista3',[LoadMedico::class, 'load'] );

Route::get('/turnos',[LoadTurnos::class, 'selectHorarios']);




