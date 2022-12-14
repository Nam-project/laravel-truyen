<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\TruyenController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\IndexController;



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

Route::get('/', [IndexController::class, 'home']);
Route::get('/doc-truyen/{slug}', [IndexController::class, 'doctruyen']);
Route::get('/danh-muc/{slug}', [IndexController::class, 'danhmuc']);
Route::get('/xem-chapter/{id}/{slug}', [IndexController::class, 'chapter']);
Route::get('/tim-kiem', [IndexController::class, 'search']);
Route::get('/search-auto', [IndexController::class, 'searchAuto']);






Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('/danhmuc', DanhMucController::class);
Route::resource('/truyen', TruyenController::class);
Route::resource('/chapter', ChapterController::class);