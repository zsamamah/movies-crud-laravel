<?php

use App\Http\Controllers\MoviesController;
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

Route::get('/', function () {
    return redirect('/movies');
});

Route::get('/movies',[MoviesController::class,'index'])->name('movies.index');
Route::get('/movies/create',[MoviesController::class,'create'])->name('movies.create');
Route::post('/movies',[MoviesController::class,'store'])->name('movies.store');
Route::get('/movies/{movie}',[MoviesController::class,'show'])->name('movies.show');
Route::get('/movies/{movie}/edit',[MoviesController::class,'edit'])->name('movies.edit');
Route::put('/movies/{movie}',[MoviesController::class,'update'])->name('movies.update');
Route::delete('/movies/{movie}',[MoviesController::class,'destroy'])->name('movie.destroy');


