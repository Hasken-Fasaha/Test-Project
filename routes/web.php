<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\_BiodataController; 
use App\Http\Controllers\_AdmissionController; 
use App\Http\Controllers\_GradeController; 



Route::get('/', function () {
    return view('welcome');
});

Route::get('/faculty', [App\Http\Controllers\_FacultyController::class, 'index'])->name('faculty');
Route::get('/faculty/edit/{id}', [App\Http\Controllers\_FacultyController::class, 'edit']);
Route::post('/faculty/edit', [App\Http\Controllers\_FacultyController::class, 'update'])->name('facultyupdate');
Route::post('/faculty/create', [App\Http\Controllers\_FacultyController::class, 'store'])->name('facultycreate');
Route::get('/faculty/delete/{id}', [App\Http\Controllers\_FacultyController::class, 'destroy'])->name('facultydestroy');


Route::get('/department', [App\Http\Controllers\_DepartmentController::class, 'index'])->name('department');
Route::get('/department/edit/{id}', [App\Http\Controllers\_DepartmentController::class, 'edit']);
Route::post('/department/edit', [App\Http\Controllers\_DepartmentController::class, 'update'])->name('departmentupdate');
Route::post('/department/create', [App\Http\Controllers\_DepartmentController::class, 'store'])->name('departmentcreate');
Route::get('/department/delete/{id}', [App\Http\Controllers\_DepartmentController::class, 'destroy'])->name('departmentdestroy');

Route::get('/programme', [App\Http\Controllers\_ProgramController::class, 'index'])->name('programme');
Route::get('/programme/edit/{id}', [App\Http\Controllers\_ProgramController::class, 'edit']);
Route::post('/programme/edit', [App\Http\Controllers\_ProgramController::class, 'update'])->name('programmeupdate');
Route::post('/programme/create', [App\Http\Controllers\_ProgramController::class, 'store'])->name('programmecreate');
Route::get('/programme/delete/{id}', [App\Http\Controllers\_ProgramController::class, 'destroy'])->name('programmedestroy');


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
    
    Route::get('/admissions', [_AdmissionController::class, 'index']);
    Route::post('/admission/store', [_AdmissionController::class, 'store'])->name('admission.store');
    Route::get('/admissions/fetchAll', [_AdmissionController::class, 'fetchAll'])->name('admissions.fetchAll');
    Route::delete('/admission/delete', [_AdmissionController::class, 'delete'])->name('admission.delete');
    Route::get('/admission/edit', [_AdmissionController::class, 'edit'])->name('admission.edit');
    Route::post('/admission/update', [_AdmissionController::class, 'update'])->name('admission.update');

    Route::get('/grades', [_GradeController::class, 'index']);
    Route::post('/grade/store', [_GradeController::class, 'store'])->name('grade.store');
    Route::get('/grades/fetchAll', [_GradeController::class, 'fetchAll'])->name('grades.fetchAll');
    Route::delete('/grade/delete', [_GradeController::class, 'delete'])->name('grade.delete');
    Route::get('/grade/edit', [_GradeController::class, 'edit'])->name('grade.edit');
    Route::post('/grade/update', [_GradeController::class, 'update'])->name('grade.update');

    Route::get('/results', [_AdmissionController::class, 'index']);
    Route::post('/result/store', [_AdmissionController::class, 'store'])->name('result.store');
    Route::get('/results/fetchAll', [_AdmissionController::class, 'fetchAll'])->name('results.fetchAll');
    Route::delete('/result/delete', [_AdmissionController::class, 'delete'])->name('result.delete');
    Route::get('/result/edit', [_AdmissionController::class, 'edit'])->name('result.edit');
    Route::post('/result/update', [_AdmissionController::class, 'update'])->name('result.update');
    
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
