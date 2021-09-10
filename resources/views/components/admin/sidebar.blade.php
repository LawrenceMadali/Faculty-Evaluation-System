<nav class="flex flex-col space-y-2 mt-10">
    <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
        <svg class="inline w-5 h-5 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
        {{__('Dashboard')}}
    </x-jet-responsive-nav-link>

    @if (in_array(auth()->user()->role_id, [1, 2, 3]))
        <x-jet-dropdown>
            <x-slot name="trigger">
                <button type="button" class="w-full flex items-center px-3 py-2 border-l-4 border-transparent text-base font-medium text-gray-200 hover:text-gray-800 hover:bg-blue-100 hover:border-gray-300 focus:outline-none focus:text-blue-800 focus:bg-blue-100 focus:border-blue-400 transition duration-150 ease-in-out">
                    <svg class="inline w-5 h-5 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    {{__('Set Evaluation')}}
                    <svg class="inline ml-auto w-5 h-5 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </x-slot>
            <x-slot name="content">
                <x-jet-dropdown-link href="{{ route('set-peer-evaluation') }}">
                    {{ __('Set Peer Evaluation') }}
                </x-jet-dropdown-link>

                <x-jet-dropdown-link href="{{ route('set-student-evaluation') }}">
                    {{ __('Set Student Evaluation') }}
                </x-jet-dropdown-link>
            </x-slot>
        </x-jet-dropdown>
    @endif

    @if (in_array(auth()->user()->role_id, [2, 6]))
        <x-jet-dropdown>
            <x-slot name="trigger">
                <button type="button" class="w-full flex items-center px-3 py-2 border-l-4 border-transparent text-base font-medium text-gray-200 hover:text-gray-800 hover:bg-blue-100 hover:border-gray-300 focus:outline-none focus:text-blue-800 focus:bg-blue-100 focus:border-blue-400 transition duration-150 ease-in-out">
                    <svg class="inline w-5 h-5 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                    {{__('Summary Result')}}
                    <svg class="inline ml-auto w-5 h-5 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </x-slot>
            <x-slot name="content">
                <x-jet-dropdown-link href="{{ route('peer-to-peer-evaluation-result') }}">
                    {{ __('Peer Evaluation Result') }}
                </x-jet-dropdown-link>

                <x-jet-dropdown-link href="{{ route('student-evaluation-result') }}">
                    {{ __('Student Evaluation Result') }}
                </x-jet-dropdown-link>
            </x-slot>
        </x-jet-dropdown>
    @endif

    <hr class="my-6" />

    <x-jet-dropdown>
        <x-slot name="trigger">
            <button type="button" class="w-full flex items-center px-3 py-2 border-l-4 border-transparent text-base font-medium text-gray-200 hover:text-gray-800 hover:bg-blue-100 hover:border-gray-300 focus:outline-none focus:text-blue-800 focus:bg-blue-100 focus:border-blue-400 transition duration-150 ease-in-out">
                <svg class="inline mr-4 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                {{__('System Management')}}
                <svg class="inline ml-auto w-5 h-5 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
        </x-slot>
        <x-slot name="content">
            @if (in_array(auth()->user()->role_id,[1, 2, 3]))
                <x-jet-dropdown-link href="{{ route('manage-accounts') }}">
                    {{ __('Manage Accounts') }}
                </x-jet-dropdown-link>

                <x-jet-dropdown-link href="{{ route('questionair') }}">
                    {{ __('Manage Questionnairs') }}
                </x-jet-dropdown-link>
            @endif

            @if (in_array(auth()->user()->role_id,[1, 2, 3]))
            <x-jet-dropdown-link href="{{ route('manage-reports') }}">
                {{ __('Manage Reports') }}
            </x-jet-dropdown-link>
            @endif

            @if (auth()->user()->role_id == 6)
            <x-jet-dropdown-link href="{{ route('report') }}">
                {{ __('Manage Reports') }}
            </x-jet-dropdown-link>
            @endif

            @if (in_array(auth()->user()->role_id,[1, 2, 3]))
                @if (auth()->user()->role_id == 2)
                    <x-jet-dropdown-link href="{{ route('manage-results') }}">
                        {{ __('Manage Results') }}
                    </x-jet-dropdown-link>
                @endif
                <x-jet-dropdown-link href="{{ route('manage-settings') }}">
                    {{ __('Manage Settings') }}
                </x-jet-dropdown-link>
            @endif

        </x-slot>
    </x-jet-dropdown>
</nav>
