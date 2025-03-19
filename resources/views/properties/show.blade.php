@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $property->name }}</h1>
    <p>{{ $property->description }}</p>
    <p>Prix par nuit : {{ $property->price_per_night }} €</p>
    <a href="{{ route('properties.index') }}" class="text-blue-500">Retour à la liste</a>
</div>
    <h1>Réserver cette propriété</h1>
    @livewire('booking-manager', ['propertyId' => $property->id])
	<button wire:click="book">Réserver</button>
	<input type="date" wire:model="startDate">
@endsection
