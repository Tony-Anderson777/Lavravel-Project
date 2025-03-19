<div>
    <form wire:submit.prevent="book">
        <div>
            <label for="startDate">Date de début :</label>
            <input type="date" id="startDate" wire:model="startDate">
        </div>
        <div>
            <label for="endDate">Date de fin :</label>
            <input type="date" id="endDate" wire:model="endDate">
        </div>
        <button type="submit">Réserver</button>
    </form>

    @if (session()->has('message'))
        <div>
            {{ session('message') }}
        </div>
    @endif
</div>