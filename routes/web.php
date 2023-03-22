<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ChirpController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/reservation', [ReservationController::class, 'index']);
Route::get('/hotel', [ReservationController::class, 'hotel']);
// Route::post('/store', [ReservationController::class, 'store']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/site', [PagesController::class, 'sites']);
Route::get('/campagne', [PagesController::class, 'campagne']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/', [PagesController::class, 'index']);
Route::resource('sites', ReservationController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);

Route::resource('chirps', ChirpController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
