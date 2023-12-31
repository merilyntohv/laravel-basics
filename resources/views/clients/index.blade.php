<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <ul>
                        @foreach ($clients as $client)
                        <li>
                            <div class="flex border-b justify-between items-center">
                                <div class="flex flex-col ">                                   
                                <p>{{ $client->first_name }} {{ $client->last_name }}</p>
                                <p>{{ $client->username }}</p>
                                <p>{{ $client->email }}</p>
                                <p>{{ $client->address }}</p>
                            </div>    
                            <div class="grid grid-cols-2 gap-2 pt-2">
                                <button>edit</button>
                                <x-danger-button class="text-red-500">delete</x-danger-button>
                            </div>
                            </div>
                        </li>    
                        @endforeach
                    </ul>
                </div>
                {{$clients}}
            </div>
        </div>
    </div>
</x-app-layout>