<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\_BiodataController;
use App\Http\Controllers\_FacultyController;
use App\Http\Controllers\_CourseController;
use App\Http\Controllers\_ProgramController;
use App\Http\Controllers\_DepartmentController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/course', [_CourseController::class, 'index'])->name('course');
Route::get('/course/edit/{id}', [_CourseController::class, 'edit']);
Route::post('/course/edit', [_CourseController::class, 'update'])->name('courseupdate');
Route::post('/course/create', [_CourseController::class, 'store'])->name('coursecreate');
Route::get('/course/delete/{id}', [_CourseController::class, 'destroy'])->name('coursedestroy');

Route::get('/faculty', [_FacultyController::class, 'index'])->name('faculty');
Route::get('/faculty/edit/{id}', [_FacultyController::class, 'edit']);
Route::post('/faculty/edit', [_FacultyController::class, 'update'])->name('facultyupdate');
Route::post('/faculty/create', [_FacultyController::class, 'store'])->name('facultycreate');
Route::get('/faculty/delete/{id}', [_FacultyController::class, 'destroy'])->name('facultydestroy');


Route::get('/department', [_DepartmentController::class, 'index'])->name('department');
Route::get('/department/edit/{id}', [_DepartmentController::class, 'edit']);
Route::post('/department/edit', [_DepartmentController::class, 'update'])->name('departmentupdate');
Route::post('/department/create', [_DepartmentController::class, 'store'])->name('departmentcreate');
Route::get('/department/delete/{id}', [_DepartmentController::class, 'destroy'])->name('departmentdestroy');

Route::get('/programme', [_ProgramController::class, 'index'])->name('programme');
Route::get('/programme/edit/{id}', [_ProgramController::class, 'edit']);
Route::post('/programme/edit', [_ProgramController::class, 'update'])->name('programmeupdate');
Route::post('/programme/create', [_ProgramController::class, 'store'])->name('programmecreate');
Route::get('/programme/delete/{id}', [_ProgramController::class, 'destroy'])->name('programmedestroy');


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
