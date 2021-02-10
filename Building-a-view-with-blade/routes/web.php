<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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


Route::get('/contact ', function () {
    return view('contact ');
});


use App\Http\Controllers\FormController;

Route::view('/form', 'form');
Route::post('/form', [FormController::class, 'getData']);


Route::get('/user ', [App\Http\Controllers\Controller\HomeController::class, 'render']);
