<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class BookController extends Controller
{
    //

    public function index(){
    $books = Book::all();
    return view('admin.books.allBooks',[
        'books'=>$books
    ]);
    }

    public function store(Request $request){
        $formData = $request->validate([
            'book_name'=>'string|required',
            'Author'=>'string|required',
            'subject'=>'string|required',
            'IdNo'=>'string|required',
            'class'=>'string|required',
            'section'=>'string|required',
            'published_year'=>'string|required'
        ]);

        Book::create($formData);

        return redirect('/admin/books')->with('message','book recorded succesfully');
    }

    public function create(){
        return view('admin.books.addBook');
    }

    public function update(Request $request,Book $book){
        $formData = $request->validate([
            'book_name'=>'string',
            'Author'=>'string',
            'subject'=>'string',
            'IdNo'=>'string',
            'class'=>'string',
            'section'=>'string',
            'published_year'=>'string'
        ]);

        $book->update($formData);

        return redirect('/admin/books')->with('message','book updated succesfully');
    }

    public function edit(Book $book){
        return view('admin.books.editBook',[
            'book'=>$book
        ]);
    }


    public function destroy(Book $book){
        $book->delete();
        return back()->with('message','book deleted successfully');
    }
}
