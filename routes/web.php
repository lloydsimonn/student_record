<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::get('Student',[\App\Http\Controllers\StudentController::class, 'index'])->name('Student.index');
    Route::get('Student/create',[\App\Http\Controllers\StudentController::class, 'create'])->name('Student.create');
    Route::post('Student/create',[\App\Http\Controllers\StudentController::class, 'store'])->name('Student.store');
    Route::get('Student/{id}/delete',[\App\Http\Controllers\StudentController::class, 'destroy'])->name('Student.delete');
});
