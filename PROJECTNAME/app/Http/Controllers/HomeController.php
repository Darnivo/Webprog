<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Publisher;

class HomeController extends Controller
{
    //
    public function showHomePage(){
        $books = Book::all();
        return view('home')->with('books', $books);
    }

    public function getBookDetail(Request $request){
        $BookFind = Book::find($request->id);
        // $FoundBook = BookCategory::where('book_id', 'like', "%$BookFind->id%")->get();
        return view('detail')->with('book', $BookFind);
    }

    public function getBooksOfCategory(Request $request){
        $query = $request->search;
        $books = BookCategory::where('category_id', 'like', "%$query%")->get();
        return view('category')->with('books', $books);
    }

    public function showPublishers(){
        $publishers = Publisher::all();
        return view('publisher')->with('publishers', $publishers);
    }

    public function showPublisherDetail(Request $request){
        $publisher = Publisher::find($request->id);
        return view('publisherdetail')->with('publishers',$publisher);
    }

    public function showContactPage(){
        return view('contact');
    }

}
