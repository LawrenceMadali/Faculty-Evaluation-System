@props(['name'])

<a href="{{ route('home') }}" class="flex items-center text-center px-3">
    <img src="/images/Seal.png"
        class="h-14"
        alt="University Logo">
    <h2 class="font-medium text-2xl text-gray-100">
        {{ $name }}
    </h2>
</a>
