<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create a new author
        </h2>
    </x-slot>
    
    <x-form>
    <form method="POST" action="{{ action([App\Http\Controllers\AuthorController::class, 'store']) }}">
        @csrf

        <!-- First Name -->
        <div>
            <x-label for="first_name" value="First name" />

            <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" required autofocus />
        </div>

        <!-- Last Name -->
        <div>
            <x-label for="last_name" value="Last name" />

            <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" required />
        </div>

        <!-- Country -->
        <div>
            <x-label for="country" value="Country" />

            <x-input id="country" class="block mt-1 w-full" type="text" name="country" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button class="ml-4">
                Create
            </x-button>
        </div>
    </form>
    </x-form>
</x-app-layout>
