@extends('layouts.administrator')

@section('adminContent')
<div class="flex items-center">
    @if (in_array(auth()->user()->role_id, [1, 2, 3]))
    <button class="px-2 py-1 text-gray-700 hover:text-blue-900 hover:bg-blue-300 rounded">
    <a href="{{ route('manage-reports') }}">
        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M15.707 15.707a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414l5-5a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 010 1.414zm-6 0a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414l5-5a1 1 0 011.414 1.414L5.414 10l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
    </a>
    </button>
    @endif
    <x-admin.head-title adminHeader="Report"/>
</div>

    @livewire('administrator.manage-reports.report')
@endsection
