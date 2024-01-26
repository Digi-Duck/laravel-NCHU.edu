<?php

use App\Http\Controllers\Frontend\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/about',[AboutController::class,'index'])->name('about.index');
