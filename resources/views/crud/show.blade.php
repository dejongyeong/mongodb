@extends('layouts.app')

<!-- Content -->
@section('content')
    
    <div class='row' style="border-bottom:1px solid #ccc;">
        <div class='col-sm-9 pl-0'>
            <h3>{{$book->title }}</h3>
            <p style='font-size: 0.875rem; text-transform: capitalize;'>Format: {{ $book->format }} | {{ $book->page }} pages</p>
        </div>
        <div class='col-sm-3 pull-right p-0 text-right'>
            <h2>&euro; {{ $book->price }}</h2>
        </div>
    </div>

    <div class='row mt-3'>
        <div class='information'>
            <p> <b>Author0: </b> {{ implode(', ', $book->author) }} </p>
            <p> <b>ISBN 13: </b> {{ $book->isbn }} </p>
            <p> <b>Publisher: </b> {{ $book->publisher['name']}} </p>
            <p><b>Publication Year: </b> {{ $book->publisher['year']}} </p>
            <p><b>Publication City: </b> {{ $book->publisher['city']}} </p>
            <p><b>Genre: </b> {{ $book->genre }} </p>
            <p><b>Description:</b> <br /> {{ $book->description }} </p>
        </div>
    </div>

@endsection