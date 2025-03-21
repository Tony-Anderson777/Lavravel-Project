<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking; 

class DashboardController extends Controller
{
    public function index()
    {
        $bookings = Booking::all(); // Récupère toutes les réservations
        return view('dashboard', compact('bookings')); // Ensure no non-breaking spaces or invisible characters here
    }
}