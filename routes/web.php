<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;
use App\Http\Controllers\UserController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::match(['get', 'post'], '/', [WordController::class, 'todayWords']);
Route::match(['get', 'post'], '/login', [UserController::class, 'login']);
Route::match(['get', 'post'], '/exit', [UserController::class, 'exit']);
Route::match(['get', 'post'], '/room', [UserController::class, 'room']);
Route::match(['get', 'post'], '/file_words', [UserController::class, 'file']);