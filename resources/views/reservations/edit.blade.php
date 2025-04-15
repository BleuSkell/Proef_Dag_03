<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reservatie bewerken') }}
        </h2>
    </x-slot>

    @if ($errors->any())
        <div class="bg-red-500 text-white p-4 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('reservations.update', $reservation->Reservation_id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block mb-1">Baannummer:</label>
                        <select name="Lane_id" class="border px-2 py-1 w-full">
                            @foreach ($lanes as $lane)
                                <option value="{{ $lane->Id }}" 
                                    {{ $reservation->ReservationLane_id == $lane->Id ? 'selected' : '' }}>
                                    {{ $lane->Number }} ({{ $lane->HasFence ? 'Met hekjes' : 'Zonder hekjes' }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1">Pakketoptie:</label>
                        <select name="PackageOption_id" class="border px-2 py-1 w-full">
                            @foreach ($packageOptions as $packageOption)
                                <option value="{{ $packageOption->id }}" 
                                    {{ $reservation->ReservationPackageOption_id == $packageOption->id ? 'selected' : '' }}>
                                    {{ $packageOption->Name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Opslaan</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
