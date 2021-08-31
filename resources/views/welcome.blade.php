<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <title>University of Rizal System | Faculty Evaluation System</title>
    </head>
    <body>
        <div class="w-full bg-bottom bg-urs sm:bg-urs-side-angle bg-cover">
            <div class="h-screen bg-gray-900 bg-opacity-70">
                <nav class="bg-gradient-to-r from-blue-900 to-transparent shadow">
                    <div class="container px-6 py-4 mx-auto">
                        <div class="flex items-center justify-between">
                            <div>
                                <a href="/">
                                    <img class="h-16" src="/images/seal.png" alt="">
                                </a>
                            </div>
                            <div>
                                @if (Route::has('login'))
                                    @auth
                                            <a href="{{ url('/home') }}" class="text-sm text-gray-100 underline">Home</a>
                                        @else
                                            <a href="{{ route('login') }}" class="text-sm text-gray-100 hover:underline">Login</a>
                                    @endauth
                                @endif
                            </div>
                        </div>
                    </div>
                </nav>

                <div class="flex h-3/6">
                    <div class="m-auto text-center">
                        <h1 class="font-martel text-2xl md:text-4xl text-white tracking-widest font-bold">University of Rizal System</h1>
                        <em class="text-white">"Nurturing Tomorrow's Noblest"</em>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
