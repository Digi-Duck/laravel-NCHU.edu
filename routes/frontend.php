<?php

use App\Http\Controllers\Frontend\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\WebInformationController;
use App\Http\Controllers\Frontend\CourseController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/about',[AboutController::class,'index'])->name('about.index');
Route::get('/web',[WebInformationController::class,'index'])->name('web.index');

Route::prefix('course')->group(function () {
    Route::get('/all', [CourseController::class, 'show'])->name('all.course')->defaults('category', 'all');
    Route::get('/latest', [CourseController::class, 'show'])->name('latest.course')->defaults('category', 'latest');
    Route::get('/child', [CourseController::class, 'show'])->name('child.course')->defaults('category', 'child');
    Route::get('/diy', [CourseController::class, 'show'])->name('diy.course')->defaults('category', 'diy');
    Route::get('/sport', [CourseController::class, 'show'])->name('sport.course')->defaults('category', 'sport');
    Route::get('/train', [CourseController::class, 'show'])->name('train.course')->defaults('category', 'train');
    Route::get('/major', [CourseController::class, 'show'])->name('major.course')->defaults('category', 'major');
});

