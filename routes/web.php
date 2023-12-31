<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\helloController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/hellocontroller", [helloController::class, "hello"]);
Route::get("/about", [AboutController::class, 'about']);
Route::get("/news", [NewsController::class, 'news']);

Route::get('/test', function () {
    return view('test');
});
