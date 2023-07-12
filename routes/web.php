<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProfileController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    // dd(auth()->user());
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [TestController::class, 'home'])->name('home');
Route::get('/Services', [TestController::class, 'Services'])->name('Services');
Route::get('/Projects', [TestController::class, 'projects'])->name('Projects');
Route::get('/Contact', [TestController::class, 'contact'])->name('Contact');
Route::get('/About', [TestController::class, 'aboutus'])->name('About');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
