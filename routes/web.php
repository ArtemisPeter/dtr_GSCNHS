<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\importController;
use App\Http\Controllers\importCsv;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'loginPage')->name('login');
    Route::post('/l', 'loginPost')->name('loginPost');
    Route::get('/logout', 'logout')->name('logout');
});


Route::get('/importDtr', [importController::class, 'importDtr'])->name('home')->middleware('auth');
Route::post('/importCsv', [importCsv::class, 'importCsv'])->name('importCsv')->middleware('auth');

Route::get('/Teacher', [TeacherController::class, 'teacherView'])->name('teacherv')->middleware('auth');
Route::put('/Teacher/update', [TeacherController::class, 'teacherUpdate'])->name('teacherUp')->middleware('auth');

Route::get('/aboutme', function(){
    return view('aboutMe');
})->name('aboutMe')->middleware('auth');

