@extends('layouts.administrator')

@section('adminContent')
    <x-admin.head-title adminHeader="Student to peer"/>
    @livewire('administrator.summary-results.student-evaluation')

@endsection
