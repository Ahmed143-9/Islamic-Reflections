<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function post()
    {
        // Logic for handling post page
        // This could include fetching posts, categories, etc.
        
        // Example: return view('posts.index', compact('posts', 'categories'));
        return view('post'); // Adjust as needed
    }
}
