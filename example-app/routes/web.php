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
});

Route::get('/home', function () {
    return view('welcome');
});


Route::get('/cursos', function () {
    return view('welcome');
});

Route::get('/cursos-agendados', function () {
    return view('welcome');
});

Route::get('/sobre', function () {
    return view('welcome');
});


use App\Http\Controllers\TestController;

Route::get('usuarios',[TestController::class, 'listAllUsers'])->name('users.listAll');

//use App\Http\Controllers\Form\TesteController;

//Route::get('usuarios',[Form\TestController::class, 'listAllUsers'])->name('users.listAll');
