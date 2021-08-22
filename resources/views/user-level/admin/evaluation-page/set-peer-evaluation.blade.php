@extends('layouts.administrator')

@section('adminContent')
    <x-admin.head-title adminHeader="Set Peer Evaluation"/>
    @livewire('administrator.evaluation-page.set-peer-evaluation-page')
@endsection
