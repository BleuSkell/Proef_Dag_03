<x-app-layout>
    <div class="min-h-screen bg-gray-100 flex items-center justify-center py-12">
        <div class="w-full max-w-4xl bg-white shadow-lg rounded-lg border border-gray-200">
            <div class="card-header bg-primary text-white p-4 rounded-t-lg">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="text-xl font-semibold">Klant details</h4>
                    <a href="{{ route('people.index') }}" class="btn btn-sm btn-outline-light">Terug naar overzicht</a>
                </div>
            </div>
            <div class="card-body p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-4">
                        <p><strong>Voornaam:</strong> {{ $person->FirstName }}</p>
                        <p><strong>Tussenvoegsel:</strong> {{ $person->Infix ?? 'N/A' }}</p>
                        <p><strong>Achternaam:</strong> {{ $person->LastName }}</p>
                        <p><strong>Mobiel:</strong> 
                            @if($person->contacts->isNotEmpty())
                                {{ $person->contacts->first()->Mobile }}
                            @else
                                N/A
                            @endif
                        </p>
                        <p><strong>E-mail:</strong> 
                            @if($person->contacts->isNotEmpty())
                                {{ $person->contacts->first()->E_mail }}
                            @else
                                N/A
                            @endif
                        </p>
                        <p><strong>Volwassen:</strong> 
                            @if($person->IsActief) Ja @else Nee @endif
                        </p>
                    </div>
                    <div class="space-y-4">
                        <div class="card bg-gray-50 shadow-sm rounded-lg border border-gray-200">
                            <div class="card-header bg-light p-4">
                                <h5 class="text-lg font-semibold">Opmerkingen</h5>
                            </div>
                            <div class="card-body p-4">
                                {{ $person->Opmerking ?? 'Geen opmerkingen' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer p-6 bg-gray-50 flex justify-between items-center border-t border-gray-200">
                <a href="{{ route('people.edit', $person->id) }}" class="btn btn-success btn-lg px-6 py-3 rounded-lg text-white bg-green-600 hover:bg-green-700 focus:outline-none">Wijzigen</a>
                <a href="{{ route('people.index') }}" class="btn btn-outline-primary btn-lg px-6 py-3 rounded-lg border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white focus:outline-none">Terug naar overzicht</a>
            </div>
        </div>
    </div>
</x-app-layout>
