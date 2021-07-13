<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> {{ ucfirst(request()->segment(1)) }} | Faculty Evaluation System</title>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div>
            <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
                <div :class="sidebarOpen ? 'block' : 'hidden' " @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>

                <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gradient-to-b from-blue-900 to-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
                    <div class="mt-8">
                    <x-logo.seal name="University of Rizal System"/>
                    </div>

                    <x-admin.sidebar/>
                </div>
                <div class="flex-1 flex flex-col overflow-hidden">
                    <header class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-blue-900">
                        <div class="flex items-center">
                            <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            </button>
                        </div>

                        <div class="flex items-center">
                            <x-admin.circleProfile/>
                        </div>
                    </header>
                    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-blue-100">
                        <div class="container mx-auto px-6 py-8">
                        @yield('adminContent')
                        </div>
                    </main>
                </div>
            </div>
        </div>
            @livewireScripts
        </body>
    </html>

