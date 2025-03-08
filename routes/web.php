<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\MedicationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clients', [ClientController::class, 'index']);
Route::get('/clients/create', [ClientController::class, 'create']);
Route::get('/clients/{client}', [ClientController::class, 'show']);
Route::delete('/clients/{client}', [ClientController::class, 'destroy']);
Route::post('/clients', [ClientController::class, 'store']);

Route::get('/medications', [MedicationController::class, 'index']);
Route::get('/medications/create', [MedicationController::class, 'create']);
Route::get('/medications/{medication}', [MedicationController::class, 'show']);
Route::delete('/medications/{client}', [MedicationController::class, 'destroy']);
Route::post('/medications', [MedicationController::class, 'store']);

Route::get('/employees', [EmployerController::class, 'index']);
Route::get('/employees/create', [EmployerController::class, 'create']);
Route::get('/employees/{employer}', [EmployerController::class, 'show']);
Route::delete('/employees/{client}', [EmployerController::class, 'destroy']);
Route::post('/employees', [EmployerController::class, 'store']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
