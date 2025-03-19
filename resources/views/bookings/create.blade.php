@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Créer une réservation</h1>
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="user_id" class="block text-gray-700">Utilisateur</label>
            <select name="user_id" id="user_id" class="form-select mt-1 block w-full">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="property_id" class="block text-gray-700">Propriété</label>
            <select name="property_id" id="property_id" class="form-select mt-1 block w-full">
                @foreach ($properties as $property)
                    <option value="{{ $property->id }}">{{ $property->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="start_date" class="block text-gray-700">Date de début</label>
            <input type="date" name="start_date" id="start_date" class="form-input mt-1 block w-full">
        </div>
        <div class="mb-4">
            <label for="end_date" class="block text-gray-700">Date de fin</label>
            <input type="date" name="end_date" id="end_date" class="form-input mt-1 block w-full">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Créer</button>
    </form>
	
    
</div>
@livewire('bookings-component')
@endsection