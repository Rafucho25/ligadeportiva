<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquiposController;

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
    return view('index');
})->name('index');


Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('avg',  [EquiposController::class, 'avg'])->name('avg');

Route::get('find', function () {
    return view('find');
})->name('find');

Route::get('find/player/{name?}',  [EquiposController::class, 'findPlayer'])->name('findplayer');

Route::get('history', function () {
    return view('history');
})->name('history');

Route::group(['as'=> 'equipo.'], function () {

    Route::get('/equipos/agronomica', function () {
        return view('equipos.agronomica.index');
    })->name('agronomica.index');
    Route::get('/equipos/economia', function () {
        return view('equipos.economia.index');
    })->name('economia.index');
    Route::get('/equipos/ciencias', function () {
        return view('equipos.ciencias.index');
    })->name('ciencias.index');
    Route::get('/equipos/educacion', function () {
        return view('equipos.educacion.index');
    })->name('educacion.index');
    Route::get('/equipos/ingenieria', function () {
        return view('equipos.ingenieria.index');
    })->name('ingenieria.index');
    Route::get('/equipos/salud', function () {
        return view('equipos.salud.index');
    })->name('salud.index');


});