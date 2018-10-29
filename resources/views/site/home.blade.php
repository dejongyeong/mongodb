@extends('layouts.app')

{{-- Content --}}
@section('content')

    <!-- Display Session Message -->
    @if(session()->has('success'))
        <div class='alert alert-success alert-dismissible fade show' role='alert'>
            {{ session()-> get('success') }}
            <button tye='button' class='close' data-dismiss='alert' aria-label='close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>
    @endif
    
    <div class='row' style="border-bottom:1px solid #ccc;">
        <div class='col-sm-9 pl-0'>
            <h2>Books Collection</h2>
        </div>
        <div class='col-sm-3 pull-right p-0'>
            <button type='button' class='float-right btn btn-secondary btn-sm mt-1 btn-size'><span class="fas fa-sm fa-plus-circle"></span> &nbsp; Insert Book</button>
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
                            <th scope='col'>Title</th>
                            <th scope='col'>ISBN</th>
                            <th scope='col'>Publisher Name</th>
                            <th scope='col' style='width:100px;'>Year</th>
                            <th scope='col' class='text-right'>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td><a href='#'>{{ $book->title }} </a></td>
                                <td>{{ $book->isbn }} </td>
                                <td>{{ $book->publisher['name'] }}</td>
                                <td>{{ $book->publisher['year'] }}</td>
                                <td class='text-right'>
                                    <a href="#" class="btn btn-outline-info btn-sm pull-right"> <i class="fas fa-sm fa-edit"></i> Edit</a>
                                    
                                    <!-- Delete -->
                                    <form method='post' action="{!! route('book.destroy', [$book->_id]) !!} ">
                                        {!! csrf_field() !!}
                                        {!! method_field('DELETE') !!}
                                        <button class="btn btn-outline-danger btn-sm pull-right" onclick="return confirm('Are you sure you want to delete this book item?')"> 
                                            <i class="fas fa-sm fa-trash"></i> Delete
                                        </button>
                                    <form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

@endsection