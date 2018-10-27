@extends('layouts.app')

{{-- Content --}}
@section('content')
    
    <div class='row' style="border-bottom:1px solid grey;">
        <div class='col-sm-9 pl-0'>
            <h2>Books Collection</h2>
        </div>
        <div class='col-sm-3 pull-right p-0'>
            <button type='button' class='float-right btn btn-secondary btn-sm mt-1 btn-size'><span class="fas fa-sm fa-plus-circle"></span> &nbsp; Insert Book</button>
        </div>
    </div>

@endsection