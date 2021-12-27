<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;

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

Route::get('/documentos', [DocumentController::class,'index']);

Route::get('/documentos/visualizar', [DocumentController::class,'visualizar']);

Route::get('/documentos/create', [DocumentController::class,'create']);

Route::post('/documentoss', [DocumentController::class,'store']);

Route::get('/documentos/{id}/editar', [DocumentController::class,'editar']);

Route::put('/documentoss/{id}', [DocumentController::class,'update']);