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
    Show a list for {{$nameoflist}}:
    
    @foreach($listitemsARR as $listitem)
        <li>{{ $listitem }} </li>
    @endforeach
    
    <br/>
    All items<br/>

    @foreach($allItemsARR as $id => $allitem)
        <li>{{ $allitem }}</li>
    @endforeach
    
    <hr/>
    
    @foreach ($allItemsARR as $id => $name)
        <input
            type='checkbox'
            value='{{ $id }}'
            name='items[]'
            {{ (isset($listitemsARR) and in_array($name, $listitemsARR)) ? 'CHECKED' : '' }}
        >
        {{ $name }} <br>
    @endforeach


@endsection


@push('body')
@endpush