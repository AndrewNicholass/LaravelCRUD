<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MovieController::class, 'index'])->name('movie.index');
Route::get('/movie/create', [MovieController::class, 'create'])->name('movie.create');
Route::post('/movie/store', [MovieController::class, 'store'])->name('movie.store');
Route::get('/movie/{id}', [MovieController::class, 'detail'])->name('movie.detail');
Route::get('/movie/{id}/edit', [MovieController::class, 'edit'])->name('movie.edit');
Route::put('/movie/{id}/update', [MovieController::class, 'update'])->name('movie.update');
Route::delete('/movie/{id}/delete', [MovieController::class, 'delete'])->name('movie.delete');
