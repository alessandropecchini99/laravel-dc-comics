<?php

use App\Http\Controllers\Guest\ComicController;
use App\Http\Controllers\Guest\PageController;
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

Route::get('/', [PageController::class, 'home'])->name('home');


// Rotte risorsa Comic
// Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
// Route::get('/comics/{id}', [ComicController::class, 'show'])->name('comics.show');

Route::resource('comics', ComicController::class);
