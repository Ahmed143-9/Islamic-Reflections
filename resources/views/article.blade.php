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
                    <li><a href="/article" class="nav-link">Articles</a></li>
                    <li><a href="/quran" class="nav-link">Quran</a></li>
                    <li><a href="/hadith" class="nav-link">Hadith</a></li>
                    <li><a href="/about" class="nav-link">About</a></li>
                </ul>
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

    <!-- Articles Grid -->
    <section class="articles-section">
        <div class="container">
            <div class="articles-grid">
                <!-- Article 1 -->
                <article class="article-card">
                    <div class="article-header">
                        <i class="fas fa-quran"></i>
                        <span class="category">Quran Studies</span>
                    </div>
                    <h3>Understanding Surah Al-Fatiha</h3>
                    <p class="article-excerpt">
                        The opening chapter of the Quran holds profound meanings and serves as a complete prayer. 
                        Discover the deep wisdom behind each verse of this blessed surah.
                    </p>
                    <div class="article-meta">
                        <span><i class="fas fa-calendar"></i> March 15, 2025</span>
                        <span><i class="fas fa-clock"></i> 5 min read</span>
                    </div>
                    <a href="#" class="read-btn">Read Article</a>
                </article>

                <!-- Article 2 -->
                <article class="article-card">
                    <div class="article-header">
                        <i class="fas fa-heart"></i>
                        <span class="category">Spirituality</span>
                    </div>
                    <h3>The Beauty of Islamic Character</h3>
                    <p class="article-excerpt">
                        Learn about the noble characteristics that Islam teaches us to develop, 
                        following the perfect example of Prophet Muhammad (PBUH).
                    </p>
                    <div class="article-meta">
                        <span><i class="fas fa-calendar"></i> March 12, 2025</span>
                        <span><i class="fas fa-clock"></i> 7 min read</span>
                    </div>
                    <a href="#" class="read-btn">Read Article</a>
                </article>

                <!-- Article 3 -->
                <article class="article-card">
                    <div class="article-header">
                        <i class="fas fa-hands-praying"></i>
                        <span class="category">Worship</span>
                    </div>
                    <h3>The Power of Dua in Daily Life</h3>
                    <p class="article-excerpt">
                        Discover how supplication connects us with Allah and brings peace, 
                        guidance, and blessings into our everyday lives.
                    </p>
                    <div class="article-meta">
                        <span><i class="fas fa-calendar"></i> March 10, 2025</span>
                        <span><i class="fas fa-clock"></i> 6 min read</span>
                    </div>
                    <a href="#" class="read-btn">Read Article</a>
                </article>

                <!-- Article 4 -->
                <article class="article-card">
                    <div class="article-header">
                        <i class="fas fa-moon"></i>
                        <span class="category">Ramadan</span>
                    </div>
                    <h3>Preparing for the Blessed Month</h3>
                    <p class="article-excerpt">
                        Learn how to spiritually and practically prepare for Ramadan to make 
                        the most of this sacred month of fasting and reflection.
                    </p>
                    <div class="article-meta">
                        <span><i class="fas fa-calendar"></i> March 8, 2025</span>
                        <span><i class="fas fa-clock"></i> 8 min read</span>
                    </div>
                    <a href="#" class="read-btn">Read Article</a>
                </article>

                <!-- Article 5 -->
                <article class="article-card">
                    <div class="article-header">
                        <i class="fas fa-users"></i>
                        <span class="category">Community</span>
                    </div>
                    <h3>Building Strong Muslim Communities</h3>
                    <p class="article-excerpt">
                        Explore the Islamic principles of unity, brotherhood, and mutual support 
                        that help create thriving Muslim communities worldwide.
                    </p>
                    <div class="article-meta">
                        <span><i class="fas fa-calendar"></i> March 5, 2025</span>
                        <span><i class="fas fa-clock"></i> 9 min read</span>
                    </div>
                    <a href="#" class="read-btn">Read Article</a>
                </article>

                <!-- Article 6 -->
                <article class="article-card">
                    <div class="article-header">
                        <i class="fas fa-seedling"></i>
                        <span class="category">Personal Growth</span>
                    </div>
                    <h3>Patience in Islamic Teachings</h3>
                    <p class="article-excerpt">
                        Understanding the virtue of patience (Sabr) in Islam and how it transforms 
                        our response to life's challenges and tests.
                    </p>
                    <div class="article-meta">
                        <span><i class="fas fa-calendar"></i> March 3, 2025</span>
                        <span><i class="fas fa-clock"></i> 6 min read</span>
                    </div>
                    <a href="#" class="read-btn">Read Article</a>
                </article>
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

        /* Articles Section */
        .articles-section {
            padding: 60px 0;
        }

        .articles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .article-card {
            background: #fff;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-left: 4px solid #d4af37;
        }

        .article-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        .article-header {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .article-header i {
            font-size: 1.5rem;
            color: #2c5530;
            margin-right: 10px;
        }

        .category {
            background: #2c5530;
            color: #fff;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .article-card h3 {
            font-size: 1.4rem;
            margin-bottom: 1rem;
            color: #2c5530;
            line-height: 1.4;
        }

        .article-excerpt {
            color: #666;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .article-meta {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
            color: #888;
        }

        .article-meta span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .read-btn {
            background: linear-gradient(45deg, #2c5530, #1a3d1f);
            color: #fff;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s ease, transform 0.3s ease;
            display: inline-block;
        }

        .read-btn:hover {
            background: linear-gradient(45deg, #d4af37, #f4d03f);
            color: #2c5530;
            transform: translateY(-2px);
        }

        /* Footer */
        .main-footer {
            background: #1a3d1f;
            color: #fff;
            padding: 30px 0;
            text-align: center;
            margin-top: 60px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }
            
            .page-header h1 {
                font-size: 2rem;
            }
            
            .articles-grid {
                grid-template-columns: 1fr;
            }
            
            .article-meta {
                flex-direction: column;
                gap: 0.5rem;
            }
        }
    </style>
</body>
</html>