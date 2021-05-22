@extends('layouts.administrator')

@section('adminContent')
    <x-admin.head-title adminHeader="Questionair"/>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-10 mx-auto">
            <div class="flex flex-wrap -m-4 space-x-4">
                <div class="bg-white rounded-md p-4 lg:w-1/5 sm:w-1/2 w-full">
                    <h2 class="font-bold title-font tracking-widest mb-2 text-center ">Questionair Forms</h2>
                    <hr>
                    <nav class="flex flex-col sm:items-start sm:text-left text-center items-center">
                        <a href="{{ route('prf-questionair') }}" class="mt-2 p-2 w-full rounded-md hover:bg-gray-200 hover:text-gray-700"> Peer Rater Form </a>
                        <a href="{{ route('srf-questionair') }}" class="p-2 w-full rounded-md hover:bg-gray-200 hover:text-gray-700"> Student Rater Form </a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
