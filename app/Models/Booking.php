<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
     * Les attributs qui sont mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'property_id',
        'start_date',
        'end_date',
    ];

    /**
     * Obtenez l'utilisateur associé à cette réservation.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Obtenez la propriété associée à cette réservation.
     */
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
