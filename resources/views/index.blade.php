@extends('layouts.master')

@section('title')
    Shopping List (P4)
@endsection

@push('head')
@endpush

@section('topofpage')
    <h2 id='program_title'>Shopping List</h2>
@endsection

@section('content')
    <form action="/showalist">
	<select name='nameoflist'>
	    <option value="">Please select a list</option>
	    @foreach($listnames as $listname)
	       <option value="{{ $listname['listname'] }}">{{ $listname['listname'] }}</option>
	    @endforeach
	</select>
	    
	<input type="submit" value="Select">
    </form>
	    
@endsection

@push('body')
@endpush