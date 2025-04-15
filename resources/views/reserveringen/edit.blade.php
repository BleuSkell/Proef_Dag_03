<x-app-layout>
<div class="container">
    <h1>Wijzig Pakketoptie</h1>

    <form action="{{ route('reserveringen.update', $reservering->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="pakketoptie_id" class="form-label">Kies een nieuw pakketoptie:</label>
            <select name="pakketoptie_id" id="pakketoptie_id" class="form-select">
                @foreach($pakketopties as $pakketoptie)
                    <option value="{{ $pakketoptie->id }}" {{ $reservering->pakketoptie_id == $pakketoptie->id ? 'selected' : '' }}>
                        {{ $pakketoptie->naam }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Wijzigen</button>
        <a href="{{ route('reserveringen.index') }}" class="btn btn-secondary">Annuleren</a>
    </form>
</div>
</x-app-layout>

