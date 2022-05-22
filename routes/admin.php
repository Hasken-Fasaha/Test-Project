<?php

use Illuminate\Support\Facades\Route;
Route::prefix('admin')->middleware(['auth'])->group(function(){
    Route::view('/lobin','auth.login')->name('lobin');
    Route::view('/dashboard','dashboard')->name('dashboard');
});