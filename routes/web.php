<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolClassesController;
use App\Http\Controllers\SundayStudentsController;
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
Route::resource('/SundaySchool',SundayStudentsController::class);
Route::get('/SundaySchoolStudents', [App\Http\Controllers\SundayStudentsController::class,'index'])->name('get.allStudents');
Route::get('/SundaySchoolstusent/create', [App\Http\Controllers\SundayStudentsController::class,'createStudent'])->name('create.student');
Route::post('/SundaySchoolstusent/Store', [App\Http\Controllers\SundayStudentsController::class,'addStudent'])->name('store.student');