@extends('layouts.administrator')

@section('adminContent')
    <x-admin.head-title adminHeader="Result"/>
    @livewire('administrator.summary-results.result')

@endsection
