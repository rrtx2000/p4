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
      <div class="divTable">
        <div class="divTableBody">
            <div class="divTableRow headerrow">
                <div class="divTableCell">List Name</div>
                <div class="divTableCell">Edit</div>
                <div class="divTableCell">Delete</div>
            </div>

            @foreach($listnames as $listname)
                <div class="divTableRow">
                    <div class="divTableCell">{{ $listname['listname'] }}</div>
                    <div class="divTableCell"><a href='editlistname?id={{ $listname['id'] }}'> Edit</a></div>
                    <div class="divTableCell"><a href='deletelistname?id={{ $listname['id'] }}'> Delete</a></div>
                </div>
            @endforeach
        </div>
    </div>
    <br/>
    
    <form action="/addlistname">
        Add List Name: <input type="text" name="listname">
        <input type="submit" value="Add">
    </form>
        
@endsection

@push('body')
@endpush