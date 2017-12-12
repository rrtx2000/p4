@extends('layouts.master')

@section('title')
    Show A List
@endsection

@push('head')
@endpush

@section('topofpage')
    <h2 id='program_title'>Shopping List For {{$nameoflist}}</h2>
@endsection

@section('content')
    show a list for {{$nameoflist}}
@endsection

@push('body')
@endpush