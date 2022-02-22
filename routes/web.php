<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\WebController;

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

// Home
Route::get('/login',[WebController::class, 'login']);

//Create account
Route::get('/criar-conta',[WebController::class, 'create']);

//Reset password
Route::get('/redefinir-senha',[WebController::class, 'reset']);

//Home dashboard
Route::get('/admin', [WebController::class, 'home']);
// Route::get('/login', ['as' => 'login', 'uses' => 'WebController@login']);