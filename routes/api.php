<?php

use Illuminate\Http\Request;
use Illuminate\http\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{DocumentController};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::get('/documentos/all', function () {
//    return \App\Models\document::paginate(100);
//});


Route::get('/documentos/all', [DocumentController::class, 'index']);
Route::get('/documentos/{id}', [DocumentController::class, 'visualizar']);
Route::post('/documentos', [DocumentController::class, 'store']);