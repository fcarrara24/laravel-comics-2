<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComicController;
use App\Http\Controllers\HomeController;

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

//old main routes

// Route::get('/', function () {
//     return Redirect::route('comics.index');
// })->name('comics.index');

//new main route
Route::get('/', [HomeController::class, 'index']);

//creazione di una route completa per il controller di laravel
Route::resource('comics', ComicController::class);
