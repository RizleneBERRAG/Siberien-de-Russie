<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/nos-chats', [PageController::class, 'cats'])->name('cats');
Route::get('/adoption', [PageController::class, 'adoption'])->name('adoption');
