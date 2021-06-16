@extends('layouts.administrator')

@section('adminContent')
    <x-admin.head-title adminHeader="Student Evaluation Result"/>
    @livewire('administrator.summary-results.student-evaluation')

@endsection
