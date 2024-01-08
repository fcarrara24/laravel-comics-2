<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComicController;
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

// Route::get('/', function () {
//     $database = config('db');
//     return view('home', compact('database'));
// })->name('comics.index');

Route::get('/', function () {
    return Redirect::route('comics.index');
})->name('comics.index');

// Route::get('/comics/{id}', function ($id) {
//     $db = config('db');
//     //dd($db);
//     if ($id >= 0 && $id < count($db['comics'])) {
//         $comic = $db['comics'][$id];
//         return view('comics.show')
//             ->with('comic', $comic)
//             ->with('database', $db);
//     } else {
//         //indica direttamente la pagina che non è stata trovata
//         abort(404);
//     }
// })->name('comics.show');

//creazione di una route completa per il controller di laravel
Route::resource('comics', ComicController::class);
