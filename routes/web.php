<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\panel\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('home');

Route::view('dashboard', 'dashboard.index')
    ->middleware(['auth'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
Route::resource('dashboard/users',UserController::class)->except('show')
->middleware(['auth']);


require __DIR__.'/auth.php';

