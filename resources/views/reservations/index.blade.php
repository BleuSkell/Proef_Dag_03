<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="GET" action="{{ route('reservations.index') }}" class="mb-4">
                    <label for="filter_date" class="block mb-2">Filter op datum (vanaf):</label>
                    <input type="date" name="filter_date" id="filter_date" value="{{ request('filter_date') }}" class="border px-2 py-1">
                    <button type="submit" class="ml-2 bg-blue-500 text-white px-3 py-1 rounded">Filter</button>
                </form>
                
                <table class="mt-4 w-full border-collapse border border-gray-300">
                    <thead>
                        <tr>
                            <th class="border p-2">Datum</th>
                            <th class="border p-2">Tijd</th>
                            <th class="border p-2">Aantal Volwassenen</th>
                            <th class="border p-2">Aantal Kinderen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($reservations as $reservation)
                            <tr>
                                <td class="border p-2">{{ $reservation->Date }}</td>
                                <td class="border p-2">{{ $reservation->StartTime }} - {{ $reservation->EndTime }}</td>
                                <td class="border p-2">{{ $reservation->AdultsAmount }}</td>
                                <td class="border p-2">{{ $reservation->ChildrenAmount }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center p-4">Geen reserveringen gevonden.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
