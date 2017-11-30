@extends('layouts.master')

@section('title')
    Shopping List (P4)
@endsection

@push('head')
@endpush

@section('content')
    <h1 class='mycenter'>Alan Martinson - P4 For CSCI E15</h1>
    <h2 id='program_title'>Shopping List</h2>
    
    <!–– display the shopping list here ––>
            @foreach($items as $item)
                <li>{{ $item['itemname'] . ' - Qty: ' . $item['quantity']  . ' - include: ' . $item['include'] }}</li>
            @endforeach
@endsection

@push('body')
@endpush