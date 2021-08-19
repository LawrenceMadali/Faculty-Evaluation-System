@extends('layouts.administrator')

@section('adminContent')
    <x-admin.head-title adminHeader="Manage Accounts"/>

    @livewire('administrator.manage-users.manage-accounts')
@endsection
