<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Reading - Islamic Reflections</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                    <li><a href="/post" class="nav-link active">Start Reading</a></li>
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

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1><i class="fas fa-book-open"></i> Start Reading</h1>
            <p>Discover Islamic wisdom through authentic articles by our community writers</p>
        </div>
    </section>

    <!-- Categories Filter -->
    <section class="categories-filter">
        <div class="container">
            <div class="filter-container">
                <h3><i class="fas fa-filter"></i> Browse by Category</h3>
                <div class="categories-grid">
                    <a href="{{ route('posts.index') }}" class="category-btn {{ !request('category') ? 'active' : '' }}">
                        <i class="fas fa-th-large"></i>
                        All Posts
                    </a>
                    @foreach($categories as $key => $name)
                        <a href="{{ route('posts.index', ['category' => $key]) }}" 
                           class="category-btn {{ request('category') == $key ? 'active' : '' }}">
                            <i class="fas fa-{{ $key == 'quran' ? 'quran' : ($key == 'hadith' ? 'scroll' : ($key == 'dua' ? 'hands-praying' : 'book')) }}"></i>
                            {{ $name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Search Section -->
    <section class="search-section">
        <div class="container">
            <form method="GET" action="{{ route('posts.index') }}" class="search-form">
                <div class="search-container">
                    <input type="text" name="search" value="{{ request('search') }}" 
                           placeholder="Search articles by title or content...">
                    <input type="hidden" name="category" value="{{ request('category') }}">
                    <button type="submit" class="search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Posts Section -->
    <section class="posts-section">
        <div class="container">
            @if($posts->count() > 0)
                <div class="posts-header">
                    <h2>
                        @if(request('category'))
                            {{ $categories[request('category')] }}
                        @elseif(request('search'))
                            Search Results for "{{ request('search') }}"
                        @else
                            Latest Islamic Articles
                        @endif
                    </h2>
                    <span class="posts-count">{{ $posts->total() }} articles found</span>
                </div>

                <div class="posts-grid">
                    @foreach($posts as $post)
                        <article class="post-card">
                            <div class="post-header">
                                <div class="writer-info">
                                    <div class="writer-avatar">
                                        <i class="fas fa-user-circle"></i>
                                    </div>
                                    <div class="writer-details">
                                        <h4 class="writer-name">{{ $post->user->pen_name ?? $post->user->name }}</h4>
                                        <span class="writer-background">{{ ucfirst(str_replace('_', ' ', $post->user->islamic_background ?? 'Writer')) }}</span>
                                    </div>
                                </div>
                                <div class="post-meta">
                                    <span class="post-date">{{ $post->formatted_date }}</span>
                                    <span class="reading-time">{{ $post->reading_time }}</span>
                                </div>
                            </div>

                            <div class="post-content">
                                <div class="post-category">
                                    <i class="fas fa-tag"></i>
                                    {{ $post->category_name }}
                                </div>
                                <h3 class="post-title">
                                    <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
                                </h3>
                                <p class="post-excerpt">{{ $post->excerpt }}</p>
                            </div>

                            <div class="post-footer">
                                <div class="post-stats">
                                    <span><i class="fas fa-eye"></i> {{ $post->views_count }}</span>
                                    <span><i class="fas fa-heart"></i> {{ $post->likes_count }}</span>
                                    <span><i class="fas fa-comment"></i> {{ $post->comments_count }}</span>
                                </div>
                                <a href="{{ route('posts.show', $post->slug) }}" class="read-more-btn">
                                    Read Full Article <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="pagination-container">
                    {{ $posts->appends(request()->query())->links() }}
                </div>
            @else
                <div class="no-posts">
                    <i class="fas fa-book-open"></i>
                    <h3>No Articles Found</h3>
                    <p>
                        @if(request('search'))
                            No articles match your search criteria. Try different keywords.
                        @elseif(request('category'))
                            No articles found in this category yet. Check back later!
                        @else
                            No articles have been published yet. Be the first to share Islamic knowledge!
                        @endif
                    </p>
                    @auth
                        <a href="{{ route('posts.create') }}" class="write-first-btn">
                            <i class="fas fa-pen-nib"></i>
                            Write First Article
                        </a>
                    @else
                        <a href="/joinus" class="join-writers-btn">
                            <i class="fas fa-user-plus"></i>
                            Join Our Writers
                        </a>
                    @endauth
                </div>
            @endif
        </div>
    </section>

    <!-- Islamic Quote -->
    <section class="islamic-quote">
        <div class="container">
            <div class="quote-card">
                <i class="fas fa-star-and-crescent"></i>
                <div class="arabic-text">
                    وَقُل رَّبِّ زِدْنِي عِلْمًا
                </div>
                <div class="translation">
                    "And say: My Lord, increase me in knowledge"
                </div>
                <div class="reference">- Quran 20:114</div>
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

        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, #2c5530, #1a3d1f);
            color: #fff;
            padding: 120px 0 60px;
            text-align: center;
            margin-top: 70px;
        }

        .page-header h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #d4af37;
        }

        .page-header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        /* Categories Filter */
        .categories-filter {
            background: #fff;
            padding: 40px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .filter-container h3 {
            color: #2c5530;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .filter-container h3 i {
            color: #d4af37;
            margin-right: 10px;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }

        .category-btn {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 20px;
            background: #f8f9fa;
            color: #2c5530;
            text-decoration: none;
            border-radius: 25px;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .category-btn:hover,
        .category-btn.active {
            background: linear-gradient(45deg, #2c5530, #1a3d1f);
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(44, 85, 48, 0.3);
        }

        .category-btn i {
            color: #d4af37;
        }

        /* Search Section */
        .search-section {
            background: #f8f9fa;
            padding: 30px 0;
        }

        .search-container {
            display: flex;
            max-width: 600px;
            margin: 0 auto;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .search-container input[type="text"] {
            flex: 1;
            padding: 15px 20px;
            border: none;
            font-size: 1rem;
            outline: none;
        }

        .search-btn {
            background: linear-gradient(45deg, #d4af37, #f4d03f);
            color: #2c5530;
            border: none;
            padding: 15px 25px;
            cursor: pointer;
            font-size: 1rem;
            transition: background 0.3s ease;
        }

        .search-btn:hover {
            background: linear-gradient(45deg, #2c5530, #1a3d1f);
            color: #fff;
        }

        /* Posts Section */
        .posts-section {
            padding: 60px 0;
            background: #f8f9fa;
        }

        .posts-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .posts-header h2 {
            color: #2c5530;
            font-size: 2rem;
        }

        .posts-count {
            color: #666;
            font-weight: 500;
        }

        .posts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .post-card {
            background: #fff;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border-left: 4px solid #d4af37;
        }

        .post-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .post-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1rem;
            gap: 1rem;
        }

        .writer-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .writer-avatar {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #d4af37, #f4d03f);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #2c5530;
            font-size: 1.2rem;
        }

        .writer-name {
            color: #2c5530;
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 2px;
        }

        .writer-background {
            color: #666;
            font-size: 0.8rem;
            background: rgba(212, 175, 55, 0.1);
            padding: 2px 8px;
            border-radius: 10px;
        }

        .post-meta {
            text-align: right;
            font-size: 0.8rem;
            color: #666;
        }

        .post-category {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            background: linear-gradient(45deg, #2c5530, #1a3d1f);
            color: #fff;
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 500;
            margin-bottom: 1rem;
        }

        .post-title {
            margin-bottom: 1rem;
        }

        .post-title a {
            color: #2c5530;
            text-decoration: none;
            font-size: 1.3rem;
            font-weight: 600;
            line-height: 1.4;
            transition: color 0.3s ease;
        }

        .post-title a:hover {
            color: #d4af37;
        }

        .post-excerpt {
            color: #666;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .post-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
        }

        .post-stats {
            display: flex;
            gap: 1rem;
            font-size: 0.9rem;
            color: #666;
        }

        .post-stats span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .post-stats i {
            color: #d4af37;
        }

        .read-more-btn {
            background: linear-gradient(45deg, #2c5530, #1a3d1f);
            color: #fff;
            padding: 8px 16px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .read-more-btn:hover {
            background: linear-gradient(45deg, #d4af37, #f4d03f);
            color: #2c5530;
            transform: translateY(-2px);
        }

        /* No Posts */
        .no-posts {
            text-align: center;
            padding: 60px 20px;
            color: #666;
        }

        .no-posts i {
            font-size: 4rem;
            color: #d4af37;
            margin-bottom: 1rem;
        }

        .no-posts h3 {
            color: #2c5530;
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .no-posts p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .write-first-btn,
        .join-writers-btn {
            background: linear-gradient(45deg, #d4af37, #f4d03f);
            color: #2c5530;
            padding: 15px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
        }

        .write-first-btn:hover,
        .join-writers-btn:hover {
            background: linear-gradient(45deg, #2c5530, #1a3d1f);
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(44, 85, 48, 0.3);
        }

        /* Pagination */
        .pagination-container {
            margin-top: 3rem;
            display: flex;
            justify-content: center;
        }

        /* Islamic Quote */
        .islamic-quote {
            background: linear-gradient(135deg, #2c5530, #1a3d1f);
            color: #fff;
            padding: 60px 0;
        }

        .quote-card {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .quote-card i {
            font-size: 2.5rem;
            color: #d4af37;
            margin-bottom: 1.5rem;
        }

        .arabic-text {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #d4af37;
            line-height: 1.6;
            direction: rtl;
        }

        .translation {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            font-style: italic;
            opacity: 0.9;
        }

        .reference {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        /* Footer */
        .main-footer {
            background: #1a3d1f;
            color: #fff;
            padding: 30px 0;
            text-align: center;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .mobile-toggle {
                display: flex;
            }
            
            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: linear-gradient(135deg, #2c5530, #1a3d1f);
                flex-direction: column;
                padding: 1rem;
            }
            
            .nav-menu.active {
                display: flex;
            }
            
            .page-header h1 {
                font-size: 2rem;
            }
            
            .categories-grid {
                grid-template-columns: 1fr;
            }
            
            .posts-grid {
                grid-template-columns: 1fr;
            }
            
            .posts-header {
                flex-direction: column;
                text-align: center;
            }
            
            .post-header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .post-footer {
                flex-direction: column;
                gap: 1rem;
            }
            
            .arabic-text {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .post-card {
                padding: 20px;
            }
            
            .search-container {
                flex-direction: column;
                border-radius: 15px;
            }
            
            .search-btn {
                border-radius: 0 0 15px 15px;
            }
            
            .search-container input[type="text"] {
                border-radius: 15px 15px 0 0;
            }
        }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .post-card {
            animation: fadeInUp 0.6s ease forwards;
        }

        .post-card:nth-child(even) {
            animation-delay: 0.1s;
        }

        .post-card:nth-child(odd) {
            animation-delay: 0.2s;
        }
    </style>

    <script>
        // Mobile menu toggle
        const mobileToggle = document.querySelector('.mobile-toggle');
        const navMenu = document.querySelector('.nav-menu');

        mobileToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
        });

        // Add animation delays for staggered loading effect
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.post-card');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
            });
        });

        // Search form enhancement
        const searchForm = document.querySelector('.search-form');
        const searchInput = searchForm.querySelector('input[name="search"]');
        
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                searchForm.submit();
            }
        });
    </script>
</body>
</html>