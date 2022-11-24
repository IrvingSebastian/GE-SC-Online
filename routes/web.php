<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\ViewsController;

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
Route::resource('data', DataController::class)->middleware('auth');
