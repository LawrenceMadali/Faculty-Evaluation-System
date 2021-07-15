<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
        @if (auth()->user()->role_id == 4 )
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('release-result')
            </div>
        </div>
        @endif
    </div>
</x-app-layout>
