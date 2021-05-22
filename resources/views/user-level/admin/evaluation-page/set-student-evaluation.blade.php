@extends('layouts.administrator')

@section('adminContent')
    <x-admin.head-title adminHeader="Set Student Evaluation"/>
    @livewire('administrator.evaluation-page.set-student-evaluation-page')
@endsection
