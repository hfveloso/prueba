<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('curso', [CursoController::class, 'index']);
Route::get('curso/create', [CursoController::class, 'create']);
Route::get('curso/{curso}', [CursoController::class, 'show']);
Route::get('curso/{curso}/{categoria?}', [CursoController::class, 'categoria']);
