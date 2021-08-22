@extends('layouts.administrator')

@section('adminContent')
    <x-admin.head-title adminHeader="Manage Settings"/>
    @livewire('administrator.manage-settings.show')
@endsection
