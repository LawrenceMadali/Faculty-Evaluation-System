@extends('layouts.administrator')

@section('adminContent')
    <x-admin.head-title adminHeader="Evaluator"/>
    @livewire('administrator.evaluator')
@endsection
