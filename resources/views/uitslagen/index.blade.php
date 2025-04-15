<x-app-layout>
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-semibold">Overzicht Uitslagen</h1>

        @if(session('message'))
            <div class="bg-red-500 text-white p-3 rounded mb-4">
                {{ session('message') }}
            </div>
        @endif

        <form action="{{ route('uitslagen.index') }}" method="GET" class="mb-4">
            <label for="date" class="block text-gray-700">Selecteer een datum:</label>
            <input type="date" name="date" id="date" class="form-input mt-1 block w-full" value="{{ old('date', $selectedDate ?? '') }}">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded mt-2">Tonen</button>
        </form>

        @if($selectedDate)
            @if($uitslagen->count() > 0)
                <h2 class="text-xl font-semibold mt-6">Resultaten voor {{ $selectedDate }}</h2>
                <table class="min-w-full mt-4 border-collapse border border-gray-200">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">Naam</th>
                            <th class="border px-4 py-2">Aantal punten</th>
                            <th class="border px-4 py-2">Datum</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($uitslagen as $uitslag)
                            <tr>
                                <td class="border px-4 py-2">{{ $uitslag->spel->persoon->voornaam }}</td>
                                <td class="border px-4 py-2">{{ $uitslag->aantalpunten }}</td>
                                <td class="border px-4 py-2">{{ $uitslag->spel->reservering->datum }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="mt-4 text-gray-500">Er is geen uitslag beschikbaar voor deze geselecteerde datum.</p>
            @endif
        @else
            <h2 class="text-xl font-semibold mt-6">Alle Uitslagen</h2>
            <table class="min-w-full mt-4 border-collapse border border-gray-200">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">Naam</th>
                        <th class="border px-4 py-2">Aantal punten</th>
                        <th class="border px-4 py-2">Datum</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($uitslagen as $uitslag)
                        <tr>
                            <td class="border px-4 py-2">{{ $uitslag->spel->persoon->voornaam }}</td>
                            <td class="border px-4 py-2">{{ $uitslag->aantalpunten }}</td>
                            <td class="border px-4 py-2">{{ $uitslag->spel->reservering->datum }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-app-layout>
