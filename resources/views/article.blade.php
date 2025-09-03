<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles - Islamic Reflections</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
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
                    <li><a href="/article" class="nav-link active">Articles</a></li>
                    <li><a href="/quran" class="nav-link">Quran</a></li>
                    <li><a href="/hadith" class="nav-link">Hadith</a></li>
                    <li><a href="/joinus" class="nav-link">About</a></li>
                    <li><a href="/users" class="nav-link">Writers</a></li>
                </ul>
                <div class="hamburger">
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
            <h1><i class="fas fa-newspaper"></i> Islamic Articles</h1>
            <p>Explore inspiring articles about Islamic faith, spirituality, and guidance</p>
        </div>
    </section>

    <!-- Search and Filter Section -->
    <section class="search-filter-section">
        <div class="container">
            <div class="search-container">
                <div class="search-input-wrapper">
                    <input type="text" id="searchInput" placeholder="Search articles by title or content...">
                    <button class="search-btn" id="searchBtn">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <div class="filter-controls">
                    <select id="categoryFilter">
                        <option value="">All Categories</option>
                        <option value="quran">Quran Studies</option>
                        <option value="spirituality">Spirituality</option>
                        <option value="worship">Worship</option>
                        <option value="ramadan">Ramadan</option>
                        <option value="community">Community</option>
                        <option value="personal-growth">Personal Growth</option>
                        <option value="hadith">Hadith Studies</option>
                        <option value="character">Character & Ethics</option>
                    </select>
                    <select id="sortBy">
                        <option value="newest">Newest First</option>
                        <option value="oldest">Oldest First</option>
                        <option value="popular">Most Popular</option>
                        <option value="title">Title A-Z</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Article -->
    <section class="featured-article">
        <div class="container">
            <div class="featured-card">
                <div class="featured-badge">
                    <i class="fas fa-star"></i> Featured Article
                </div>
                <div class="featured-content">
                    <div class="featured-meta">
                        <span class="category-tag quran"><i class="fas fa-quran"></i> Quran Studies</span>
                        <span class="read-time"><i class="fas fa-clock"></i> 8 min read</span>
                    </div>
                    <h2>The Miraculous Nature of the Quran: A Scientific Perspective</h2>
                    <p class="featured-excerpt">
                        Discover the amazing scientific facts mentioned in the Quran 1400 years ago, 
                        which modern science has only recently confirmed. From embryology to astronomy, 
                        explore how the Quran continues to amaze scientists and believers alike.
                    </p>
                    <div class="featured-author">
                        <i class="fas fa-user"></i>
                        <span>By Dr. Ahmed Rahman • March 20, 2025</span>
                    </div>
                    <a href="#" class="featured-btn">Read Full Article <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="featured-image">
                    <i class="fas fa-microscope"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Articles Grid -->
    <section class="articles-section">
        <div class="container">
            <div class="articles-header">
                <h2>Latest Articles</h2>
                <div class="view-toggle">
                    <button class="view-btn active" data-view="grid">
                        <i class="fas fa-th-large"></i>
                    </button>
                    <button class="view-btn" data-view="list">
                        <i class="fas fa-list"></i>
                    </button>
                </div>
            </div>
            
            <div class="articles-grid" id="articlesContainer">
                <!-- Article 1 -->
                <article class="article-card" data-category="quran" data-date="2025-03-15">
                    <div class="article-header">
                        <i class="fas fa-quran"></i>
                        <span class="category">Quran Studies</span>
                        <div class="article-rating">
                            <i class="fas fa-star"></i>
                            <span>4.8</span>
                        </div>
                    </div>
                    <h3>Understanding Surah Al-Fatiha: The Opening of the Book</h3>
                    <p class="article-excerpt">
                        The opening chapter of the Quran holds profound meanings and serves as a complete prayer. 
                        Discover the deep wisdom behind each verse of this blessed surah and how it encompasses 
                        the entire essence of Islamic faith.
                    </p>
                    <div class="article-meta">
                        <span><i class="fas fa-calendar"></i> March 15, 2025</span>
                        <span><i class="fas fa-clock"></i> 5 min read</span>
                        <span><i class="fas fa-eye"></i> 1,247 views</span>
                    </div>
                    <div class="article-tags">
                        <span class="tag">Quran</span>
                        <span class="tag">Prayer</span>
                        <span class="tag">Tafsir</span>
                    </div>
                    <a href="#" class="read-btn">Read Article</a>
                </article>

                <!-- Article 2 -->
                <article class="article-card" data-category="spirituality" data-date="2025-03-12">
                    <div class="article-header">
                        <i class="fas fa-heart"></i>
                        <span class="category">Spirituality</span>
                        <div class="article-rating">
                            <i class="fas fa-star"></i>
                            <span>4.9</span>
                        </div>
                    </div>
                    <h3>The Beauty of Islamic Character: Akhlaq in Daily Life</h3>
                    <p class="article-excerpt">
                        Learn about the noble characteristics that Islam teaches us to develop, 
                        following the perfect example of Prophet Muhammad (PBUH). Explore how 
                        good character transforms our relationships and society.
                    </p>
                    <div class="article-meta">
                        <span><i class="fas fa-calendar"></i> March 12, 2025</span>
                        <span><i class="fas fa-clock"></i> 7 min read</span>
                        <span><i class="fas fa-eye"></i> 892 views</span>
                    </div>
                    <div class="article-tags">
                        <span class="tag">Character</span>
                        <span class="tag">Akhlaq</span>
                        <span class="tag">Sunnah</span>
                    </div>
                    <a href="#" class="read-btn">Read Article</a>
                </article>

                <!-- Article 3 -->
                <article class="article-card" data-category="worship" data-date="2025-03-10">
                    <div class="article-header">
                        <i class="fas fa-hands-praying"></i>
                        <span class="category">Worship</span>
                        <div class="article-rating">
                            <i class="fas fa-star"></i>
                            <span>4.7</span>
                        </div>
                    </div>
                    <h3>The Power of Dua: Connecting with Allah</h3>
                    <p class="article-excerpt">
                        Discover how supplication connects us with Allah and brings peace, 
                        guidance, and blessings into our everyday lives. Learn the etiquettes 
                        of making dua and the most blessed times for supplication.
                    </p>
                    <div class="article-meta">
                        <span><i class="fas fa-calendar"></i> March 10, 2025</span>
                        <span><i class="fas fa-clock"></i> 6 min read</span>
                        <span><i class="fas fa-eye"></i> 1,156 views</span>
                    </div>
                    <div class="article-tags">
                        <span class="tag">Dua</span>
                        <span class="tag">Worship</span>
                        <span class="tag">Spirituality</span>
                    </div>
                    <a href="#" class="read-btn">Read Article</a>
                </article>

                <!-- Article 4 -->
                <article class="article-card" data-category="ramadan" data-date="2025-03-08">
                    <div class="article-header">
                        <i class="fas fa-moon"></i>
                        <span class="category">Ramadan</span>
                        <div class="article-rating">
                            <i class="fas fa-star"></i>
                            <span>4.8</span>
                        </div>
                    </div>
                    <h3>Preparing for Ramadan: A Spiritual Journey</h3>
                    <p class="article-excerpt">
                        Learn how to spiritually and practically prepare for Ramadan to make 
                        the most of this sacred month of fasting and reflection. Discover the 
                        benefits of fasting beyond the physical aspects.
                    </p>
                    <div class="article-meta">
                        <span><i class="fas fa-calendar"></i> March 8, 2025</span>
                        <span><i class="fas fa-clock"></i> 8 min read</span>
                        <span><i class="fas fa-eye"></i> 2,341 views</span>
                    </div>
                    <div class="article-tags">
                        <span class="tag">Ramadan</span>
                        <span class="tag">Fasting</span>
                        <span class="tag">Preparation</span>
                    </div>
                    <a href="#" class="read-btn">Read Article</a>
                </article>

                <!-- Article 5 -->
                <article class="article-card" data-category="community" data-date="2025-03-05">
                    <div class="article-header">
                        <i class="fas fa-users"></i>
                        <span class="category">Community</span>
                        <div class="article-rating">
                            <i class="fas fa-star"></i>
                            <span>4.6</span>
                        </div>
                    </div>
                    <h3>Building Strong Muslim Communities</h3>
                    <p class="article-excerpt">
                        Explore the Islamic principles of unity, brotherhood, and mutual support 
                        that help create thriving Muslim communities worldwide. Learn how to 
                        contribute positively to your local Muslim community.
                    </p>
                    <div class="article-meta">
                        <span><i class="fas fa-calendar"></i> March 5, 2025</span>
                        <span><i class="fas fa-clock"></i> 9 min read</span>
                        <span><i class="fas fa-eye"></i> 756 views</span>
                    </div>
                    <div class="article-tags">
                        <span class="tag">Community</span>
                        <span class="tag">Brotherhood</span>
                        <span class="tag">Unity</span>
                    </div>
                    <a href="#" class="read-btn">Read Article</a>
                </article>

                <!-- Article 6 -->
                <article class="article-card" data-category="personal-growth" data-date="2025-03-03">
                    <div class="article-header">
                        <i class="fas fa-seedling"></i>
                        <span class="category">Personal Growth</span>
                        <div class="article-rating">
                            <i class="fas fa-star"></i>
                            <span>4.9</span>
                        </div>
                    </div>
                    <h3>Patience in Islamic Teachings: The Virtue of Sabr</h3>
                    <p class="article-excerpt">
                        Understanding the virtue of patience (Sabr) in Islam and how it transforms 
                        our response to life's challenges and tests. Discover practical ways to 
                        develop patience through Islamic teachings.
                    </p>
                    <div class="article-meta">
                        <span><i class="fas fa-calendar"></i> March 3, 2025</span>
                        <span><i class="fas fa-clock"></i> 6 min read</span>
                        <span><i class="fas fa-eye"></i> 1,023 views</span>
                    </div>
                    <div class="article-tags">
                        <span class="tag">Sabr</span>
                        <span class="tag">Patience</span>
                        <span class="tag">Character</span>
                    </div>
                    <a href="#" class="read-btn">Read Article</a>
                </article>

                <!-- Article 7 -->
                <article class="article-card" data-category="hadith" data-date="2025-03-01">
                    <div class="article-header">
                        <i class="fas fa-scroll"></i>
                        <span class="category">Hadith Studies</span>
                        <div class="article-rating">
                            <i class="fas fa-star"></i>
                            <span>4.7</span>
                        </div>
                    </div>
                    <h3>Understanding Hadith: The Prophetic Traditions</h3>
                    <p class="article-excerpt">
                        Learn about the importance of Hadith in Islamic jurisprudence and daily life. 
                        Explore how the sayings and actions of Prophet Muhammad (PBUH) guide us in 
                        every aspect of our lives.
                    </p>
                    <div class="article-meta">
                        <span><i class="fas fa-calendar"></i> March 1, 2025</span>
                        <span><i class="fas fa-clock"></i> 7 min read</span>
                        <span><i class="fas fa-eye"></i> 934 views</span>
                    </div>
                    <div class="article-tags">
                        <span class="tag">Hadith</span>
                        <span class="tag">Sunnah</span>
                        <span class="tag">Islamic Law</span>
                    </div>
                    <a href="#" class="read-btn">Read Article</a>
                </article>

                <!-- Article 8 -->
                <article class="article-card" data-category="character" data-date="2025-02-28">
                    <div class="article-header">
                        <i class="fas fa-balance-scale"></i>
                        <span class="category">Character & Ethics</span>
                        <div class="article-rating">
                            <i class="fas fa-star"></i>
                            <span>4.8</span>
                        </div>
                    </div>
                    <h3>Justice in Islam: The Foundation of Society</h3>
                    <p class="article-excerpt">
                        Explore the concept of justice (Adl) in Islamic teachings and its role as 
                        the foundation of a righteous society. Learn how Islam promotes fairness 
                        and equity in all aspects of life.
                    </p>
                    <div class="article-meta">
                        <span><i class="fas fa-calendar"></i> February 28, 2025</span>
                        <span><i class="fas fa-clock"></i> 8 min read</span>
                        <span><i class="fas fa-eye"></i> 1,189 views</span>
                    </div>
                    <div class="article-tags">
                        <span class="tag">Justice</span>
                        <span class="tag">Ethics</span>
                        <span class="tag">Society</span>
                    </div>
                    <a href="#" class="read-btn">Read Article</a>
                </article>
            </div>

            <!-- Load More Button -->
            <div class="load-more-section">
                <button class="load-more-btn" id="loadMoreBtn">
                    <i class="fas fa-plus-circle"></i>
                    Load More Articles
                </button>
            </div>
        </div>
    </section>

    <!-- Newsletter Signup -->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-card">
                <div class="newsletter-content">
                    <i class="fas fa-envelope"></i>
                    <h3>Stay Updated with Islamic Reflections</h3>
                    <p>Subscribe to our newsletter to receive the latest articles and Islamic insights directly in your inbox.</p>
                    <div class="newsletter-form">
                        <input type="email" placeholder="Enter your email address" id="emailInput">
                        <button class="subscribe-btn" id="subscribeBtn">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>Islamic Reflections</h4>
                    <p>Spreading the light of Islamic knowledge and wisdom for the benefit of all humanity.</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/article">Articles</a></li>
                        <li><a href="/quran">Quran</a></li>
                        <li><a href="/hadith">Hadith</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Connect With Us</h4>
                    <div class="social-links">
                        <a href="https://web.facebook.com/profile.php?id=61576759681723"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy;Islamic Reflections. All rights reserved. | May Allah guide us all.</p>
            </div>
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

        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background: #fff;
            margin: 3px 0;
            transition: 0.3s;
            border-radius: 3px;
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

        /* Search and Filter Section */
        .search-filter-section {
            background: #fff;
            padding: 40px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .search-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .search-input-wrapper {
            display: flex;
            margin-bottom: 20px;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        #searchInput {
            flex: 1;
            padding: 15px 20px;
            border: none;
            font-size: 1.1rem;
            outline: none;
            background: #f8f9fa;
        }

        .search-btn {
            background: linear-gradient(45deg, #d4af37, #f4d03f);
            color: #2c5530;
            border: none;
            padding: 15px 25px;
            cursor: pointer;
            font-size: 1.1rem;
            transition: background 0.3s ease;
        }

        .search-btn:hover {
            background: linear-gradient(45deg, #2c5530, #1a3d1f);
            color: #fff;
        }

        .filter-controls {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .filter-controls select {
            padding: 12px 15px;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            font-size: 1rem;
            background: #fff;
            color: #333;
            cursor: pointer;
            transition: border-color 0.3s ease;
        }

        .filter-controls select:focus {
            outline: none;
            border-color: #d4af37;
        }

        /* Featured Article */
        .featured-article {
            background: #fff;
            padding: 60px 0;
        }

        .featured-card {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-radius: 20px;
            padding: 40px;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 40px;
            align-items: center;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            border-left: 5px solid #d4af37;
            position: relative;
            overflow: hidden;
        }

        .featured-badge {
            position: absolute;
            top: 0;
            right: 0;
            background: linear-gradient(45deg, #d4af37, #f4d03f);
            color: #2c5530;
            padding: 10px 20px;
            border-radius: 0 20px 0 20px;
            font-weight: bold;
        }

        .featured-meta {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        .category-tag {
            background: #2c5530;
            color: #fff;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.85rem;
            font-weight: bold;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .read-time {
            color: #666;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .featured-card h2 {
            font-size: 2.2rem;
            color: #2c5530;
            margin-bottom: 15px;
            line-height: 1.3;
        }

        .featured-excerpt {
            color: #666;
            font-size: 1.1rem;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .featured-author {
            color: #888;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .featured-btn {
            background: linear-gradient(45deg, #2c5530, #1a3d1f);
            color: #fff;
            padding: 15px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .featured-btn:hover {
            background: linear-gradient(45deg, #d4af37, #f4d03f);
            color: #2c5530;
            transform: translateY(-2px);
        }

        .featured-image {
            text-align: center;
        }

        .featured-image i {
            font-size: 8rem;
            color: #d4af37;
            opacity: 0.3;
        }

        /* Articles Section */
        .articles-section {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .articles-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .articles-header h2 {
            font-size: 2.5rem;
            color: #2c5530;
        }

        .view-toggle {
            display: flex;
            gap: 10px;
        }

        .view-btn {
            background: #fff;
            border: 2px solid #e9ecef;
            padding: 10px 15px;
            border-radius: 8px;
            cursor: pointer;
            color: #666;
            transition: all 0.3s ease;
        }

        .view-btn.active,
        .view-btn:hover {
            background: #2c5530;
            color: #fff;
            border-color: #2c5530;
        }

        .articles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .articles-grid.list-view {
            grid-template-columns: 1fr;
        }

        .articles-grid.list-view .article-card {
            display: grid;
            grid-template-columns: auto 1fr auto;
            gap: 20px;
            align-items: center;
        }

        .article-card {
            background: #fff;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-left: 4px solid #d4af37;
            position: relative;
        }

        .article-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .article-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .article-header .fas {
            font-size: 1.5rem;
            color: #2c5530;
            margin-right: 10px;
        }

        .category {
            background: #2c5530;
            color: #fff;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .article-rating {
            display: flex;
            align-items: center;
            gap: 5px;
            color: #d4af37;
            font-weight: bold;
        }

        .article-card h3 {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: #2c5530;
            line-height: 1.4;
        }

        .article-excerpt {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .article-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 15px;
            font-size: 0.9rem;
            color: #888;
        }

        .article-meta span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .article-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 20px;
        }

        .tag {
            background: #f8f9fa;
            color: #2c5530;
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 0.75rem;
            font-weight: 600;
            border: 1px solid #e9ecef;
        }

        .read-btn {
            background: linear-gradient(45deg, #2c5530, #1a3d1f);
            color: #fff;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .read-btn:hover {
            background: linear-gradient(45deg, #d4af37, #f4d03f);
            color: #2c5530;
            transform: translateY(-2px);
        }

        /* Load More Section */
        .load-more-section {
            text-align: center;
            margin-top: 50px;
        }

        .load-more-btn {
            background: linear-gradient(45deg, #2c5530, #1a3d1f);
            color: #fff;
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .load-more-btn:hover {
            background: linear-gradient(45deg, #d4af37, #f4d03f);
            color: #2c5530;
            transform: translateY(-2px);
        }

        /* Newsletter Section */
        .newsletter-section {
            background: #fff;
            padding: 80px 0;
        }

        .newsletter-card {
            background: linear-gradient(135deg, #2c5530, #1a3d1f);
            color: #fff;
            padding: 60px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }

        .newsletter-card i {
            font-size: 4rem;
            color: #d4af37;
            margin-bottom: 20px;
        }

        .newsletter-card h3 {
            font-size: 2.2rem;
            margin-bottom: 15px;
        }

        .newsletter-card p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .newsletter-form {
            display: flex;
            max-width: 500px;
            margin: 0 auto;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        #emailInput {
            flex: 1;
            padding: 15px 20px;
            border: none;
            font-size: 1rem;
            outline: none;
        }

        .subscribe-btn {
            background: linear-gradient(45deg, #d4af37, #f4d03f);
            color: #2c5530;
            border: none;
            padding: 15px 25px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .subscribe-btn:hover {
            background: linear-gradient(45deg, #f4d03f, #d4af37);
        }

        /* Footer */
        .main-footer {
            background: #1a3d1f;
            color: #fff;
            padding: 50px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h4 {
            color: #d4af37;
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.5rem;
        }

        .footer-section ul li a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: #d4af37;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-links a {
            color: #fff;
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: #d4af37;
        }

        .footer-bottom {
            border-top: 1px solid rgba(212, 175, 55, 0.3);
            padding-top: 1rem;
            text-align: center;
            opacity: 0.8;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hamburger {
                display: flex;
            }
            
            .nav-menu {
                display: none;
                flex-direction: column;
                gap: 1rem;
                background: #2c5530;
                padding: 2rem;
                border-radius: 10px;
                position: absolute;
                top: 70px;
                right: 20px;
                width: 250px;
            }

            .nav-menu.active {
                display: flex;
            }
            
            .page-header h1 {
                font-size: 2rem;
            }
            
            .filter-controls {
                grid-template-columns: 1fr;
            }
            
            .featured-card {
                grid-template-columns: 1fr;
                text-align: center;
            }
            
            .featured-card h2 {
                font-size: 1.8rem;
            }
            
            .articles-grid {
                grid-template-columns: 1fr;
            }
            
            .articles-header {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }
            
            .article-meta {
                flex-direction: column;
                gap: 8px;
            }
            
            .newsletter-card {
                padding: 40px 20px;
            }
            
            .newsletter-form {
                flex-direction: column;
                border-radius: 15px;
            }
            
            .subscribe-btn {
                border-radius: 0 0 15px 15px;
            }
            
            #emailInput {
                border-radius: 15px 15px 0 0;
            }
        }

        @media (max-width: 480px) {
            .search-input-wrapper {
                flex-direction: column;
                border-radius: 15px;
            }
            
            .search-btn {
                border-radius: 0 0 15px 15px;
            }
            
            #searchInput {
                border-radius: 15px 15px 0 0;
            }
            
            .featured-badge {
                font-size: 0.8rem;
                padding: 8px 15px;
            }
            
            .article-card {
                padding: 20px;
            }
        }

        /* Animation effects */
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

        .article-card {
            animation: fadeInUp 0.6s ease forwards;
        }

        .article-card:nth-child(even) {
            animation-delay: 0.1s;
        }

        .article-card:nth-child(3n) {
            animation-delay: 0.2s;
        }

        /* Loading animation */
        .loading {
            text-align: center;
            padding: 40px;
            color: #666;
        }

        .loading i {
            font-size: 2rem;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* No results message */
        .no-results {
            text-align: center;
            padding: 60px 20px;
            color: #666;
        }

        .no-results i {
            font-size: 4rem;
            color: #d4af37;
            margin-bottom: 20px;
        }

        .no-results h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #2c5530;
        }
    </style>

    <script>
        // JavaScript functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const hamburger = document.querySelector('.hamburger');
            const navMenu = document.querySelector('.nav-menu');
            
            hamburger.addEventListener('click', function() {
                navMenu.classList.toggle('active');
                this.classList.toggle('active');
            });

            // Search functionality
            const searchInput = document.getElementById('searchInput');
            const searchBtn = document.getElementById('searchBtn');
            const categoryFilter = document.getElementById('categoryFilter');
            const sortBy = document.getElementById('sortBy');
            const articlesContainer = document.getElementById('articlesContainer');
            
            let allArticles = Array.from(document.querySelectorAll('.article-card'));
            
            function performSearch() {
                const searchTerm = searchInput.value.toLowerCase();
                const selectedCategory = categoryFilter.value;
                const sortOption = sortBy.value;
                
                let filteredArticles = allArticles.filter(article => {
                    const title = article.querySelector('h3').textContent.toLowerCase();
                    const excerpt = article.querySelector('.article-excerpt').textContent.toLowerCase();
                    const category = article.dataset.category;
                    
                    const matchesSearch = searchTerm === '' || title.includes(searchTerm) || excerpt.includes(searchTerm);
                    const matchesCategory = selectedCategory === '' || category === selectedCategory;
                    
                    return matchesSearch && matchesCategory;
                });
                
                // Sort articles
                filteredArticles.sort((a, b) => {
                    switch(sortOption) {
                        case 'newest':
                            return new Date(b.dataset.date) - new Date(a.dataset.date);
                        case 'oldest':
                            return new Date(a.dataset.date) - new Date(b.dataset.date);
                        case 'title':
                            return a.querySelector('h3').textContent.localeCompare(b.querySelector('h3').textContent);
                        case 'popular':
                            const aViews = parseInt(a.querySelector('.article-meta span:last-child').textContent.replace(/[^\d]/g, ''));
                            const bViews = parseInt(b.querySelector('.article-meta span:last-child').textContent.replace(/[^\d]/g, ''));
                            return bViews - aViews;
                        default:
                            return 0;
                    }
                });
                
                // Display results
                articlesContainer.innerHTML = '';
                
                if (filteredArticles.length === 0) {
                    articlesContainer.innerHTML = `
                        <div class="no-results">
                            <i class="fas fa-search"></i>
                            <h3>No articles found</h3>
                            <p>Try adjusting your search terms or filters</p>
                        </div>
                    `;
                } else {
                    filteredArticles.forEach(article => {
                        articlesContainer.appendChild(article);
                    });
                }
            }
            
            // Search event listeners
            searchBtn.addEventListener('click', performSearch);
            searchInput.addEventListener('keyup', function(e) {
                if (e.key === 'Enter') {
                    performSearch();
                }
            });
            categoryFilter.addEventListener('change', performSearch);
            sortBy.addEventListener('change', performSearch);
            
            // View toggle functionality
            const viewButtons = document.querySelectorAll('.view-btn');
            const articlesGrid = document.querySelector('.articles-grid');
            
            viewButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    viewButtons.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    
                    const view = this.dataset.view;
                    if (view === 'list') {
                        articlesGrid.classList.add('list-view');
                    } else {
                        articlesGrid.classList.remove('list-view');
                    }
                });
            });
            
            // Load more functionality
            const loadMoreBtn = document.getElementById('loadMoreBtn');
            let articlesLoaded = 8;
            const articlesPerLoad = 4;
            
            // Simulate additional articles (in a real app, this would fetch from server)
            const additionalArticles = [
                {
                    category: 'worship',
                    icon: 'fas fa-moon',
                    title: 'The Night Prayer: Qiyam al-Layl',
                    excerpt: 'Discover the spiritual benefits of the night prayer and how it strengthens our connection with Allah during the peaceful hours of the night.',
                    date: 'February 25, 2025',
                    readTime: '5 min read',
                    views: '687 views',
                    rating: '4.7',
                    tags: ['Night Prayer', 'Worship', 'Spirituality']
                },
                {
                    category: 'character',
                    icon: 'fas fa-handshake',
                    title: 'Honesty in Business: Islamic Ethics',
                    excerpt: 'Learn about the importance of honesty and integrity in business dealings according to Islamic teachings and prophetic guidance.',
                    date: 'February 22, 2025',
                    readTime: '6 min read',
                    views: '543 views',
                    rating: '4.6',
                    tags: ['Business', 'Ethics', 'Honesty']
                }
            ];
            
            loadMoreBtn.addEventListener('click', function() {
                // Show loading state
                this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading...';
                this.disabled = true;
                
                // Simulate loading delay
                setTimeout(() => {
                    // Add more articles (in real app, fetch from server)
                    additionalArticles.forEach(articleData => {
                        const articleElement = createArticleElement(articleData);
                        articlesContainer.appendChild(articleElement);
                        allArticles.push(articleElement);
                    });
                    
                    // Reset button
                    this.innerHTML = '<i class="fas fa-plus-circle"></i> Load More Articles';
                    this.disabled = false;
                    
                    // If no more articles to load
                    if (articlesLoaded >= 20) {
                        this.style.display = 'none';
                    }
                    
                    articlesLoaded += articlesPerLoad;
                }, 1500);
            });
            
            function createArticleElement(data) {
                const article = document.createElement('article');
                article.className = 'article-card';
                article.dataset.category = data.category;
                article.dataset.date = data.date;
                
                article.innerHTML = `
                    <div class="article-header">
                        <i class="${data.icon}"></i>
                        <span class="category">${data.category.charAt(0).toUpperCase() + data.category.slice(1)}</span>
                        <div class="article-rating">
                            <i class="fas fa-star"></i>
                            <span>${data.rating}</span>
                        </div>
                    </div>
                    <h3>${data.title}</h3>
                    <p class="article-excerpt">${data.excerpt}</p>
                    <div class="article-meta">
                        <span><i class="fas fa-calendar"></i> ${data.date}</span>
                        <span><i class="fas fa-clock"></i> ${data.readTime}</span>
                        <span><i class="fas fa-eye"></i> ${data.views}</span>
                    </div>
                    <div class="article-tags">
                        ${data.tags.map(tag => `<span class="tag">${tag}</span>`).join('')}
                    </div>
                    <a href="#" class="read-btn">Read Article</a>
                `;
                
                return article;
            }
            
            // Newsletter subscription
            const subscribeBtn = document.getElementById('subscribeBtn');
            const emailInput = document.getElementById('emailInput');
            
            subscribeBtn.addEventListener('click', function() {
                const email = emailInput.value.trim();
                
                if (email === '') {
                    alert('Please enter your email address');
                    return;
                }
                
                if (!isValidEmail(email)) {
                    alert('Please enter a valid email address');
                    return;
                }
                
                // Show loading state
                this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Subscribing...';
                this.disabled = true;
                
                // Simulate subscription
                setTimeout(() => {
                    alert('Thank you for subscribing to Islamic Reflections newsletter!');
                    emailInput.value = '';
                    this.innerHTML = 'Subscribe';
                    this.disabled = false;
                }, 2000);
            });
            
            emailInput.addEventListener('keyup', function(e) {
                if (e.key === 'Enter') {
                    subscribeBtn.click();
                }
            });
            
            function isValidEmail(email) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            }
            
            // Article click handlers
            document.querySelectorAll('.read-btn, .featured-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const articleTitle = this.closest('.article-card, .featured-card').querySelector('h3, h2').textContent;
                    alert(`Opening article: "${articleTitle}"\n\nIn a real application, this would navigate to the full article page.`);
                });
            });
            
            // Smooth scrolling for any anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
            
            // Header scroll effect
            window.addEventListener('scroll', function() {
                const header = document.querySelector('.main-header');
                if (window.scrollY > 50) {
                    header.style.background = 'rgba(26, 61, 31, 0.95)';
                    header.style.backdropFilter = 'blur(10px)';
                } else {
                    header.style.background = 'linear-gradient(135deg, #2c5530, #1a3d1f)';
                    header.style.backdropFilter = 'none';
                }
            });
            
            // Animate articles on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);
            
            // Observe all article cards
            document.querySelectorAll('.article-card').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(card);
            });
        });
    </script>
</body>
</html>