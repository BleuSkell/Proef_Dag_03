<x-app-layout>
<div class="container">
    <h1>Overzicht Reserveringen</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Datum</th>
                <th>Volwassenen</th>
                <th>Kinderen</th>
                <th>Optiepakket</th>
                <th>Wijzigen</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reserveringen as $reservering)
                <tr>
                    <td>{{ $reservering->persoon?->naam ?? 'Onbekend' }}</td>
                    <td>{{ $reservering->datum }}</td>
                    <td>{{ $reservering->volwassenen }}</td>
                    <td>{{ $reservering->kinderen }}</td>
                    <td>{{ $reservering->pakketoptie?->naam ?? 'Geen pakketoptie' }}</td>
                    <td>
                        <a href="{{ route('reserveringen.edit', $reservering->id) }}" class="btn btn-primary">Wijzigen</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>

