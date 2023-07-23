<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;

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

// Route::get('/dashboard', function () {
//     // dd(auth()->user());
//     $page_title = "Dashboard";
//     return view('dashboard')->with(['page_title' => $page_title]);
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [TestController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
// sendContactEmail
Route::get('/', [TestController::class, 'home'])->name('home');
Route::get('/Services', [TestController::class, 'Services'])->name('Services');
Route::get('/Projets', [TestController::class, 'projects'])->name('Projets');
Route::get('/Contact', [TestController::class, 'contact'])->name('Contact');
Route::get('/A-Propos', [TestController::class, 'aboutus'])->name('A-Propos');
Route::get('/services/service-details/{id}', [ServiceController::class, 'show'])->name('service-details');
Route::get('/projets/projet-details/{id}', [ProjetController::class, 'show'])->name('project-details');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('services', [ServiceController::class, 'index'])->name('services.index');
    Route::post('/add-services', [ServiceController::class, 'store'])->name('services.store');
    Route::patch('/edit-services/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::delete('/delete-services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');

    Route::get('projets', [ProjetController::class, 'index'])->name('projets.index');
    Route::post('/add-projets', [ProjetController::class, 'store'])->name('projets.store');
    Route::patch('/edit-projets/{id}', [ProjetController::class, 'update'])->name('projets.update');
    Route::delete('/delete-projets/{id}', [ProjetController::class, 'destroy'])->name('projets.destroy');

    Route::get('teams', [TeamController::class, 'index'])->name('teams.index');
    Route::post('/add-teams', [TeamController::class, 'store'])->name('teams.store');
    Route::patch('/edit-teams/{id}', [TeamController::class, 'update'])->name('teams.update');
    Route::delete('/delete-teams/{id}', [TeamController::class, 'destroy'])->name('teams.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/send-contact-email', [TestController::class, 'sendEmail'])->name('send.contact.email');


require __DIR__.'/auth.php';
