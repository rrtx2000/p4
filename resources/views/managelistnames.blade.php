@extends('layouts.master')

@section('title')
    Manage Listnames
@endsection

@push('head')
@endpush

@section('topofpage')
    <h2 id='program_title'>Shopping List - Manage Listnames</h2>
@endsection

@section('content')
    @foreach($listnames as $listname)
        <li>{{ $listname['listname'] }}<a href='deletelistname?id={{ $listname['id'] }}'> Delete</a></li>
    @endforeach
  
    <br/>
    
    <form action="/addlistname">
        Add item: <input type="text" name="listname">
        <input type="submit" value="Add">
    </form>
        
@endsection

@push('body')
@endpush