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
    return view('welcome');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/actividades', function () {
    return view('actividades');
})->name('actividades');

Route::middleware(['auth:sanctum', 'verified'])->get('/principal', function () {
    return view('principal');
})->name('principal');

Route::middleware(['auth:sanctum', 'verified'])->get('/funcionarios', function (){
    return view('funcionarios');
})->name('funcionarios');

//importar Actividades y Funcionarios
Route::resource('/funcionarios', 'App\Http\Controllers\FuncionarioController');
Route::post('/actividades/import', 'App\Http\Controllers\ActividadController@importExcel')->name('importActividades');
Route::resource('/actividades', 'App\Http\Controllers\ActividadController');
Route::post('/funcionario/import', 'App\Http\Controllers\FuncionarioController@importExcel')->name('importFuncionario');





    
