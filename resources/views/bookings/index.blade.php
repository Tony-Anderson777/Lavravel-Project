@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des réservations</h1>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th>Utilisateur</th>
                <th>Propriété</th>
                <th>Date de début</th>
                <th>Date de fin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking->user->name }}</td>
                    <td>{{ $booking->property->name }}</td>
                    <td>{{ $booking->start_date }}</td>
                    <td>{{ $booking->end_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
