<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CoursController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[UserController::class,'index']);


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',
])->group(function () {
    Route::get('/dashboard',[UserController::class,'index'])->name('dashboard');
    Route::get('/blog',[BlogController::class,'index']);
    Route::get('/add_blog',[BlogController::class,'add']);
    Route::post('/blog',[BlogController::class,'insert']);
    Route::get('blog_edit/{id}',[BlogController::class,'edit']);
    Route::post('update_blog/{id}',[BlogController::class,'update']);
    Route::post('/blog_delete/{id}',[BlogController::class,'delete']);
    // About part
    Route::resource('/about',AboutController::class);
    // Courses
    Route::resource('/course',CoursController::class);

});
