<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\_AdmissionController; 
use App\Http\Controllers\_GradeController; 

use App\Http\Controllers\_BiodataController;
use App\Http\Controllers\_FacultyController;
use App\Http\Controllers\_CourseController;
use App\Http\Controllers\_ProgramController;
use App\Http\Controllers\_DepartmentController;
use App\Http\Controllers\_SessionController;
use App\Http\Controllers\_PaymentHistoryController;
use App\Http\Controllers\_StudentController;
use App\Http\Controllers\_ProfileController; 
use App\Http\Controllers\_LandingPageController; 
use App\Http\Controllers\_ApplicationController; 


Route::get('/', function () {
    return view('welcome');
});


Route::get('/course', [_CourseController::class, 'index'])->name('course')->middleware(['auth']);
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


Route::get('/payment', [_PaymentHistoryController::class, 'index'])->name('payment');
Route::get('/payment/edit/{id}', [_PaymentHistoryController::class, 'edit']);
Route::post('/payment/edit', [_PaymentHistoryController::class, 'update'])->name('paymentupdate');
Route::post('/payment/create', [_PaymentHistoryController::class, 'store'])->name('paymentcreate');
Route::get('/payment/delete/{id}', [_PaymentHistoryController::class, 'destroy'])->name('paymentdestroy');


Route::get('/programme', [_ProgramController::class, 'index'])->name('programme');
Route::get('/programme/edit/{id}', [_ProgramController::class, 'edit']);
Route::post('/programme/edit', [_ProgramController::class, 'update'])->name('programmeupdate');
Route::post('/programme/create', [_ProgramController::class, 'store'])->name('programmecreate');
Route::get('/programme/delete/{id}', [_ProgramController::class, 'destroy'])->name('programmedestroy');


Route::get('/profile', [_ProfileController::class, 'index'])->name('profile');
Route::get('/profile/edit/{id}', [_ProfileController::class, 'edit']);
Route::post('/profile/edit', [_ProfileController::class, 'update'])->name('profileupdate');
Route::post('/profile/create', [_ProfileController::class, 'store'])->name('profilecreate');
Route::get('/profile/delete/{id}', [_ProfileController::class, 'destroy'])->name('profiledestroy');
Route::get('/profile/delete/{id}', [_ProfileController::class, 'destroy'])->name('profiledestroy');
//
//paymentRedirect


Route::get('/student', [_StudentController::class, 'index'])->name('student');
Route::get('/student/edit/{id}', [_StudentController::class, 'edit']);
Route::post('/student/edit', [_StudentController::class, 'update'])->name('studentupdate');
Route::post('/student/create', [_StudentController::class, 'store'])->name('studentcreate');
Route::get('/student/delete/{id}', [_StudentController::class, 'destroy'])->name('studentdestroy');


Route::controller(_BiodataController::class)->group(function(){
    Route::get('bio_data', 'index')->name('bio_data.index');
    // Route::get('bio_data', 'index')->name('bio_data.index');
    Route::post('bio_data', 'store')->name('bio_data.store');
    Route::get('bio_data/create', 'create')->name('bio_data.create');
    Route::get('bio_data/{id}', 'show')->name('bio_data.show');
    Route::put('bio_data/{id}', 'update')->name('bio_data.update');
    Route::delete('bio_data/{id}', 'destroy')->name('bio_data.destroy');
    Route::get('bio_data/{id}/edit', 'edit')->name('bio_data.edit');
});

Route::prefix('students')->group(function () {
    
    Route::get('/admissions', [_AdmissionController::class, 'index'])->name('admissions.index');
    Route::post('/admission/store', [_AdmissionController::class, 'store'])->name('admission.store');
    Route::get('/admissions/fetchAll', [_AdmissionController::class, 'fetchAll'])->name('admissions.fetchAll');
    Route::delete('/admission/delete', [_AdmissionController::class, 'delete'])->name('admission.delete');
    Route::get('/admission/edit', [_AdmissionController::class, 'edit'])->name('admission.edit');
    Route::post('/admission/update', [_AdmissionController::class, 'update'])->name('admission.update');

    Route::get('/grades', [_GradeController::class, 'index'])->name('grades.index');
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

Route::prefix('student')->group(function () {
    
    Route::get('/application', [_ApplicationController::class, 'index'])->name('application.index');
    Route::post('/application/store', [_ApplicationController::class, 'store'])->name('application.store');
    /* Route::get('/admissions/fetchAll', [_ApplicationController::class, 'fetchAll'])->name('admissions.fetchAll');
    Route::delete('/admission/delete', [_ApplicationController::class, 'delete'])->name('admission.delete'); */
    Route::get('/application/edit', [_ApplicationController::class, 'edit'])->name('application.edit');
    Route::post('/application/update', [_ApplicationController::class, 'update'])->name('application.update'); 

    Route::get('/landing-page', [_LandingPageController::class, 'index'])->name('landing.index');
    
});

 
 
 
    Route::get('/biodata', [_BiodataController::class, 'index'])->name('biodata');
    Route::get('/biodata/edit/{id}', [_BiodataController::class, 'edit']);
    Route::post('/biodata/edit', [_BiodataController::class, 'update'])->name('biodataupdate');
    Route::post('/biodata/create', [_BiodataController::class, 'store'])->name('biodatacreate');
    Route::get('/biodata/delete/{id}', [_BiodataController::class, 'destroy'])->name('biodatadestroy');
 
    Route::get('/session',  [_SessionController::class, 'index'])->name('session');
    Route::get('/session/edit/{id}', [_SessionController::class, 'edit']);
    Route::post('/session/edit',[_SessionController::class, 'update'])->name('sessionupdate');
    Route::post('/session/create', [_SessionController::class, 'store'])->name('sessioncreate');
    Route::get('/session/delete/{id}', [_SessionController::class, 'destroy'])->name('sessiondestroy');
    Route::get('/application', [_ApplicationController::class, 'addPaymentInfo'])->name('application');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
