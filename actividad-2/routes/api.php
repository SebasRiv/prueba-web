<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BoletosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompradorController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function() {

    Route::get('/compradores', [CompradorController::class, 'index']);
    Route::get('/compradores/{id}', [CompradorController::class, 'show']);
    Route::post('/compradores', [CompradorController::class, 'store']);
    Route::put('/compradores/{id}', [CompradorController::class, 'update']);
    Route::get('/boletos', [BoletosController::class, 'index']);

    Route::post('/logout', [AuthController::class, 'logout']);
});
