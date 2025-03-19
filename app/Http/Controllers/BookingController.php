<?php


namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use App\Models\Property;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['user', 'property'])->get();
        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        $users = User::all();
        $properties = Property::all();
        return view('bookings.create', compact('users', 'properties'));
    }
	public function store(Request $request)
	{
		$request->validate([
			'user_id' => 'required|exists:users,id',
			'property_id' => 'required|exists:properties,id',
			'start_date' => 'required|date',
			'end_date' => 'required|date|after:start_date',
		]);

		Booking::create($request->all());

		return redirect()->route('bookings.index')->with('success', 'Réservation créée avec succès.');
	}
	/**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    
}