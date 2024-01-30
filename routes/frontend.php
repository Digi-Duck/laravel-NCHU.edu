<?php

use App\Http\Controllers\Frontend\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\NewController;
use App\Http\Controllers\Frontend\WebInformationController;
use App\Http\Controllers\Frontend\CourseController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/about',[AboutController::class,'index'])->name('about.index');
Route::get('/news',[NewController::class,'index'])->name('news.index');
Route::get('/web',[WebInformationController::class,'index'])->name('web.index');

Route::prefix('course')->group(function () {
    Route::get('/all', [CourseController::class, 'all'])->name('all.course');
    Route::get('/latest', [CourseController::class, 'latest'])->name('latest.course');
    Route::get('/child', [CourseController::class, 'child'])->name('child.course');
    Route::get('/diy', [CourseController::class, 'diy'])->name('diy.course');
    Route::get('/sport', [CourseController::class, 'sport'])->name('sport.course');
    Route::get('/train', [CourseController::class, 'train'])->name('train.course');
    Route::get('/major', [CourseController::class, 'major'])->name('major.course');
});

