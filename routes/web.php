<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CisternasController;

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
});

Route::get('catalogocisternas', [CisternasController::class, 'catalogoCisternas']);
Route::get('contato', [CisternasController::class, 'contato']);
Route::get('sobre', [CisternasController::class, 'sobre']);
Route::get('shop', [CisternasController::class, 'shop']);