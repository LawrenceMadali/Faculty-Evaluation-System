@extends('layouts.administrator')

@section('adminContent')
    <x-admin.head-title adminHeader="Section"/>
    @livewire('administrator.section')
@endsection
