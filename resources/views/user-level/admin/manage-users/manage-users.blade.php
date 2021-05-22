@extends('layouts.administrator')

@section('adminContent')
    <x-admin.head-title adminHeader="Manage Users"/>
    @livewire('administrator.manage-users.manage-users')
@endsection
