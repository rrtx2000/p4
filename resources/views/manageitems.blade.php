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
    <div class="divTable">
        <div class="divTableBody">
            <div class="divTableRow headerrow">
                <div class="divTableCell">Item Name</div>
                <div class="divTableCell">Edit</div>
                <div class="divTableCell">Delete</div>
            </div>

            @foreach($items as $item)
                <div class="divTableRow">
                    <div class="divTableCell">{{ $item['itemname'] }}</div>
                    <div class="divTableCell"><a href='edititem?id={{ $item['id'] }}'> Edit</a></div>
                    <div class="divTableCell"><a href='deleteitem?id={{ $item['id'] }}'> Delete</a></div>
                </div>
            @endforeach
        </div>
    </div>
    <br/>
    
    <form action="/additem">
        Add item: <input type="text" name="itemname">
        <input type="submit" value="Add">
    </form> 

@endsection

@push('body')
@endpush