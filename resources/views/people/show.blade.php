<x-app-layout>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Klant details</h4>
                    <a href="{{ route('people.index') }}" class="btn btn-sm btn-secondary">Terug naar overzicht</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Voornaam:</strong> {{ $person->FirstName }}</p>
                            <p><strong>Tussenvoegsel:</strong> {{ $person->Infix }}</p>
                            <p><strong>Achternaam:</strong> {{ $person->LastName }}</p>
                            <p><strong>Mobiel:</strong> 
                                @if($person->contacts->isNotEmpty())
                                    {{ $person->contacts->first()->Mobile }}
                                @endif
                            </p>
                            <p><strong>E-mail:</strong> 
                                @if($person->contacts->isNotEmpty())
                                    {{ $person->contacts->first()->E_mail }}
                                @endif
                            </p>
                            <p><strong>Volwassen:</strong> 
                                @if($person->IsActief) Ja @else Nee @endif
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Opmerkingen</h5>
                                </div>
                                <div class="card-body">
                                    {{ $person->Opmerking ?? 'Geen opmerkingen' }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('people.edit', $person->id) }}" class="btn btn-primary">Wijzigen</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>