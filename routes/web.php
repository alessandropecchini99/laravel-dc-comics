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


Route::get('/comics/trashed',               [ComicController::class, 'trashed'])->name('comics.trashed');
Route::post('/comics/{comic}/restore',      [ComicController::class, 'restore'])->name('comics.restore');
Route::delete('/comics/{comic}/harddelete', [ComicController::class, 'harddelete'])->name('comics.harddelete');
Route::resource('comics', ComicController::class);
// Rotte risorsa Comic riassunte in  ::resource
// l'ordine è importante!
// Route::get('/comics',                [ComicController::class, 'index'])->name('comics.index');
// Route::get('/comics/create',         [ComicController::class, 'create'])->name('comics.create');
// Route::get('/comics/{comic}',        [ComicController::class, 'show'])->name('comics.show');
// Route::get('/comics/{comic}/edit',   [ComicController::class, 'edit'])->name('comics.edit');
// Route::post('/comics',               [ComicController::class, 'store'])->name('comics.store');
// Route::put('/comics/{comic}',        [ComicController::class, 'update'])->name('comics.update');
// Route::delete('/comics/{comic}',     [ComicController::class, 'destroy'])->name('comics.destroy');
