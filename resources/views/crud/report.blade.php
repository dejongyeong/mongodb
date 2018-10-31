@extends('layouts.app')

<!-- Contents -->
@section('content')

    <div class='row' style="border-bottom:1px solid #ccc;">
        <div class='col-sm-9 pl-0'>
            <h3>Books Collection Report
                <span style='font-size: 0.875rem;'>&nbsp; By Total Price</span>
            </h3>
        </div>
        <div class='col-sm-3 pull-right p-0 text-right'>
            <h2>&euro; {{ $total }}</h2>
        </div>
    </div>

    <div class='row mt-3'>
        @if($books->isEmpty())
            <div class='info'>
                <div class='info-message text-center'>
                    <h3>There is nothing here!!!</h3>
                    <h5 style='margin-top: 15px;'>Please insert a new book details into Book Collection</h5>
                </div>
            </div>
        @else
            <div class='table-responsive'>
                <table class='table table-striped table-hover'>
                    <thead>
                        <tr>
                            <th scope='col' style='width: 300px;'>ID</th>
                            <th scope='col'>Title</th>
                            <th scope='col'>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td>{{ $book->_id }}</td>
                                <td>{{ $book->title }} </td>
                                <td>{{ $book->price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
    
@endsection