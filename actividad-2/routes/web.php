<?php

use App\Http\Controllers\CompradorController;
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

Route::get('/compradores', [CompradorController::class, 'index']);
Route::get('/compradores/{id}', [CompradorController::class, 'show']);
Route::post('/compradores', [CompradorController::class, 'store']);
Route::put('/compradores/{id}', [CompradorController::class, 'update']);
