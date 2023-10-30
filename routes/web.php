<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/seeting', function () {
    return view('seetings');
});
Route::get('/choice', function () {
    return view('choice');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::prefix('admin')->name('admin.')->group(function (){
    Route::resource('apprenant',\App\Http\Controllers\ApprenantController::class);
    Route::resource('professeur',\App\Http\Controllers\ProfesseurController::class);
    Route::resource('cour',\App\Http\Controllers\CourController::class);
});
require __DIR__.'/auth.php';
