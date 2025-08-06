<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\like;
use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // Show all posts (Start Reading page)
    public function index(Request $request)
    {
        $category = $request->get('category');
        $search = $request->get('search');
        
        $query = Post::with('user')
            ->where('is_published', true)
            ->orderBy('created_at', 'desc');
        
        if ($category) {
            $query->where('category', $category);
        }
        
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }
        
        $posts = $query->paginate(10);
        $categories = Post::getCategories();
        
        // return view('posts.index', compact('posts', 'categories', 'category', 'search'));
    }

    // Show single post
    public function show($slug)
    {
        $post = Post::with(['user', 'comments.user'])
            ->where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();
        
        // Increment views
        $post->incrementViews();
        
        $relatedPosts = Post::where('category', $post->category)
            ->where('id', '!=', $post->id)
            ->where('is_published', true)
            ->limit(3)
            ->get();
        
        return view('posts.show', compact('post', 'relatedPosts'));
    }

    // Writer dashboard - show writer's posts
    public function dashboard()
    {
        $this->middleware('auth');
        
        $posts = Auth::user()->posts()
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        
        return view('posts.dashboard', compact('posts'));
    }

    // Show create post form
    public function create()
    {
        $this->middleware('auth');
        $categories = Post::getCategories();
        return view('posts.create', compact('categories'));
    }

    // Store new post
    public function store(Request $request)
    {
        $this->middleware('auth');
        
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|in:' . implode(',', array_keys(Post::getCategories())),
            'content' => 'required|string|min:100',
        ]);

        $post = Post::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'category' => $request->category,
            'content' => $request->content,
            'is_published' => true,
        ]);

        return redirect()->route('posts.show', $post->slug)
            ->with('success', 'Your post has been published successfully!');
    }

    // Show edit form
    public function edit(Post $post)
    {
        $this->middleware('auth');
        
        if ($post->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        
        $categories = Post::getCategories();
        return view('posts.edit', compact('post', 'categories'));
    }

    // Update post
    public function update(Request $request, Post $post)
    {
        $this->middleware('auth');
        
        if ($post->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|in:' . implode(',', array_keys(Post::getCategories())),
            'content' => 'required|string|min:100',
        ]);

        $post->update([
            'title' => $request->title,
            'category' => $request->category,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.show', $post->slug)
            ->with('success', 'Post updated successfully!');
    }

    // Delete post
    public function destroy(Post $post)
    {
        $this->middleware('auth');
        
        if ($post->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        
        $post->delete();
        
        return redirect()->route('posts.dashboard')
            ->with('success', 'Post deleted successfully!');
    }

    // Toggle like
    public function toggleLike(Post $post)
    {
        $this->middleware('auth');
        
        $like = Like::where('user_id', Auth::id())
            ->where('post_id', $post->id)
            ->first();
        
        if ($like) {
            $like->delete();
            $post->decrement('likes_count');
            $liked = false;
        } else {
            Like::create([
                'user_id' => Auth::id(),
                'post_id' => $post->id
            ]);
            $post->increment('likes_count');
            $liked = true;
        }
        
        return response()->json([
            'liked' => $liked,
            'likes_count' => $post->fresh()->likes_count
        ]);
    }

    // Store comment
    public function storeComment(Request $request, Post $post)
    {
        $this->middleware('auth');
        
        $request->validate([
            'content' => 'required|string|min:5|max:1000'
        ]);

        $comment = Comment::create([
            'user_id' => Auth::id(),
            'post_id' => $post->id,
            'content' => $request->content
        ]);

        $post->increment('comments_count');

        return back()->with('success', 'Comment added successfully!');
    }
}