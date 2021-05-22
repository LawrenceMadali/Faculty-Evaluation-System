@extends('layouts.administrator')

@section('adminContent')
    <x-admin.head-title adminHeader="Peer to peer"/>
    @livewire('administrator.summary-results.peer-to-peer-evaluation')

@endsection
