<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Book info') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <p class='font-semibold text-xl'>{{ $book->title }}</p>
                <p class='text-lg'><strong class='font-semibold'>Genre:</strong> {{ $book->genre->name}}</p>
                <p class='text-lg'><strong class='font-semibold'>Year:</strong> {{ $book->year }}</p>
                @isset($book->abstract)
                <p class='text-lg'><strong class='font-semibold'>Abstract:</strong> {{ $book->abstract }}</p>
                @endisset
                @if (count($book->authors) > 1)
                <p class='text-lg'><strong class='font-semibold'>Authors:</strong> 
                @else    
                <p class='text-lg'><strong class='font-semibold'>Author:</strong> 
                @endif
                @foreach ($book->authors as $author)
                    {{ $author->first_name }} {{ $author->last_name }} @isset($author->country) ({{ $author->country }}) @endisset
                @endforeach
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
