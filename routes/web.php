<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('frontend');
//});
Route::get('/', [DashboardController::class, 'index']) ->name('index');
Route::get('/galeri', [DashboardController::class, 'galeri']) ->name('galeri');
Route::get('/news', [DashboardController::class, 'news']) ->name('news');
