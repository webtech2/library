<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Create a new book') }}
        </h2>
    </x-slot>
    
    <x-form>
    <form method="POST" action="{{ action([App\Http\Controllers\BookController::class, 'store']) }}">
        @csrf

        <!-- Title -->
        <div>
            <x-label for="title" value="{{ __('messages.Title') }}" />

            <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />

            <x-validation-error class="mb-4" :errors="$errors" title="title"/>            
        </div>

        <!-- Year -->
        <div>
            <x-label for="year" value="{{ __('messages.Year') }}" />

            <x-input id="year" class="block mt-1 w-full" type="number" name="year" :value="old('year')" required />

            <x-validation-error class="mb-4" :errors="$errors" title="year"/>            
        </div>

        <!-- Abstract -->
        <div>
            <x-label for="abstract" value="{{ __('messages.Abstract') }}" />

            <x-textarea id="abstract" class="block mt-1 w-full" type="text" name="abstract" :value="old('abstract')" />

            <x-validation-error class="mb-4" :errors="$errors" title="abstract"/>            
        </div>

        <!-- Author -->
        <div>
            <x-label for="author" value="{{ __('messages.Author') }}" />
            
            <x-multi-select id="author" class="block mt-1 w-full" name="author[]" :list='$list' :selected="old('author')" text="{{ __('messages.Select authors') }}"/>

            <x-validation-error class="mb-4" :errors="$errors" title="author"/>            
        </div>
        
        <!-- Genre -->
        <div>
            <x-label for="genre" value="{{ __('messages.Genre') }}" />
            
            <x-select id="genre" class="block mt-1 w-full" name="genre" :list='$genres' :value="old('genre')"/>

            <x-validation-error class="mb-4" :errors="$errors" title="genre"/>            
        </div>
        
        <div class="flex items-center justify-end mt-4">
            <x-button class="ml-4">
                {{ __('messages.Create') }}
            </x-button>
        </div>
    </form>
    </x-form>
</x-app-layout>
