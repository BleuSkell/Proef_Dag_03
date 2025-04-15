<x-app-layout>
    <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Wijzig Pakketoptie</h1>

        <form action="{{ route('reserveringen.update', $reservering->id) }}" method="POST" class="space-y-6 bg-white p-6 rounded-lg shadow">
            @csrf

            <div>
                <label for="pakketoptie_id" class="block text-sm font-medium text-gray-700 mb-2">Kies een nieuw pakketoptie:</label>
                <select name="pakketoptie_id" id="pakketoptie_id" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    @foreach($pakketopties as $pakketoptie)
                        <option value="{{ $pakketoptie->id }}" {{ $reservering->pakketoptie_id == $pakketoptie->id ? 'selected' : '' }}>
                            {{ $pakketoptie->naam }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="flex items-center gap-4">
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-600 text-white text-sm font-medium rounded hover:bg-green-700">
                    Wijzigen
                </button>
                <a href="{{ route('reserveringen.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-300 text-gray-800 text-sm font-medium rounded hover:bg-gray-400">
                    Annuleren
                </a>
            </div>
        </form>
    </div>
</x-app-layout>
