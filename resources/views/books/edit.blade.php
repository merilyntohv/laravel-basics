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
                    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
                        <form method="POST" action="{{ route('books.update', $book) }}">
                            @csrf
                            @method('patch')
                            <div class="flex flex-col my-4">
                            <x-input-label value="Title">Title</x-input-label>
                            <x-text-input name="title" value="{{ old('title', $book->title) }}"></x-text-input>
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>
                
                            <div class="flex flex-col my-4">
                            <x-input-label value="Summary">Summary</x-input-label>
                            <x-text-input name="summary" value="{{ old('summary', $book->summary) }}"> </x-text-input>
                            <x-input-error :messages="$errors->get('summary')" class="mt-2" />
                            </div>
                
                            <div class="flex flex-col my-4">
                            <x-input-label value="Pages">Pages</x-input-label>
                            <x-text-input name="pages" value="{{ old('pages', $book->pages) }}" ></x-text-input>
                            <x-input-error :messages="$errors->get('pages')" class="mt-2" />
                            </div>
                
                            <div class="flex flex-col my-4">
                            <x-input-label value="Year">Release date</x-input-label>
                            <x-text-input name="release_date" value="{{ old('release_date', $book->release_date) }}" ></x-text-input>
                            <x-input-error :messages="$errors->get('release_date')" class="mt-2" />
                            </div>
                
                            <div class="flex flex-col my-4">
                            <x-input-label value="Price">Price</x-input-label>
                            <x-input-error :messages="$errors->get('message')" class="mt-2" />
                            <x-text-input name="price" value="{{ old('price', $book->price) }}" ><p></p></x-text-input>
                            </div>   
                
                            <div class="mt-4 space-x-2">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>
                                <a href="{{ route('books.index') }}">{{ __('Cancel') }}</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>