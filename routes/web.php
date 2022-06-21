<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuardiaEstudiantilController;
use App\Http\Controllers\GuardiaObreraController;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

Route::resource('guardiaObrera', GuardiaObreraController::class);
Route::resource('guardiaEstudiantil', GuardiaEstudiantilController::class);


Auth::routes();

//Route::get('/home', [GuardiaEstudiantilController::class, 'index']);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
