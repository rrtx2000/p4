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

    <form method='POST' action='/updatelistname/{{ $listitemId }}'>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        @foreach ($allItemsARR as $id => $name)
            <input type='checkbox' value='{{ $id }}' name='items[]'
                {{ (isset($listitemsARR) and in_array($name, $listitemsARR)) ? 'CHECKED' : '' }}
            >
            {{ $name }}
            <br>
        @endforeach
        <input type='submit' value='Save changes'>
    </form>

@endsection


@push('body')
@endpush