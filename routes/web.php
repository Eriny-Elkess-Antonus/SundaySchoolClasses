<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolClassesController;
use App\Http\Controllers\SchoolStudentsController;
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
Route::resource('/SundaySchool',SchoolClassesController::class);
Route::get('/SundaySchoolStudents/classes',[SchoolStudentsController::class,'index'])->name('get.allStudents');
Route::get('/SundaySchoolstusent/create', [SchoolStudentsController::class,'create'])->name('create.student');
Route::post('/SundaySchoolstusent/Store', [SchoolStudentsController::class,'store'])->name('store.student');