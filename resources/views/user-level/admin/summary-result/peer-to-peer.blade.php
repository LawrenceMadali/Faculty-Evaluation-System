@extends('layouts.administrator')

@section('adminContent')
    <x-admin.head-title adminHeader="Peer Evaluation Result"/>
    @livewire('administrator.summary-results.peer-to-peer-evaluation')

@endsection
