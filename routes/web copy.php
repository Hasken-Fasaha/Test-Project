<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\_BiodataController; 
use App\Http\Controllers\_AdmissionController; 

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

Route::prefix('students')->group(function () {
    Route::get('admissions', [_AdmissionController::class, 'index']);
    Route::post('admissions', [_AdmissionController::class, 'store']);
    //Route::get('fetch-admissions', [_AdmissionController::class, 'fetchAdmission'])->name('fetchAdmission');
    Route::get('admissions/fetch-admissions', [_AdmissionController::class, 'fetchAdmission'])->name('admissions.fetchAdmission');
    Route::get('edit-admission/{id}', [_AdmissionController::class, 'edit']);
    Route::put('update-admission/{id}', [_AdmissionController::class, 'update']);
    Route::delete('delete-admission/{id}', [_AdmissionController::class, 'destroy']);
    //Route::resource('/admission', _AdmissionController::class);
    /* Route::controller(_AdmissionController::class)->group(function(){
        Route::get('admission', 'index')->name('admission.index');
        Route::post('admission', 'store')->name('admission.store');
        Route::get('admission', 'fetchAll')->name('admission.fetchAll');
        Route::get('admission/create', 'create')->name('admission.create');
        /* Route::get('admission/{id}', 'show')->name('admission.show');
        Route::put('admission/{id}', 'update')->name('admission.update');
        Route::delete('admission/{id}', 'destroy')->name('admission.destroy'); *
        Route::get('admission/edit', 'edit')->name('admission.edit'); 
    }); */
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
