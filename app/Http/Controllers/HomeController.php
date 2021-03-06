<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        
        return view('site.home')->with('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Not applicable if using Bootstrap 4 modal.
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book();

        $book->title = trim($request->title);
        $book->author = explode(',', trim($request->author));
        $book->isbn = trim($request->isbn);
        $book->publisher = array('name' => trim($request->name), 'year' => trim($request->year), 'city' => trim($request->city));
        $book->genre = trim($request->genre);
        $book->format = $request->format;
        $book->price = trim($request->price);
        $book->page = trim($request->page);
        $book->description = trim($request->description);

        $book->save();

        // Redirect back to home page
        return redirect()->to('/')->with('success', "Book has been succesfully created");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);

        return view('crud.show')->with('book', $book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);

        return view('crud.update')->with('book', $book);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        
        $book->title = trim($request->title);
        $book->author = explode(',', trim($request->author));
        $book->isbn = trim($request->isbn);
        $book->publisher = array('name' => trim($request->name), 'year' => trim($request->year), 'city' => trim($request->city));
        $book->genre = trim($request->genre);
        $book->format = $request->format;
        $book->price = trim($request->price);
        $book->page = trim($request->page);
        $book->description = trim($request->description);

        $book->save();

        // Redirect back to home page
        return redirect()->to('/')->with('success', "Book has been succesfully updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Object  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);

        $book->delete();

        return back()->with('success', "Book '$book->title' has been successfully deleted");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function report()
    {
        $books = Book::all();

        // MapReduce: Total Price of all books in MongoDB.
        $total = Book::get(['price'])->sum('price');

        return view('crud.report')->with('books',$books)->with('total', $total);
    }
}
