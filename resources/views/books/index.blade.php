<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <ul>
                        @foreach ($books as $book)
                        <li>
                            <div class="flex border-b justify-between items-center">
                            <a href="{{ route('books.show', $book) }}">{{ $book-> title }}</a>
                            <div class="grid grid-cols-2 gap-2 pt-2">
                                <a href="{{ route('books.edit', $book) }}">
                                    Edit
                                </a>
                                <form method="POST" action="{{ route('books.destroy', $book) }}">
                                    @csrf
                                    @method('delete')
                                    <x-danger-button onclick="event.preventDefault(); this.closest('form').submit();">
                                        delete
                                    </x-danger-button>
                                </form>
                            </div>
                            </div>
                        </li>    
                        @endforeach
                    </ul>
                </div>
                {{$books}}
            </div>
        </div>
    </div>
</x-app-layout>