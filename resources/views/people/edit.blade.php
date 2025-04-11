<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Klant wijzigen') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4">
                        <a href="{{ route('people.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Terug naar overzicht
                        </a>
                    </div>

                    <!-- Validation Errors -->
                    @if($errors->any())
                        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <ul class="list-disc list-inside">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-4 bg-gray-50 border-b border-gray-200 font-medium text-sm">
                            Gegevens wijzigen
                        </div>
                        <div class="p-6">
                            <form action="{{ route('people.update', $person->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                                    <div>
                                        <label for="FirstName" class="block text-sm font-medium text-gray-700">Voornaam</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                               id="FirstName" name="FirstName" value="{{ $person->FirstName }}" required>
                                    </div>
                                    <div>
                                        <label for="Infix" class="block text-sm font-medium text-gray-700">Tussenvoegsel</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                               id="Infix" name="Infix" value="{{ $person->Infix }}">
                                    </div>
                                    <div>
                                        <label for="LastName" class="block text-sm font-medium text-gray-700">Achternaam</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                               id="LastName" name="LastName" value="{{ $person->LastName }}" required>
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                    <div>
                                        <label for="CallName" class="block text-sm font-medium text-gray-700">Roepnaam</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                               id="CallName" name="CallName" value="{{ $person->CallName }}">
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                    <div>
                                        <label for="Mobile" class="block text-sm font-medium text-gray-700">Telefoon</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                               id="Mobile" name="Mobile" value="{{ $person->contacts->isNotEmpty() ? $person->contacts->first()->Mobile : '' }}">
                                    </div>
                                    <div>
                                        <label for="E_mail" class="block text-sm font-medium text-gray-700">E-mail</label>
                                        <input type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                               id="E_mail" name="E_mail" value="{{ $person->contacts->isNotEmpty() ? $person->contacts->first()->E_mail : '' }}" required>
                                        @if($errors->has('E_mail'))
                                            <span class="text-sm text-red-600">{{ $errors->first('E_mail') }}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="mb-6">
                                    <label for="Opmerking" class="block text-sm font-medium text-gray-700">Opmerking</label>
                                    <textarea class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                              id="Opmerking" name="Opmerking" rows="3">{{ $person->Opmerking }}</textarea>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                                    <div>
                                        <div class="flex items-center">
                                            <input type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                                   id="IsAdult" name="IsAdult" value="1" {{ $person->IsAdult ? 'checked' : '' }}>
                                            <label for="IsAdult" class="ml-2 block text-sm text-gray-700">Is volwassen</label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex items-center">
                                            <input type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                                   id="IsActief" name="IsActief" {{ $person->IsActief ? 'checked' : '' }}>
                                            <label for="IsActief" class="ml-2 block text-sm text-gray-700">Is actief</label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex items-center">
                                            <input type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                                   id="ContactIsActief" name="ContactIsActief" {{ $person->contacts->isNotEmpty() && $person->contacts->first()->IsActief ? 'checked' : '' }}>
                                            <label for="ContactIsActief" class="ml-2 block text-sm text-gray-700">Contact is actief</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flex justify-end">
                                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                        Wijzigen
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>