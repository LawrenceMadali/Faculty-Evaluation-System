<div class="flex items-center space-x-4">
    <div class="ml-3 relative flex items-center">
        <div class="px-3 py-2 text-sm text-center">
            <div class="text-sm text-gray-800 block">{{ Auth::user()->name }}</div>
            <div class="text-sm text-gray-800 block">
                @switch(Auth::user()->role_id)
                    @case(1)
                        <div class="text-xs text-gray-400 block">Administrator</div>
                        @break
                    @case(2)
                        <div class="text-xs text-gray-400 block">Dean</div>
                        @break
                    @case(3)
                        <div class="text-xs text-gray-400 block">Secretary</div>
                        @break
                    @case(4)
                        <div class="text-xs text-gray-400 block">Instructor</div>
                        @break
                    @case(5)
                        <div class="text-xs text-gray-400 block">Student</div>
                        @break
                    @default
                @endswitch
            </div>
        </div>
        <x-jet-dropdown align="right">
            <x-slot name="trigger">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div>
                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </button>
                    </div>
                @endif
            </x-slot>

            <x-slot name="content">
                <!-- Account Management -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Manage Account') }}
                </div>

                {{-- <x-jet-dropdown-link href="{{ route('dashboard') }}">
                    {{ __('Dashboard') }}
                </x-jet-dropdown-link> --}}

                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                    {{ __('Profile') }}
                </x-jet-dropdown-link>

                <div class="border-t border-gray-100"></div>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-jet-dropdown-link href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-jet-dropdown-link>
                </form>
            </x-slot>
        </x-jet-dropdown>
    </div>
</div>
