<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fileController;
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
Route::get('/index', [fileController::class, 'index']);
Route::get('/create', [fileController::class, 'create']);
Route::post('/files', [fileController::class, 'store']);
Route::get('/files/{id}', [fileController::class, 'show']);
Route::get('/file/download/{id}', [fileController::class, 'download']);