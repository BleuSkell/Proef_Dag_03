<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reservatie bewerken') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('reservations.update', $reservation->Reservation_id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block mb-1">Datum:</label>
                        <input type="date" name="Date" value="{{ \Carbon\Carbon::parse($reservation->Date)->format('Y-m-d') }}" class="border px-2 py-1 w-full">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1">Baannummer:</label>
                        <select name="Lane_id" class="border px-2 py-1 w-full">
                            @foreach ($lanes as $lane)
                                <option value="{{ $lane->Id }}" 
                                    {{ $reservation->ReservationLane_id == $lane->Id ? 'selected' : '' }}>
                                    {{ $lane->Number }} ({{ $lane->HasFence ? 'Met hekjes' : 'Zonder hekjes' }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1">Aantal Volwassenen:</label>
                        <input type="number" name="AdultsAmount" value="{{ $reservation->AdultsAmount }}" class="border px-2 py-1 w-full">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1">Aantal Kinderen:</label>
                        <input type="number" name="ChildrenAmount" value="{{ $reservation->ChildrenAmount }}" class="border px-2 py-1 w-full">
                    </div>

                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Opslaan</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
