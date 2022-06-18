<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [HomeController::class,'index']);
Route::get('when-she-calls-club-mix', [HomeController::class,'p1']);
Route::get('raw-land', [HomeController::class,'p2']);
Route::get('bodywave', [HomeController::class,'p3']);
Route::get('get-happy', [HomeController::class,'p4']);
Route::get('about', [HomeController::class,'about']);
Route::get('blog', [HomeController::class,'blog']);
Route::get('cart', [HomeController::class,'cart']);
Route::get('account', [HomeController::class,'account']);
Route::get('genre', [HomeController::class,'genre']);
Route::get('signin', [LoginController::class,'signin']);

