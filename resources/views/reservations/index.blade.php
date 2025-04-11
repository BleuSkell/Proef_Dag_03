<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-4 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-row items-center">
                    <h3 class="mr-4"><strong>Reserveringen van {{ $reservations[0]->FirstName }} {{ $reservations[0]->MiddleName }} {{ $reservations[0]->LastName }}</strong></h3>

                    <form method="GET" action="{{ route('reservations.index') }}" class="mb-4">
                        <input type="date" name="filter_date" id="filter_date" value="{{ request('filter_date') }}" class="border px-2 py-1">
                        <button type="submit" class="ml-2 bg-blue-500 text-white px-3 py-1 rounded">Toon Reserveringen</button>
                    </form>
                </div>
                
                <table class="mt-4 w-full border-collapse border border-gray-300">
                    <thead>
                        <tr>
                            <th class="border p-2">Naam</th>
                            <th class="border p-2">Datum</th>
                            <th class="border p-2">Aantal uren</th>
                            <th class="border p-2">Begintijd</th>
                            <th class="border p-2">Eindtijd</th>
                            <th class="border p-2">Aantal Volwassenen</th>
                            <th class="border p-2">Aantal Kinderen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($reservations as $reservation)
                            <tr class="text-center">
                                <td class="border p-2">{{ $reservation->CallName }}</td>
                                <td class="border p-2">{{ $reservation->Date }}</td>
                                <td class="border p-2">{{ $reservation->TotalHours }}</td>
                                <td class="border p-2">{{ $reservation->StartTime }}</td>
                                <td class="border p-2">{{ $reservation->EndTime }}</td>
                                <td class="border p-2">{{ $reservation->AdultsAmount }}</td>
                                <td class="border p-2">{{ $reservation->ChildrenAmount }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center p-4">Er is geen informatie over deze periode.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
