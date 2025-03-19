<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    /**
     * Les attributs qui sont mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'price_per_night',
    ];

    /**
     * Obtenez les réservations associées à cette propriété.
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
