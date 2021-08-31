<nav x-data="{ open: false }" class="bg-gradient-to-b from-blue-900 to-gray-900 border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-jet-nav-link>
                </div>

                @if (in_array(auth()->user()->role_id, [1, 4]))
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-jet-nav-link href="{{ route('peerRaterForm') }}" :active="request()->routeIs('peerRaterForm')">
                            {{ __('Peer Rater Form') }}
                        </x-jet-nav-link>
                    </div>
                @endif

                @if (in_array(auth()->user()->role_id, [1, 5]))
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-jet-nav-link href="{{ route('studentRaterForm') }}" :active="request()->routeIs('studentRaterForm')">
                            {{ __('Student Rater Form') }}
                        </x-jet-nav-link>
                    </div>
                @endif
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Settings Dropdown -->
                <div class="ml-3 relative flex items-center">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="px-3 py-2 text-sm text-center">
                        <div class="text-sm text-gray-100">{{ Auth::user()->name }}</div>
                        @switch(Auth::user()->role_id)
                            @case(1)
                                <div class="text-xs text-gray-300 block">Administrator</div>
                                @break
                            @case(2)
                                <div class="text-xs text-gray-300 block">Dean</div>
                                @break
                            @case(3)
                                <div class="text-xs text-gray-300 block">Secretary</div>
                                @break
                            @case(4)
                                <div class="text-xs text-gray-300 block">Instructor</div>
                                @break
                            @case(5)
                                <div class="text-xs text-gray-300 block">Student</div>
                                @break
                            @case(6)
                                <div class="text-xs text-gray-300 block">Human Resources</div>
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
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
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
                            @if (in_array(Auth::user()->role_id, [1, 2, 3, 6]))
                                <x-jet-dropdown-link href="{{ route('dashboard') }}">
                                    {{ __('Dashboard') }}
                                </x-jet-dropdown-link>
                            @endif
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

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-jet-responsive-nav-link>

            @if (in_array(Auth::user()->role_id, [1, 4]))
                <x-jet-responsive-nav-link href="{{ route('peerRaterForm') }}" :active="request()->routeIs('peerRaterForm')">
                    {{__('Peer Rater Form')}}
                </x-jet-responsive-nav-link>
            @endif
            @if (in_array(Auth::user()->role_id, [1, 5]))
                <x-jet-responsive-nav-link href="{{ route('studentRaterForm') }}" :active="request()->routeIs('studentRaterForm')">
                    {{__('Student Rater Form')}}
            </x-jet-responsive-nav-link>
            @endif


        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="flex-shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-200">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-400">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                @if (in_array(Auth::user()->role_id, [1, 2, 3, 6]))
                    <x-jet-responsive-nav-link href="{{ route('dashboard') }}">
                        {{ __('Dashboard') }}
                    </x-jet-responsive-nav-link>
                @endif

                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-jet-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
