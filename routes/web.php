<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\StadisticController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\ComentaryController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ViewsController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [ViewsController::class, 'raiz'])->name('raiz');
Route::get('/index', [ViewsController::class, 'index'])->name('index');

Route::get('/home', [HomeController::class, 'home'])->name('home');

Auth::routes();
Route::resource('data', DataController::class)->middleware('auth');
Route::resource('stadistics', StadisticController::class)->middleware('auth');
Route::resource('works', WorkController::class)->middleware('auth');
Route::resource('infos', InfoController::class)->middleware('auth');