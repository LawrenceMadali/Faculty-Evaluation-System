@extends('layouts.administrator')

@section('adminContent')
    <x-admin.head-title adminHeader="Manage Result"/>
    @livewire('administrator.manage-results.manage-result')

@endsection
