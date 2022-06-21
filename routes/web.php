<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LeadershipController;
use App\Http\Controllers\CareerController;
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
    return view('page');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::resource('pages', PageController::class)->middleware(['auth']);
Route::resource('leaderships', LeadershipController::class)->middleware(['auth']);
Route::resource('careers', CareerController::class)->middleware(['auth']);