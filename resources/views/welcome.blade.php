<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <title>University of Rizal System | Faculty Evaluation System</title>
    </head>
    <body class="bg-urs bg-cover bg-bottom bg-no-repeat">
        <div class="h-screen bg-gradient-to-b from-gray-900 to-transparent">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 p-8 sm:block">
                    @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-100 underline">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-100 hover:underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-100 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="flex justify-center text-center text-white pt-32">
                <div class="space-y-20 sm:space-y-28">
                    <div>
                        <h1 class="font-martel text-2xl md:text-4xl tracking-widest font-bold">
                            University of Rizal System
                        </h1>
                            <em>"Nurturing Tomorrow's Noblest"</em>
                    </div>
                    <button class="sm:hidden bg-blue-400 bg-opacity-60 py-2 px-2 rounded-md">
                        <a href="{{ route('login') }}" class="flex items-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path></svg>
                            Login
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </body>
</html>
