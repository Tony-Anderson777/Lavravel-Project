<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\PropertyController;
use App\Http\Livewire\BookingComponents;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use  App\Models\Booking;
use App\Http\Controllers\DashboardController;

// Route d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('/', function () {
    return view('welcome');
});

// Routes protégées par auth
Route::middleware('auth')->group(function () {
    // Routes pour le profil utilisateur
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route de déconnexion
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    // Routes pour les propriétés (CRUD complet)
    Route::resource('properties', PropertyController::class);

    // Routes pour les réservations (CRUD complet)
    Route::resource('bookings', BookingComponents::class);
});

// Route de la page "À propos"
Route::get('/about', [HomeController::class, 'about'])->name('about');


 Route::get('/bookings/create',  BookingComponents::class)->name('bookings.create');
 Route::get('/bookings',  function  ()  {
     return  view('bookings.index'); })->name('bookings.index'); 

// Inclusion des routes d'authentification (login, register, etc.)
require __DIR__.'/auth.php';

 Route::get('/bookings',  function  ()  {
     return  view('bookings.index',  [
         'bookings'  =>  Booking::all()
     ]); })->name('bookings.index'); 