<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


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


Route::get('/', [TestController::class, 'home'])->name('home');
Route::get('/Services', [TestController::class, 'Services'])->name('Services');
Route::get('/Projects', [TestController::class, 'projects'])->name('Projects');
Route::get('/Contact', [TestController::class, 'contact'])->name('Contact');
Route::get('/About', [TestController::class, 'aboutus'])->name('About');
