<div class="flex items-center space-x-4">
    <div class="ml-3 relative flex items-center">
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
        <div class="px-3 py-2 text-sm text-center">
            <div class="text-sm text-gray-800 block">{{ Auth::user()->name }}</div>
            @switch(Auth::user()->role_id)
                @case(1)
                    <div class="text-xs text-gray-400">Administrator</div>
                    @break
                @case(2)
                    <div class="text-xs text-gray-400">Dean</div>
                    @break
                @case(3)
                    <div class="text-xs text-gray-400">Secretary</div>
                    @break
                @case(4)
                    <div class="text-xs text-gray-400">Instructor</div>
                    @break
                @case(5)
                    <div class="text-xs text-gray-400">Student</div>
                    @break
                @case(6)
                    <div class="text-xs text-gray-400">Human Resources</div>
                    @break
                @default
            @endswitch
        </div>
        @endif
        <x-jet-dropdown align="right">
            <x-slot name="trigger">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div>
                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->first_name }}" />
                        </button>
                    </div>
                @else
                <span class="inline-flex rounded-md">
                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium font-poppins rounded-full text-gray-300 hover:text-gray-50 focus:outline-none transition ease-in-out duration-150">
                        {{ Auth::user()->name }}
                        (@switch(Auth::user()->role_id)
                            @case(1)
                                <div class="text-xs">Administrator</div>
                                @break
                            @case(2)
                                <div class="text-xs">Dean</div>
                                @break
                            @case(3)
                                <div class="text-xs">Secretary</div>
                                @break
                            @case(4)
                                <div class="text-xs">Instructor</div>
                                @break
                            @case(5)
                                <div class="text-xs">Student</div>
                                @break
                            @case(6)
                                <div class="text-xs">Human Resources</div>
                                @break
                            @default
                        @endswitch)
                        <svg class="ml-2 -mr-0.5 h-4 w-4 inline transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </span>
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
