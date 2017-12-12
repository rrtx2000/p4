@extends('layouts.master')

@section('title')
    Manage Items
@endsection

@push('head')
@endpush

@section('topofpage')
    <h2 id='program_title'>Shopping List - Manage Items</h2>
@endsection

@section('content')
    
    @foreach($items as $item)
        <li>{{ $item['itemname'] }}<a href='deleteitem?id={{ $item['id'] }}'> Delete</a></li>
    @endforeach
            
    <br/>
    
    <form action="/additem">
        Add item: <input type="text" name="itemname">
        <input type="submit" value="Add">
    </form> 

@endsection

@push('body')
@endpush