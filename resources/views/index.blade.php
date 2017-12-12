<?php 

    $showit = true;
    $showit = false;
    if ($showit){
	echo("<hr>" . __LINE__ . ") Get contents:"); echo("<pre>" . print_r($_GET, 1) . "</pre>");
	echo("<br>" . __LINE__ . ") Post contents:"); echo("<pre>" . print_r($_POST, 1) . "</pre><hr/>");
	echo("<br>items contents:"); echo("<pre>" . print_r($items, 1) . "</pre>");
	//echo("<br>listnames contents:"); echo("<pre>" . print_r($listnames, 1) . "</pre>");
	exit;
    }
?>

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