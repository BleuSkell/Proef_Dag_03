<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reserveringen') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="GET" action="{{ route('reservations.index') }}" class="mb-4">
                        <label for="date" class="block text-sm font-medium text-gray-700">Filter op datum:</label>
                        <input type="date" id="date" name="date" value="{{ $filterDate }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        <button type="submit" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded-md">Filter</button>
                    </form>

                    <h3 class="text-lg font-bold mb-4">Jouw reserveringen</h3>
                    <table class="table-auto w-full border-collapse border border-gray-300">
                        <thead>
                            <tr>
                                <th class="border border-gray-300 px-4 py-2">Reserveringsnummer</th>
                                <th class="border border-gray-300 px-4 py-2">Datum</th>
                                <th class="border border-gray-300 px-4 py-2">Starttijd</th>
                                <th class="border border-gray-300 px-4 py-2">Eindtijd</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservations as $reservation)
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">{{ $reservation->ReservationNumber }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $reservation->Date }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $reservation->StartTime }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $reservation->EndTime }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>