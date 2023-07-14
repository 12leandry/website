<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ServiceController;

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

Route::get('/Admin', function () {
    // dd(auth()->user());
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [TestController::class, 'home'])->name('home');
Route::get('/Services', [TestController::class, 'Services'])->name('Services');
Route::get('/Projects', [TestController::class, 'projects'])->name('Projects');
Route::get('/Contact', [TestController::class, 'contact'])->name('Contact');
Route::get('/About', [TestController::class, 'aboutus'])->name('About');
Route::get('/Service-details', [TestController::class, 'servicedetail'])->name('Service-details');
Route::get('/Project-details', [TestController::class, 'projectdetail'])->name('Project-details');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('services', [ServiceController::class, 'index'])->name('services.index');
    Route::post('/add-services', [ServiceController::class, 'store'])->name('services.store');
    Route::patch('/edit-services/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::delete('/delete-services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');

    Route::get('projets', [ProjetController::class, 'index'])->name('projets.index');
    Route::post('/add-projets', [ProjetController::class, 'store'])->name('projets.store');
    Route::patch('/edit-projets/{id}', [ProjetController::class, 'update'])->name('projets.update');
    Route::delete('/delete-projets/{id}', [ProjetController::class, 'destroy'])->name('projets.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
