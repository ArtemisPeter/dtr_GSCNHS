<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\importController;
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


Route::get('/', [AuthController::class, 'loginPage'])->name('loginPage');
Route::post('/l', [AuthController::class, 'loginPost'])->name('loginPost');

Route::get('/importDtr', [importController::class, 'importDtr'])->name('importDtr');

