<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
    return view('landing');
});

Route::get('/info', function(){
    return view('info');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/signup', function(){
    return view('signup');
});

Route::get('/admin', function(){
    return view('admin.index', ['name' => 'Trisna Wahyudi']);
});

// login register backend
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
