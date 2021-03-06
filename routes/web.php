<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\CriptoPasswordController;

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
    return view('inicio');
});

Route::get('/grupo', function () {
    return view('grupo');
});

Route::get('/data', function () {
    return view('data');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/criptografia', function () {
    return view('cripto');
});

Route::get('api/data', [DataController::class, 'getData']);

Route::post('api/cripto', [CriptoPasswordController::class, 'generateHash']);