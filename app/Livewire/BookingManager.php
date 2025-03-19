<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Booking;
use App\Models\Property;

class BookingManager extends Component
{
    public $propertyId;
    public $startDate;
    public $endDate;

    public function book()
    {
        // Validation des données
        $this->validate([
            'startDate' => 'required|date',
            'endDate' => 'required|date|after:startDate',
        ]);

        // Création de la réservation
        Booking::create([
            'user_id' => auth()->id(),
            'property_id' => $this->propertyId,
            'start_date' => $this->startDate,
            'end_date' => $this->endDate,
        ]);

        // Message de succès
        session()->flash('message', 'Réservation effectuée avec succès !');
    }

    public function render()
    {
        return view('livewire.booking-manager');
    }
}
