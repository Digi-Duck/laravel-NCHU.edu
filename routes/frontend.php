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
    Route::get('/type/{input}', [CourseController::class, 'get_course'])->name('course.type');
    Route::get('/all', [CourseController::class, 'all'])->name('course.all');
    Route::get('/latest', [CourseController::class, 'latest'])->name('course.latest');
});

