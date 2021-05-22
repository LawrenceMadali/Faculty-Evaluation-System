@props([
    'model',
    'name',
    'value',
    'id',
    'for'
    ])

<div class="flex items-center text-gray-600">
    <input wire:model="{{ $model }}" class="hidden" id="{{ $id }}" name="{{ $name }}" type="radio" value="{{ $value }}"/>
    <label for="{{ $for }}" class="flex items-center cursor-pointer p-1 w-52 hover:bg-blue-200 rounded">
        <span class="w-4 h-4 inline-block mr-1 rounded-full border border-blue-700"></span>
        {{ $slot }}
    </label>
</div>
