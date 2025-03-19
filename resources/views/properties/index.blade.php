@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des propriétés</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($properties as $property)
            <div class="bg-white p-4 shadow rounded">
                <h2>{{ $property->name }}</h2>
                <p>{{ $property->description }}</p>
                <p>Prix par nuit : {{ $property->price_per_night }} €</p>
                <a href="{{ route('properties.show', $property) }}" class="text-blue-500">Voir plus</a>
            </div>
        @endforeach
    </div>
</div>
@endsection