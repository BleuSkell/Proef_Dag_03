<!-- Begin van je pagina -->
<div class="container mx-auto p-6">
    <!-- Titel van de pagina -->
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Reserveringsoverzicht
    </h2>

    <h1 class="text-2xl font-semibold">Overzicht van de Uitslagen</h1>

    <!-- Foutmelding tonen als er geen uitslagen zijn -->
    @if(session('message'))
        <div class="bg-red-500 text-white p-3 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <!-- Datum selecteren en de tonen knop -->
    <form action="{{ route('uitslagen.index') }}" method="GET">
        <div class="mb-4">
            <label for="date" class="block text-gray-700">Selecteer een datum:</label>
            <input type="date" name="date" id="date" class="form-input mt-1 block w-full" value="{{ old('date', $selectedDate ?? '') }}">
        </div>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Tonen</button>
    </form>

    <!-- Overzicht van de uitslagen -->
    @if($uitslagen->count() > 0)
        <table class="min-w-full mt-6 border-collapse">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Reservering ID</th>
                    <th class="border px-4 py-2">Persoon</th>
                    <th class="border px-4 py-2">Spel</th>
                    <th class="border px-4 py-2">Punten</th>
                </tr>
            </thead>
            <tbody>
                @foreach($uitslagen as $uitslag)
                    <tr>
                        <td class="border px-4 py-2">{{ $uitslag->reservering->id }}</td>
                        <td class="border px-4 py-2">{{ $uitslag->persoon->naam }}</td>
                        <td class="border px-4 py-2">{{ $uitslag->spel->naam }}</td>
                        <td class="border px-4 py-2">{{ $uitslag->punten }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="mt-6 text-gray-500">Geen uitslagen beschikbaar voor deze datum.</p>
    @endif
</div>
<!-- Einde van je pagina -->
