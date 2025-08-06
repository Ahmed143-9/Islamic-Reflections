{{-- <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }} - Islamic Reflections</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Social Media Meta Tags -->
    <meta property="og:title" content="{{ $post->title }}">
    <meta property="og:description" content="{{ $post->excerpt }}">
    <meta property="og:url" content="{{ $post->share_url }}">
    <meta property="og:type" content="article">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $post->title }}">
    <meta name="twitter:description" content="{{ $post->excerpt }}">
</head>
<body>
    <!-- Header Section -->
    <header class="main-header">
        <nav class="navbar">
            <div class="nav-container">
                <div class="logo">
                    <i class="fas fa-mosque"></i>
                    <span>Islamic Reflections</span>
                </div>
                <ul class="nav-menu">
                    <li><a href="/" class="nav-link">Home</a></li>
                    <li><a href="{{ route('posts.index') }}" class="nav-link">Start Reading</a></li>
                    <li><a href="/quran" class="nav-link">Quran</a></li>
                    <li><a href="/hadith" class="nav-link">Hadith</a></li>
                    <li><a href="/users" class="nav-link">Writers</a></li>
                    @auth
                        <li><a href="{{ route('posts.create') }}" class="nav-link">Write Post</a></li>
                        <li><a href="{{ route('posts.dashboard') }}" class="nav-link">My Posts</a></li>
                        <li><a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                    @else
                        <li><a href="/joinus" class="nav-link">Join Us</a></li>
                    @endauth
                </ul>
                <div class="mobile-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>

    <!-- Breadcrumb -->
    <section class="breadcrumb-section">
        <div class="container">
            <nav class="breadcrumb">
                <a href="/">Home</a>
                <i class="fas fa-chevron-right"></i>
                <a href="{{ route('posts.index') }}">Start Reading</a>
                <i class="fas fa-chevron-right"></i>
                <a href="{{ route('posts.index', ['category' => $post->category]) }}">{{ $post->category_name }}</a>
                <i class="fas fa-chevron-right"></i>
                <span>{{ Str::limit($post->title, 50) }}</span>
            </nav>
        </div>
    </section>

    <!-- Post Content -->
    <article class="post-article">
        <div class="container">
            <div class="article-container">
                <!-- Post Header -->
                <header class="article-header">
                    <div class="category-badge">
                        <i class="fas fa-tag"></i>
                        {{ $post->category_name }}
                    </div>
                    
                    <h1 class="article-title">{{ $post->title }}</h1>
                    
                    <div class="article-meta">
                        <div class="author-info">
                            <div class="author-avatar">
                                <i class="fas fa-user-circle"></i>
                            </div>
                            <div class="author-details">
                                <h4 class="author-name">
                                    <a href="{{ route('posts.writer-profile', $post->user->id) }}">
                                        {{ $post->user->pen_name ?? $post->user->name }}
                                    </a>
                                </h4>
                                <p class="author-background">{{ ucfirst(str_replace('_', ' ', $post->user->islamic_background ?? 'Writer')) }}</p>
                                @if($post->user->bio)
                                    <p class="author-bio">{{ Str::limit($post->user->bio, 100) }}</p>
                                @endif
                            </div>
                        </div>
                        
                        <div class="post-info">
                            <div class="post-stats">
                                <span><i class="fas fa-calendar"></i> {{ $post->formatted_date }}</span>
                                <span><i class="fas fa-clock"></i> {{ $post->reading_time }}</span>
                                <span><i class="fas fa-eye"></i> {{ $post->views_count }} views</span>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- Post Content -->
                <div class="article-content">
                    {!! nl2br(e($post->content)) !!}
                </div>

                <!-- Post Actions -->
                <div class="post-actions">
                    <div class="action-buttons">
                        <!-- Like Button -->
                        <button class="action-btn like-btn {{ $isLiked ? 'liked' : '' }}" 
                                data-post-id="{{ $post->id }}" id="likeBtn">
                            <i class="fas fa-heart"></i>
                            <span class="count" id="likeCount">{{ $post->likes_count }}</span>
                            <span class="label">{{ $isLiked ? 'Liked' : 'Like' }}</span>
                        </button>

                        <!-- Comment Button -->
                        <a href="#comments" class="action-btn comment-btn">
                            <i class="fas fa-comment"></i>
                            <span class="count">{{ $post->comments_count }}</span>
                            <span class="label">Comment</span>
                        </a>

                        <!-- Share Button -->
                        <div class="share-dropdown">
                            <button class="action-btn share-btn" id="shareBtn">
                                <i class="fas fa-share"></i>
                                <span class="label">Share</span>
                            </button>
                            <div class="share-menu" id="shareMenu">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($post->share_url) }}" 
                                   target="_blank" class="share-option">
                                    <i class="fab fa-facebook"></i>
                                    Facebook
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode($post->share_url) }}&text={{ urlencode($post->title) }}" 
                                   target="_blank" class="share-option">
                                    <i class="fab fa-twitter"></i>
                                    Twitter
                                </a>
                                <a href="https://wa.me/?text={{ urlencode($post->title . ' - ' . $post->share_url) }}" 
                                   target="_blank" class="share-option">
                                    <i class="fab fa-whatsapp"></i>
                                    WhatsApp
                                </a>
                                <button class="share-option" onclick="copyToClipboard('{{ $post->share_url }}')">
                                    <i class="fas fa-copy"></i>
                                    Copy Link
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Author Actions -->
                    @auth
                        @if(Auth::id() === $post->user_id)
                            <div class="author-actions">
                                <a href="{{ route('posts.edit', $post) }}" class="edit-btn">
                                    <i class="fas fa-edit"></i>
                                    Edit Post
                                </a>
                                <form method="POST" action="{{ route('posts.destroy', $post) }}" 
                                      onsubmit="return confirm('Are you sure you want to delete this post?')" 
                                      style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-btn">
                                        <i class="fas fa-trash"></i>
                                        Delete Post
                                    </button>
                                </form>
                            </div>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </article>

    <!-- Comments Section -->
    <section class="comments-section" id="comments">
        <div class="container">
            <div class="comments-container">
                <h3 class="comments-title">
                    <i class="fas fa-comments"></i>
                    Comments ({{ $post->comments_count }})
                </h3>

                <!-- Comment Form -->
                @auth
                    <form method="POST" action="{{ route('posts.comment', $post) }}" class="comment-form">
                        @csrf
                        <div class="form-group">
                            <textarea name="content" placeholder="Share your thoughts... (Remember to maintain Islamic etiquette)" 
                                      rows="4" required>{{ old('content') }}</textarea>
                            @error('content')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="submit-comment-btn">
                            <i class="fas fa-paper-plane"></i>
                            Post Comment
                        </button>
                    </form>
                @else
                    <div class="login-prompt">
                        <p>Please <a href="/joinus">login</a> to leave a comment.</p>
                    </div>
                @endauth

                <!-- Comments List -->
                <div class="comments-list">
                    @forelse($post->comments as $comment)
                        <div class="comment-item">
                            <div class="comment-author">
                                <div class="comment-avatar">
                                    <i class="fas fa-user-circle"></i>
                                </div>
                                <div class="comment-info">
                                    <h5>{{ $comment->user->pen_name ?? $comment->user->name }}</h5>
                                    <span class="comment-date">{{ $comment->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                            <div class="comment-content">
                                {{ $comment->content }}
                            </div>
                        </div>
                    @empty
                        <div class="no-comments">
                            <i class="fas fa-comment-slash"></i>
                            <p>No comments yet. Be the first to share your thoughts!</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <!-- Related Posts -->
    @if($relatedPosts->count() > 0)
        <section class="related-posts">
            <div class="container">
                <h3 class="section-title">
                    <i class="fas fa-book-open"></i>
                    Related Articles
                </h3>
                <div class="related-posts-grid">
                    @foreach($relatedPosts as $relatedPost)
                        <article class="related-post-card">
                            <div class="related-post-category">
                                {{ $relatedPost->category_name }}
                            </div>
                            <h4>
                                <a href="{{ route('posts.show', $relatedPost->slug) }}">
                                    {{ $relatedPost->title }}
                                </a>
                            </h4>
                            <p>{{ $relatedPost->excerpt }}</p>
                            <div class="related-post-meta">
                                <span>By {{ $relatedPost->user->pen_name ?? $relatedPost->user->name }}</span>
                                <span>{{ $relatedPost->reading_time }}</span>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Islamic Quote -->
    <section class="islamic-quote">
        <div class="container">
            <div class="quote-card">
                <i class="fas fa-star-and-crescent"></i>
                <div class="arabic-text">
                    وَمَا أُوتِيتُم مِّنَ الْعِلْمِ إِلَّا قَلِيلًا
                </div>
                <div class="translation">
                    "And you have not been given of knowledge except a little"
                </div>
                <div class="reference">- Quran 17:85</div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="container">
            <p>&copy; 2025 Islamic Reflections. All rights reserved. | May Allah guide us all.</p>
        </div>
    </footer>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        .main-header {
            background: linear-gradient(135deg, #2c5530, #1a3d1f);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .navbar {
            padding: 1rem 0;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            color: #fff;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .logo i {
            margin-right: 10px;
            color: #d4af37;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
            padding: 0.5rem 1rem;
            border-radius: 5px;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #d4af37;
            background: rgba(212, 175, 55, 0.1);
        }

        .mobile-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .mobile-toggle span {
            width: 25px;
            height: 3px;
            background: #fff;
            margin: 3px 0;
            transition: 0.3s;
        }

        /* Breadcrumb */
        .breadcrumb-section {
            background: #fff;
            padding: 20px 0;
            margin-top: 70px;
            border-bottom: 1px solid #e9ecef;
        }

        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
            color: #666;
        }

        .breadcrumb a {
            color: #2c5530;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .breadcrumb a:hover {
            color: #d4af37;
        }

        .breadcrumb i {
            color: #ccc;
            font-size: 0.7rem;
        }

        /* Post Article */
        .post-article {
            background: #fff;
            padding: 40px 0;
        }

        .article-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .article-header {
            margin-bottom: 3rem;
            text-align: center;
        }

        .category-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(45deg, #2c5530, #1a3d1f);
            color: #fff;
            padding: 8px 20px;
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 1.5rem;
        }

        .article-title {
            font-size: 2.5rem;
            color: #2c5530;
            margin-bottom: 2rem;
            line-height: 1.3;
        }

        .article-meta {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 2rem;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 15px;
            margin-bottom: 2rem;
        }

        .author-info {
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .author-avatar {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #d4af37, #f4d03f);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #2c5530;
            font-size: 2rem;
            flex-shrink: 0;
        }

        .author-name a {
            color: #2c5530;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .author-name a:hover {
            color: #d4af37;
        }

        .author-background {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 5px;
        }

        .author-bio {
            color: #666;
            font-size: 0.85rem;
            line-height: 1.4;
        }

        .post-info {
            text-align: right;
        }

        .post-stats {
            display: flex;
            flex-direction: column;
            gap: 5px;
            font-size: 0.9rem;
            color: #666;
        }

        .post-stats span {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .post-stats i {
            color: #d4af37;
            width: 15px;
        }

        /* Article Content */
        .article-content {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333;
            margin-bottom: 3rem;
        }

        .article-content p {
            margin-bottom: 1.5rem;
        }

        /* Post Actions */
        .post-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 25px;
            background: #f8f9fa;
            border-radius: 15px;
            margin-bottom: 3rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .action-buttons {
            display: flex;
            gap: 1rem;
        }

        .action-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 12px 20px;
            background: #fff;
            border: 2px solid #e9ecef;
            border-radius: 25px;
            color: #666;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .action-btn:hover {
            border-color: #d4af37;
            color: #2c5530;
            transform: translateY(-2px);
        }

        .like-btn.liked {
            background: linear-gradient(45deg, #e74c3c, #c0392b);
            color: #fff;
            border-color: #e74c3c;
        }

        .share-dropdown {
            position: relative;
        }

        .share-menu {
            position: absolute;
            top: 100%;
            right: 0;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            padding: 10px 0;
            min-width: 160px;
            display: none;
            z-index: 100;
        }

        .share-menu.active {
            display: block;
        }

        .share-option {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 15px;
            color: #333;
            text-decoration: none;
            transition: background 0.3s ease;
            border: none;
            background: none;
            width: 100%;
            font-size: 0.9rem;
            cursor: pointer;
        }

        .share-option:hover {
            background: #f8f9fa;
            color: #2c5530;
        }
        .share-option i {
            color: #d4af37;
            width: 20px;
        }
        .share-option i.fab {
            font-size: 1.2rem;
        }
        .share-option i.fas {
            font-size: 1rem;
        }
        .share-option .count {
            margin-left: auto;
            font-weight: bold;
        }
        .share-option .label {
            font-weight: 500;
        }
        .share-btn {
            background: #fff;
            border: 2px solid #e9ecef;
            color: #666;
        }
        .share-btn:hover {
            border-color: #d4af37;
            color: #2c5530;
        }
        .submit-comment-btn {
            background: linear-gradient(45deg, #2c5530, #1a3d1f);
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 0.9rem;
            font-weight: 500;
            transition: background 0.3s ease;
        }
        .submit-comment-btn:hover {
            background: linear-gradient(45deg, #1a3d1f, #2c5530);
        }
        .edit-btn, .delete-btn {
            background: #fff;
            border: 2px solid #e9ecef;
            color: #666;
            padding: 10px 15px;
            border-radius: 25px;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .edit-btn:hover, .delete-btn:hover {
            border-color: #d4af37;
            color: #2c5530;
            transform: translateY(-2px);
        }
        .delete-btn {
            background: #e74c3c;
            color: #fff;
        }
        .delete-btn:hover {
            background: #c0392b;
        }
        /* Comments Section */
        .comments-section {
            background: #fff;
            padding: 40px 0;
            margin-bottom: 3rem;
        }
        .comments-container {
            max-width: 800px;
            margin: 0 auto;
        }
        .comments-title {
            font-size: 1.5rem;
            color: #2c5530;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .comments-title i {
            color: #d4af37;
            font-size: 1.2rem;
        }
        .comment-form {
            margin-bottom: 2rem;
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
        }
        .comment-form .form-group {
            margin-bottom: 1rem;
        }
        .comment-form textarea {
            width: 100%;
            padding: 10px;
            border: 2px solid #e9ecef;
            border-radius: 5px;
            font-size: 0.9rem;
            color: #333;
            resize: vertical;
        }
        .comment-form textarea:focus {
            border-color: #2c5530;
            outline: none;
        }
        .comment-form .error-message {
            color: #e74c3c;
            font-size: 0.85rem;
            margin-top: 5px;
        }
        .comments-list {
            margin-top: 1.5rem;
        }
        .comment-item {
            margin-bottom: 1.5rem;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 10px;
        }
        .comment-author {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 10px;
        }
        .comment-avatar {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #d4af37, #f4d03f);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #2c5530;
            font-size: 1.5rem;
        }
        .comment-info {
            flex-grow: 1;
        }
        .comment-info h5 {
            margin: 0;
            font-size: 1rem;
            color: #2c5530;
        }
        .comment-info .comment-date {
            font-size: 0.85rem;
            color: #666;
        }
        .comment-content {
            font-size: 0.9rem;
            color: #333;
            line-height: 1.5;
        }
        .no-comments {
            text-align: center;
            color: #666;
            font-size: 0.9rem;
        }
        .no-comments i {
            color: #d4af37;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        /* Related Posts */
        .related-posts {
            background: #f8f9fa;
            padding: 40px 0;
        }
        .related-posts .section-title {
            font-size: 1.5rem;
            color: #2c5530;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .related-posts .section-title i {
            color: #d4af37;
            font-size: 1.2rem;
        }
        .related-posts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        .related-post-card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .related-post-card:hover {
            transform: translateY(-5px);
        }
        .related-post-card .related-post-category {
            background: linear-gradient(45deg, #2c5530, #1a3d1f);
            color: #fff;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 0.8rem;
            margin-bottom: 10px;
        }
        .related-post-card h4 {
            font-size: 1.1rem;
            color: #2c5530;
            margin-bottom: 10px;
        }
        .related-post-card h4 a {
            color: #2c5530;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .related-post-card h4 a:hover {
            color: #d4af37;
        }
        .related-post-card p {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 10px;
        }
        .related-post-card .related-post-meta {
            display: flex;
            justify-content: space-between;
            font-size: 0.85rem;
            color: #999;
        }
        .related-post-card .related-post-meta span {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .related-post-card .related-post-meta i {
            color: #d4af37;
            font-size: 0.9rem;
        }
        /* Islamic Quote */
        .islamic-quote {
            background: linear-gradient(135deg, #2c5530, #1a3d1f);
            color: #fff;
            padding: 40px 20px;
            text-align: center;
            margin-bottom: 3rem;
        }
        .quote-card {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }
        .quote-card i {
            color: #d4af37;
            font-size: 2rem;
            margin-bottom: 10px;
        }
        .quote-card .arabic-text {
            font-size: 1.5rem;
            font-family: 'Amiri', serif;
            margin-bottom: 10px;
        }
        .quote-card .translation {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }
        .quote-card .reference {
            font-size: 0.9rem;
            color: #ccc;
        }
        /* Footer */
        .main-footer {
            background: #2c5530;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
        .main-footer p {
            margin: 0;
            font-size: 0.9rem;
        }
        .main-footer p a {
            color: #d4af37;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .main-footer p a:hover {
            color: #fff;
        }
        /* Responsive Styles */
        @media (max-width: 768px) { 
            .nav-menu {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                right: 0;
                background: #2c5530;
                width: 100%;
                padding: 20px;
            }
            .nav-menu.active {
                display: flex;
            }
            .mobile-toggle {
                display: flex;
            }
            .article-container {
                padding: 0 10px;
            }
            .article-header, .post-actions {
                text-align: center;
            }
        }
        @media (max-width: 576px) {
            .article-title {
                font-size: 1.8rem;
            }
            .article-content {
                font-size: 1rem;
            }
            .action-btn {
                padding: 10px 15px;
                font-size: 0.85rem;
            }
            .comments-title {
                font-size: 1.2rem;
            }
            .comment-form textarea {
                font-size: 0.85rem;
            }
        }
        @media (max-width: 400px) {
            .article-title {
                font-size: 1.5rem;
            }
            .action-btn {
                padding: 8px 12px;
                font-size: 0.8rem;
            }
            .comments-title {
                font-size: 1rem;
            }
            .comment-form textarea {
                font-size: 0.8rem;
            }
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileToggle = document.querySelector('.mobile-toggle');
            const navMenu = document.querySelector('.nav-menu');
            const shareBtn = document.getElementById('shareBtn');
            const shareMenu = document.getElementById('shareMenu');

            mobileToggle.addEventListener('click', function() {
                navMenu.classList.toggle('active');
            });

            shareBtn.addEventListener('click', function() {
                shareMenu.classList.toggle('active');
            });

            document.addEventListener('click', function(event) {
                if (!shareBtn.contains(event.target) && !shareMenu.contains(event.target)) {
                    shareMenu.classList.remove('active');
                }
            });
        });

        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function() {
                alert('Link copied to clipboard!');
            }, function(err) {
                console.error('Could not copy text: ', err);
            });
        }
        document.getElementById('likeBtn').addEventListener('click', function() {
            const postId = this.getAttribute('data-post-id');
            const likeCountElement = document.getElementById('likeCount');
            let isLiked = this.classList.contains('liked');

            fetch(`/posts/${postId}/like`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ liked: !isLiked })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    isLiked = !isLiked;
                    this.classList.toggle('liked', isLiked);
                    likeCountElement.textContent = data.likes_count;
                    this.querySelector('.label').textContent = isLiked ? 'Liked' : 'Like';
                } else {
                    alert('An error occurred while liking the post.');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</body>
<body>
    <!-- Header -->
    <header class="main-header">
        <nav class="navbar">
            <div class="nav-container">
                <div class="logo">
                    <i class="fas fa-mos
que"></i>
                    Islamic Reflections
                </div>
                <ul class="nav-menu">
                    <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li><a href="{{ route('posts.index') }}" class="nav-link">Articles</a></li>
                    <li><a href="{{ route('about') }}" class="nav-link">About Us</a></li>
                    <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                    <li><a href="{{ route('faq') }}" class="nav-link">FAQ</a></li>
                    <li><a href="{{ route('donate') }}" class="nav-link">Donate
</a></li>
                </ul>   
                <div class="mobile-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>
    <!-- Breadcrumb -->
    <section class="breadcrumb-section">
        <div class="container">
            <nav class="breadcrumb
">
                <a href="{{ route('home') }}" class="breadcrumb-link">Home</a>
                <i class="fas fa-chevron-right"></i>
                <a href="{{ route('posts.index') }}" class="breadcrumb-link">Articles</a>
                <i class="fas fa-chevron-right"></i>
                <span class="breadcrumb
-current">{{ $post->title }}</span>
            </nav>
        </div>
    </section>

    <!-- Post Article -->
    <article class="post-article">
        <div class="container">
            <div class="article-container">
                <header class="article-header">
                    <div class="category-badge">{{ $post->category_name }}</div>
                    <h1 class="article-title">{{ $post->title }}</h1>
                    <div class="article-meta">
                        <div class="author-info">
                            <div class="author-avatar">
                                @if($post->user->avatar)
                                    <img src="{{ asset('storage/' . $post->user->avatar) }}" alt="{{ $post->user->name }}" />
                                @else
                                    <i class="fas fa-user-circle"></i>
                                @endif
                            </div>
                            <div class="author-name">
                                <a href="{{ route('users.show', $post->user) }}">
                                    {{ $post->user->pen_name ?? $post->user->name }}
                                </a>
                            </div>
                        </div>
                        <div class="post-info">
                            <span class="post-stats"><i class="fas fa-calendar-alt"></i> {{ $post->created_at->format('M d, Y') }}</span>
                            <span class="post-stats"><i class="fas fa-eye"></i> {{ $post->views_count }} Views</span>
                            <span class="post-stats"><i class="fas fa-clock"></i> {{ $post->reading_time }} min read</span>
                        </div>
                    </div>
                </header>
                <div class="article-content">
                    {!! $post->content !!}
                </div>
                <div class="post-actions">
                    <div class="action-buttons">
                        <!-- Like Button -->
                        <button id="likeBtn" data-post-id="{{ $post->id }}" class="action-btn {{ $post->isLikedByUser() ? 'liked' : '' }}">
                            <i class="fas fa-thumbs-up"></i>
                            <span class="label">{{ $post->isLikedByUser() ? 'Liked' : 'Like' }}</span>
                            <span id="likeCount" class="count">{{ $post->likes_count }}</span>
                        </button>

                        <!-- Share Button -->
                        <div class="share-dropdown">
                            <button id="shareBtn" class="action-btn share-btn">
                                <i class="fas fa-share-alt"></i>
                                Share
                            </button>
                            <div id="shareMenu" class="share-menu">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($post->share_url) }}" 
                                   target="_blank" class="share-option">
                                    <i class="fab fa-facebook-f"></i>
                                    <span class="label">Facebook</span>
                                    <span class="count">{{ $post->facebook_shares_count }}</span>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode($post
->share_url) }}&text={{ urlencode($post->title) }}" 
                                   target="_blank" class="share-option">
                                    <i class="fab fa-twitter"></i>
                                    <span class="label">Twitter</span>
                                    <span class="count">{{ $post->twitter_shares_count }}</span>
                                </a>
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode($post->share_url) }}" 
                                   target="_blank" class="share-option">
                                    <i class="fab fa-linkedin-in"></i>
                                    <span class="label">LinkedIn</span>
                                    <span class="count">{{ $post->linkedin_shares_count }}</span>
                                </a>
                                <a href="https://api.whatsapp.com/send?text={{ urlencode($post->
title) }}%20{{ urlencode($post->share_url) }}" 
                                   target="_blank" class="share-option">
                                    <i class="fab fa-whatsapp"></i>
                                    <span class="label">WhatsApp</span>
                                    <span class="count">{{ $post->whatsapp_shares_count }}</span>
                                </a>
                                <button class="share-option" onclick="copyToClipboard('{{ $post->share_url }}')">
                                    <i class="fas fa-link"></i>
                                    <span class="label">Copy Link</span>
                                    <span class="count">0</span>
                                </button>
                            </div>
                        </div>
                        <!-- Edit and Delete Buttons -->
                        @can('update', $post)
                            <a href="{{ route('posts.edit', $post) }}" class="action-btn edit-btn">
                                <i class="fas fa-edit"></i>
                                Edit
                            </a>
                        @endcan
                        @can('delete', $post)
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="action-btn delete-btn">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this post?')" class="delete-btn">
                                    <i class="fas fa-trash-alt"></i>
                                    Delete
                                </button>
                            </form>
                        @endcan
                    </div>
                    <div class="post-stats">
                        <span><i class="fas fa-comments"></i> {{ $post->comments_count }} Comments</span>
                        <span><i class="fas fa-share-alt"></i> {{ $post->total_shares }} Shares</span>
                        <span><i class="fas fa-eye"></i> {{ $post->views_count }} Views</span>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!-- Comments Section -->
    <section class="comments-section">
        <div class="container">
            <div class="comments-container">
                <h2 class="comments-title">
                    <i class="fas fa-comments"></i>
                    Comments ({{ $post->comments_count }})
                </h2>
                @if(auth()->check())
                    <form action="{{ route('comments.store') }}" method="POST" class="comment-form">
                        @csrf
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <div class="form-group
">
                            <textarea name="content" rows="4" placeholder="Write your comment here..." required></textarea>
                            @error('content')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="submit-comment-btn">Submit Comment</button>
                    </form>
                @else
                    <p class="no-comments">
                        <i class="fas fa-info-circle"></i>
                        Please <a href="{{ route('login') }}">log in</a> to post a comment.
                    </p>
                @endif
                <div class="comments-list">
                    @if($post->comments->isEmpty())
                        <p class="no-comments">
                            <i class="fas fa-comment-dots"></i>
                            No comments yet. Be the first to comment!
                        </p>
                    @else
                        @foreach($post->comments as $comment)
                            <div class="comment-item">
                                <div class="comment-author">
                                    <div class="comment-avatar">
                                        @if($comment->user->avatar)
                                            <img src="{{ asset('storage/' . $comment->user->avatar) }}" alt="{{ $comment->user->name }}" />
                                        @else
                                            <i class="fas fa-user-circle"></i>
                                        @endif
                                    </div>
                                    <div class="comment-info">
                                        <h5>{{ $comment->user->pen_name ?? $comment->user->name }}</h5>
                                        <span class="comment-date">{{ $comment->created_at->format('M d, Y') }}</span>
                                    </div>
                                </div>
                                <p class="comment-content">{{ $comment->content }}</p>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- Related Posts -->
    <section class="related-posts">
        <div class="container">
            <h2 class="section-title">
                <i class="fas fa-th-list"></i>
                Related Articles
            </h2>
            <div class="related-posts-grid">
                @foreach($relatedPosts as $relatedPost)
                    <div class="related-post-card">
                        <div class="related-post-category">{{ $relatedPost->category_name }}</div>
                        <h4><a href="{{ route('posts.show', $relatedPost) }}">{{ $relatedPost->title }}</a></h4>
                        <p>{{ Str::limit(strip_tags($relatedPost->content), 100) }}</p>
                        <div class="related-post-meta">
                            <span><i class="fas fa-calendar-alt"></i> {{ $relatedPost->created_at->format('M d, Y') }}</span>
                            <span><i class="fas fa-eye"></i> {{ $relatedPost->views_count }} Views</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Islamic Quote -->
    <section class="islamic-quote">
        <div class="quote-card">
            <i class="fas fa-quote-left"></i>
            <div class="arabic-text">إِنَّ مَعَ الْعُسْرِ يُسْرًا</div>
            <div class="translation">Indeed, with hardship [will be] ease.</div>
            <div class="reference">Quran 94:6</div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="main-footer">
        <p>&copy; 2023 Islamic Reflections. All rights reserved. | <a href="{{ route('privacy') }}">Privacy Policy</a> | <a href="{{ route('terms') }}">Terms of Service</a></p>
    </footer>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Header */
        .main-header {
            background: #2c5530;
            color: #fff;
            padding: 20px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .nav-menu {
            display: flex;
            gap: 20px;
        }

        .nav-link {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #d4af37;
        }

        .mobile-toggle {
            display: none; /* Hidden by default, shown on mobile */
            flex-direction: column;
            cursor: pointer;
        }

        .mobile-toggle span {
            height: 3px;
            width: 25px;
            background-color: #fff;
            margin-bottom: 5px;
        }

        /* Breadcrumb */
        .breadcrumb-section {
            background: #e9ecef;
            padding: 15px 0;
            margin-top: 60px; /* To avoid overlap with fixed header */
        }
        .breadcrumb {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
        }
        .breadcrumb-link {
            color: #2c5530;
            text-decoration: none;
        }
        .breadcrumb-link:hover {
            color: #d4af37;
        }
        .breadcrumb-current {
            color: #666;
            font-weight: bold;
        }
        /* Post Article */
        .post-article {
            background: #fff;
            padding: 40px 20px;
            margin: 20px auto;
            max-width: 800px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .article-container {
            padding: 0 20px;
        }
        .article-header {
            margin-bottom: 20px;
        }
        .category-badge {
            background: linear-gradient(45deg, #2c5530, #1a3d1f);
            color: #fff;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 0.9rem;
            margin-bottom: 10px;
        }
        .article-title {
            font-size: 2rem;
            color: #2c5530;
            margin-bottom: 10px;
        }
        .article-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .author-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            background: linear-gradient(135deg, #d4af37, #f4d03f);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .author-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .author-avatar i {
            font-size: 2rem;
            color: #fff;
        }
        .author-name a {
            color: #2c5530;
            text-decoration: none;
            font-weight: bold;
        }
        .author-name a:hover {
            color: #d4af37;
        }
        .post-info {
            display: flex;
            gap: 20px;
            font-size: 0.9rem;
            color: #666;
        }
        .post-info span {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .post-info i {
            color: #d4af37;
            font-size: 0.9rem;
        }
        .article-content {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #333;
            margin-bottom: 30px;
        }
        .post-actions {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 30px;
        }
        .action-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
        }
        .action-btn {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 20px;
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: 500;
            color: #fff;
            text-decoration: none;
            transition: background 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }
        .action-btn i {
            color: #d4af37;
            font-size: 1.2rem;
        }
        .action-btn:hover {
            background: #d4af37;
            color: #fff;
            border-color: #d4af37;
        }
        .liked {
            background: #d4af37;
            color: #fff;
        }
        .liked i {
            color: #fff;
        }
        .share-dropdown {
            position: relative;
        }

        .share-btn {
            background: #fff;
            border: 2px solid #e9ecef;
            color: #666;
            padding: 12px 20px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 0.9rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .share-btn i {
            color: #d4af37;
            font-size: 1.2rem;
        }
        .share-menu {
            position: absolute;
            top: 100%;
            right: 0;
            background: #fff;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            display: none;
            flex-direction: column;
            width: 200px;
        }
        .share-menu.active {
            display: flex;
        }
        .share-option {
            padding: 10px 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #666;
            text-decoration: none;
            transition: background 0.3s ease, color 0.3s ease;
        }
        .share-option:hover {
            background: #f8f9fa;
            color: #2c5530;
        }
        .share-option i {
            color: #d4af37;
            font-size: 1.2rem;
        }
        .share-option .label {
            flex-grow: 1;
        }
        .share-option .count {
            font-size: 0.9rem;
            color: #999;
        }
        .edit-btn, .delete-btn {
            background: #fff;
            border: 2px solid #e9ecef;
            color: #2c5530;
            padding: 12px 20px;
            margin-top: 10px;
            display: inline-block;
            text-decoration: none;
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: background 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        } --}}