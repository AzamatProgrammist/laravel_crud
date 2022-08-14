<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShowProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompaniesController;
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
    return view('home');
});


Route::resource('companies', CompaniesController::class)->middleware('auth');

//Github
/*
Route::get('/user/{name?}', [UserController::class, 'user']);
Route::get('/users', [UserController::class, 'list']);

Route::get('/show/{id}', ShowProfileController::class);


Route::get('/home', [HomeController::class, 'index']);
Route::get('/members', [HomeController::class, 'members']);
Route::get('/about', [HomeController::class, 'about']);

*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
