<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\movies;

class pageController extends Controller
{
    //
    public function showHomePage(){
        $movies = movies::all();
        return view('home')->with('NGR',$movies);
    }

    public function showMovByLoc(Request $request){
        $search = $request->search;
        $movies = movies::where('Location',$search)->get();
        return view('byloc')->with('res',$movies);
    }

    public function showComing(){
        $movies = movies::where('Release-date', '>', '2024-10-29')->get();
        return view('coming')->with('res',$movies);
    }

    public function showAbout(){
        return view('about');
    }

}
