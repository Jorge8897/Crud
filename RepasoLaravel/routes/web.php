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

Route::get('/show', 'Crud@index');

ROute::get('/insert','Crud@create');

Route::get('/detail/{id}', 'Crud@show');

Route::post('/save','Crud@store');


Route::get('/','show');

Route::post('/validar','controlador@validarlogin');

Route::get('/Home','controlador@home');

Route::get('/pintor1','controlador@pintor1');

Route::get('/pintor2','controlador@pintor2');

Route::get('/pintor3','controlador@pintor3');

Route::get('/pintor4','controlador@pintor4');

Route::get('/pintor5','controlador@pintor5');
