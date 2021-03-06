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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/enviardemo',[App\Http\Controllers\EnviarDemoController::class, 'enviar']);
Route::get('/newsletter',[App\Http\Controllers\EnviarDemoController::class, 'newsletter']);

Route::get('/politicas', function () {
    return view('politicas');
});
Route::get('/terminos', function () {
    return view('terminos');
});
Route::get('/mapa', function () {
    return view('mapa');
});
