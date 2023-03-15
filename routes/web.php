<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolClassesController;

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

Route::get('/classes', [App\Http\Controllers\SchoolClassesController::class,'getallclasses'])->name('get.allclasses');
Route::get('/class/create', [App\Http\Controllers\SchoolClassesController::class,'createClass'])->name('class.create');
Route::get('/class/store', [App\Http\Controllers\SchoolClassesController::class,'storeClass'])->name('class.store');
Route::get('/class/show', [App\Http\Controllers\SchoolClassesController::class,'showClass'])->name('class.show');
//Route::get('/home', [App\Http\Controllers\SchoolClassesController::class,'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\SchoolClassesController::class,'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\SchoolClassesController::class,'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\SchoolClassesController::class,'index'])->name('home');
