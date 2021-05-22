@extends('layouts.administrator')

@section('adminContent')
    <x-admin.head-title adminHeader="Dashboard"/>
    @livewire('administrator.dashboard')
@endsection
