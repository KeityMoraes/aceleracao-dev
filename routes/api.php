<?php

use App\Http\Controllers\InvoiceController;
use Illuminate\Http\Request;
use Illuminate\http\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{DocumentController,LoginApiController};
use App\Http\Controllers\Api\AssinaturaController;
use App\Models\Assinatura;

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

Route::post('/login', [LoginApiController::class, 'login']);


Route::group(["middleware" => "jwt.auth"],function(){
    Route::get('/documentos/all', [DocumentController::class, 'index']);
    Route::get('/documentos/{id}', [DocumentController::class, 'visualizar']);
    Route::post('/documentos/novo', [DocumentController::class, 'store']);
    Route::put('/documentos/{id}', [DocumentController::class, 'update']);
    Route::delete('/documentos/{id}', [DocumentController::class, 'deletar']);

    route::get('/documentos/logout', [LoginApiController::class, 'logout']);
    route::get('/documentos/newToken', [LoginApiController::class, 'newToken']);

    Route::get('/assinatura/all',[AssinaturaController::class, 'index']);

});


//Route::get('/assinatura/all',[AssinaturaController::class, 'index']);
//Route::get('/assinatura/all', 'App\Http\Controllers\Api\AssinaturaController@index');
