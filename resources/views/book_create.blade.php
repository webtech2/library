<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create a new book
        </h2>
    </x-slot>
    
    <x-form>
    <form method="POST" action="{{ action([App\Http\Controllers\BookController::class, 'store']) }}">
        @csrf

        <!-- Title -->
        <div>
            <x-label for="title" value="Title" />

            <x-input id="title" class="block mt-1 w-full" type="text" name="title" required autofocus />
        </div>

        <!-- Year -->
        <div>
            <x-label for="year" value="Year" />

            <x-input id="year" class="block mt-1 w-full" type="number" name="year" required />
        </div>

        <!-- Abstract -->
        <div>
            <x-label for="abstract" value="Abstract" />

            <x-textarea id="abstract" class="block mt-1 w-full" type="text" name="abstract"  />
        </div>

        <!-- Author -->
        <div>
            <x-label for="author" value="Author" />
            
            <x-multi-select id="author" class="block mt-1 w-full" name="author[]" :list='$list'/>
        </div>
        
        <!-- Genre -->
        <div>
            <x-label for="genre" value="Genre" />
            
            <x-select id="genre" class="block mt-1 w-full" name="genre" :list='$genres'/>
        </div>
        
        <div class="flex items-center justify-end mt-4">
            <x-button class="ml-4">
                Create
            </x-button>
        </div>
    </form>
    </x-form>
</x-app-layout>
