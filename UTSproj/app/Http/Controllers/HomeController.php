<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;


class HomeController extends Controller
{

    public function showHomePage() {
        $posts = posts::paginate(3); // Paginate with 3 posts per page
        $totalPosts = posts::count(); // Get the total row count
    
        return view('home')->with([
            'posts' => $posts,
            'totalPosts' => $totalPosts
        ]);
    }

    public function showPostDetail(Request $request){
        $post = posts::find($request->id);
        return view('detail')->with([
            'post' => $post
        ]);
    }
    
    public function showPostsOfCategory($id){
        $totalPosts = posts::where('category_id', $id)->get();
    
        return view('category')->with([
            'posts' => $totalPosts
        ]);
    }

    public function showAbout(){
        return view('about');
    }

    public function search(Request $request)
    {
        // Get the search term from the input field
        $searchTerm = $request->input('search');

        // Perform the search query on the 'content' column of the 'posts' table
        $posts = posts::where('content', 'like', '%' . $searchTerm . '%')->get();

        // Return the results (You can modify this to return a view with data)
        return view('posts.index', compact('posts','searchTerm'));
    }


}
