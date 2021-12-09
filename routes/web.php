<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BayanController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\CourseController;
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
    return view('index');
})->name('home');
Route::get('/course',  [CourseController::class, 'index'])->name('course');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('bayan',BayanController::class);
Route::resource('newsletter',NewsLetterController::class)->only(['store']);