@extends('layouts.administrator')

@section('adminContent')
    <x-admin.head-title adminHeader="Questionairs"/>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-5 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="p-4 lg:w-1/3 sm:w-1/2 w-full">
                    <nav class="flex flex-col sm:items-start sm:text-left -mb-1 space-y-2.5">
                        <a href="{{ route('prf-questionair') }}" class="hover:underline hover:text-blue-500">
                            <span class="bg-indigo-100 text-blue-700 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"></path></svg>
                            </span>Peer rater form questionair
                        </a>
                        <a href="" class="hover:underline hover:text-blue-500">
                            <span class="bg-indigo-100 text-blue-700 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"></path></svg>
                            </span>Student rater form questionair
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
