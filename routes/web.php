<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\_BiodataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(_BiodataController::class)->group(function(){

    Route::get('bio_data', 'index')->name('bio_data.index');

    Route::post('bio_data', 'store')->name('bio_data.store');

    Route::get('bio_data/create', 'create')->name('bio_data.create');

    Route::get('bio_data/{id}', 'show')->name('bio_data.show');

    Route::put('bio_data/{id}', 'update')->name('bio_data.update');

    Route::delete('bio_data/{id}', 'destroy')->name('bio_data.destroy');

    Route::get('bio_data/{id}/edit', 'edit')->name('bio_data.edit');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
