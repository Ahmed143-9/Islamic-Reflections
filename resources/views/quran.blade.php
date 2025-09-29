<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quran - Islamic Reflections</title>
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
                    <li><a href="/quran" class="nav-link active">Quran</a></li>
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
            <h1><i class="fas fa-quran"></i> The Holy Quran</h1>
            <p>Read, reflect, and find guidance in Allah's final revelation</p>
        </div>
    </section>

    <!-- Daily Verse -->
    <section class="daily-verse">
        <div class="container">
            <div class="verse-card">
                <div class="verse-badge">
                    <i class="fas fa-star"></i> Verse of the Day
                </div>
                <div class="arabic-text" id="dailyVerseArabic">
                    وَمَن يَتَّقِ ٱللَّهَ يَجْعَل لَّهُۥ مَخْرَجًا وَيَرْزُقْهُ مِنْ حَيْثُ لَا يَحْتَسِبُ
                </div>
                <div class="translation" id="dailyVerseTranslation">
                    "And whoever fears Allah - He will make for him a way out and will provide for him from where he does not expect."
                </div>
                <div class="reference" id="dailyVerseReference">- Quran 65:2-3</div>
                <button class="audio-btn" id="playDailyVerse">
                    <i class="fas fa-play"></i> Listen
                </button>
            </div>
        </div>
    </section>

    <!-- Search and Navigation -->
    <section class="quran-search">
        <div class="container">
            <div class="search-container">
                <div class="search-input-wrapper">
                    <input type="text" id="quranSearch" placeholder="Search verses, surahs, or topics...">
                    <button class="search-btn" id="searchBtn">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <div class="quick-nav">
                    <button class="nav-btn" id="jumpToSurah">
                        <i class="fas fa-list"></i> Jump to Surah
                    </button>
                    <button class="nav-btn" id="jumpToPage">
                        <i class="fas fa-book-open"></i> Go to Page
                    </button>
                    <button class="nav-btn" id="randomVerse">
                        <i class="fas fa-random"></i> Random Verse
                    </button>
                    <button class="nav-btn" id="bookmarks">
                        <i class="fas fa-bookmark"></i> Bookmarks
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Quran Features -->
    <section class="quran-features">
        <div class="container">
            <h2 class="section-title">Explore the Quran</h2>
            <div class="features-grid">
                <div class="feature-card" data-feature="browse">
                    <i class="fas fa-list"></i>
                    <h3>Browse Surahs</h3>
                    <p>Explore all 114 chapters of the Quran with Arabic text, translations, and commentary.</p>
                    <div class="feature-stats">
                        <span>114 Surahs • 6,236 Verses</span>
                    </div>
                    <button class="feature-btn">View All Surahs</button>
                </div>

                <div class="feature-card" data-feature="audio">
                    <i class="fas fa-volume-up"></i>
                    <h3>Audio Recitation</h3>
                    <p>Beautiful recitations by renowned Qaris to help with pronunciation and memorization.</p>
                    <div class="feature-stats">
                        <span>Multiple Reciters Available</span>
                    </div>
                    <button class="feature-btn">Listen Now</button>
                </div>

                <div class="feature-card" data-feature="translation">
                    <i class="fas fa-language"></i>
                    <h3>Translations</h3>
                    <p>Read the Quran in multiple languages with authentic scholarly translations.</p>
                    <div class="feature-stats">
                        <span>English • Arabic • More</span>
                    </div>
                    <button class="feature-btn">View Translations</button>
                </div>

                <div class="feature-card" data-feature="tafsir">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Tafsir & Commentary</h3>
                    <p>In-depth study materials and scholarly explanations for deeper understanding.</p>
                    <div class="feature-stats">
                        <span>Classical & Contemporary</span>
                    </div>
                    <button class="feature-btn">Study Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Surah Browser -->
    <section class="surah-browser" id="surahBrowser">
        <div class="container">
            <div class="browser-header">
                <h2>Browse Surahs</h2>
                <div class="view-controls">
                    <div class="filter-controls">
                        <select id="revelationType">
                            <option value="">All Surahs</option>
                            <option value="meccan">Meccan</option>
                            <option value="medinan">Medinan</option>
                        </select>
                        <select id="sortSurahs">
                            <option value="number">By Number</option>
                            <option value="name">By Name</option>
                            <option value="verses">By Verses Count</option>
                            <option value="revelation">By Revelation</option>
                        </select>
                    </div>
                    <div class="view-toggle">
                        <button class="view-btn active" data-view="grid">
                            <i class="fas fa-th-large"></i>
                        </button>
                        <button class="view-btn" data-view="list">
                            <i class="fas fa-list"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="surahs-grid" id="surahsContainer">
                <!-- Surahs will be loaded here dynamically -->
            </div>
            
            <div class="load-more-section">
                <button class="load-more-btn" id="loadMoreSurahs">
                    <i class="fas fa-plus-circle"></i>
                    Load More Surahs
                </button>
            </div>
        </div>
    </section>

    <!-- Surah Reader Modal -->
    <div class="modal" id="surahModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="modalSurahTitle">Al-Fatiha</h3>
                <div class="modal-controls">
                    <button class="control-btn" id="playAudio">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="control-btn" id="bookmarkSurah">
                        <i class="fas fa-bookmark"></i>
                    </button>
                    <button class="control-btn" id="shareVerse">
                        <i class="fas fa-share"></i>
                    </button>
                    <button class="modal-close">&times;</button>
                </div>
            </div>
            <div class="modal-body">
                <div class="surah-info">
                    <div class="bismillah">
                        بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ
                    </div>
                    <div class="translation-bismillah">
                        In the name of Allah, the Most Gracious, the Most Merciful
                    </div>
                </div>
                <div class="verses-container" id="versesContainer">
                    <!-- Verses will be loaded here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Reading Progress -->
    <section class="reading-progress">
        <div class="container">
            <div class="progress-card">
                <h3>Your Quran Reading Progress</h3>
                <div class="progress-stats">
                    <div class="stat">
                        <i class="fas fa-book-open"></i>
                        <span class="stat-number" id="surahsRead">0</span>
                        <span class="stat-label">Surahs Read</span>
                    </div>
                    <div class="stat">
                        <i class="fas fa-eye"></i>
                        <span class="stat-number" id="versesRead">0</span>
                        <span class="stat-label">Verses Read</span>
                    </div>
                    <div class="stat">
                        <i class="fas fa-bookmark"></i>
                        <span class="stat-number" id="bookmarkedVerses">0</span>
                        <span class="stat-label">Bookmarked</span>
                    </div>
                    <div class="stat">
                        <i class="fas fa-clock"></i>
                        <span class="stat-number" id="readingTime">0</span>
                        <span class="stat-label">Minutes Today</span>
                    </div>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 0%"></div>
                </div>
                <p class="progress-text">Keep reading to complete your daily goal!</p>
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

        /* Daily Verse */
        .daily-verse {
            background: #fff;
            padding: 60px 0;
        }

        .verse-card {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            position: relative;
            border-left: 5px solid #d4af37;
        }

        .verse-badge {
            position: absolute;
            top: 0;
            right: 0;
            background: linear-gradient(45deg, #d4af37, #f4d03f);
            color: #2c5530;
            padding: 10px 20px;
            border-radius: 0 20px 0 20px;
            font-weight: bold;
            font-size: 0.9rem;
        }

        .arabic-text {
            font-size: 2.5rem;
            margin: 2rem 0 1.5rem;
            color: #d4af37;
            line-height: 1.8;
            direction: rtl;
            font-weight: 500;
        }

        .translation {
            font-size: 1.4rem;
            margin-bottom: 1rem;
            font-style: italic;
            color: #2c5530;
            line-height: 1.6;
        }

        .reference {
            font-size: 1rem;
            color: #666;
            font-weight: bold;
            margin-bottom: 2rem;
        }

        .audio-btn {
            background: linear-gradient(45deg, #2c5530, #1a3d1f);
            color: #fff;
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .audio-btn:hover {
            background: linear-gradient(45deg, #d4af37, #f4d03f);
            color: #2c5530;
            transform: translateY(-2px);
        }

        /* Search Section */
        .quran-search {
            background: #fff;
            padding: 40px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .search-input-wrapper {
            display: flex;
            margin-bottom: 20px;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 0 auto 20px;
        }

        #quranSearch {
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

        .quick-nav {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .nav-btn {
            background: #2c5530;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .nav-btn:hover {
            background: #d4af37;
            color: #2c5530;
            transform: translateY(-2px);
        }

        /* Quran Features */
        .quran-features {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2c5530;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background: #fff;
            padding: 35px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            border-left: 4px solid #d4af37;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .feature-card i {
            font-size: 3.5rem;
            color: #d4af37;
            margin-bottom: 1.5rem;
        }

        .feature-card h3 {
            color: #2c5530;
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .feature-card p {
            color: #666;
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .feature-stats {
            background: #f8f9fa;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            color: #666;
            margin-bottom: 1.5rem;
            display: inline-block;
        }

        .feature-btn {
            background: linear-gradient(45deg, #2c5530, #1a3d1f);
            color: #fff;
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .feature-btn:hover {
            background: linear-gradient(45deg, #d4af37, #f4d03f);
            color: #2c5530;
            transform: translateY(-2px);
        }

        /* Surah Browser */
        .surah-browser {
            padding: 80px 0;
            background: #fff;
        }

        .browser-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .browser-header h2 {
            font-size: 2.2rem;
            color: #2c5530;
        }

        .view-controls {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .filter-controls {
            display: flex;
            gap: 10px;
        }

        .filter-controls select {
            padding: 10px 15px;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            font-size: 0.9rem;
            background: #fff;
            color: #333;
            cursor: pointer;
            transition: border-color 0.3s ease;
        }

        .filter-controls select:focus {
            outline: none;
            border-color: #d4af37;
        }

        .view-toggle {
            display: flex;
            gap: 5px;
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

        .surahs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .surahs-grid.list-view {
            grid-template-columns: 1fr;
        }

        .surah-card {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border-left: 4px solid #d4af37;
            cursor: pointer;
        }

        .surah-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .surah-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .surah-number {
            background: #2c5530;
            color: #fff;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.1rem;
        }

        .surah-info h3 {
            color: #2c5530;
            font-size: 1.4rem;
            margin-bottom: 5px;
        }

        .surah-details {
            font-size: 0.9rem;
            color: #666;
            display: flex;
            gap: 15px;
        }

        .arabic-name {
            font-size: 1.8rem;
            color: #d4af37;
            text-align: center;
            margin: 15px 0;
            direction: rtl;
            font-weight: 500;
        }

        .surah-meaning {
            color: #666;
            font-style: italic;
            text-align: center;
            margin-bottom: 20px;
        }

        .surah-actions {
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .action-btn {
            background: #2c5530;
            color: #fff;
            border: none;
            padding: 8px 15px;
            border-radius: 15px;
            cursor: pointer;
            font-size: 0.8rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .action-btn:hover {
            background: #d4af37;
            color: #2c5530;
        }

        /* Load More */
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

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            backdrop-filter: blur(5px);
        }

        .modal-content {
            background-color: #fff;
            margin: 2% auto;
            padding: 0;
            border-radius: 15px;
            width: 90%;
            max-width: 800px;
            max-height: 90vh;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,0.3);
        }

        .modal-header {
            background: linear-gradient(135deg, #2c5530, #1a3d1f);
            color: #fff;
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-header h3 {
            font-size: 1.8rem;
            color: #d4af37;
        }

        .modal-controls {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .control-btn {
            background: rgba(212, 175, 55, 0.2);
            color: #d4af37;
            border: none;
            padding: 8px 12px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .control-btn:hover {
            background: #d4af37;
            color: #2c5530;
        }

        .modal-close {
            background: none;
            color: #fff;
            border: none;
            font-size: 2rem;
            cursor: pointer;
            padding: 0 5px;
        }

        .modal-body {
            padding: 30px;
            max-height: 70vh;
            overflow-y: auto;
        }

        .surah-info {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #f0f0f0;
        }

        .bismillah {
            font-size: 2rem;
            color: #d4af37;
            margin-bottom: 10px;
            direction: rtl;
            font-weight: 500;
        }

        .translation-bismillah {
            font-style: italic;
            color: #666;
            font-size: 1.1rem;
        }

        .verses-container {
            max-height: 400px;
            overflow-y: auto;
            padding-right: 10px;
        }

        .verse {
            margin-bottom: 25px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 10px;
            border-left: 3px solid #d4af37;
        }

        .verse-number {
            background: #2c5530;
            color: #fff;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .verse-arabic {
            font-size: 1.8rem;
            color: #2c5530;
            margin-bottom: 10px;
            direction: rtl;
            text-align: right;
            line-height: 2;
            font-weight: 500;
        }

        .verse-translation {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.6;
            font-style: italic;
        }

        /* Reading Progress */
        .reading-progress {
            padding: 60px 0;
            background: linear-gradient(135deg, #2c5530, #1a3d1f);
            color: #fff;
        }

        .progress-card {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            border: 1px solid rgba(212, 175, 55, 0.3);
        }

        .progress-card h3 {
            font-size: 2rem;
            margin-bottom: 2rem;
            color: #d4af37;
        }

        .progress-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat {
            text-align: center;
        }

        .stat i {
            font-size: 2rem;
            color: #d4af37;
            margin-bottom: 10px;
        }

        .stat-number {
            display: block;
            font-size: 2.5rem;
            font-weight: bold;
            color: #fff;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        .progress-bar {
            background: rgba(255,255,255,0.2);
            height: 10px;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 15px;
        }

        .progress-fill {
            background: linear-gradient(45deg, #d4af37, #f4d03f);
            height: 100%;
            border-radius: 5px;
            transition: width 0.5s ease;
        }

        .progress-text {
            opacity: 0.9;
            font-size: 1.1rem;
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

        /* For toggle button */

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
            
            .arabic-text {
                font-size: 2rem;
            }
            
            .translation {
                font-size: 1.2rem;
            }
            
            .verse-card {
                padding: 30px 20px;
            }
            
            .features-grid {
                grid-template-columns: 1fr;
            }
            
            .browser-header {
                flex-direction: column;
                align-items: stretch;
            }
            
            .view-controls {
                justify-content: space-between;
            }
            
            .filter-controls {
                flex: 1;
            }
            
            .filter-controls select {
                flex: 1;
            }
            
            .surahs-grid {
                grid-template-columns: 1fr;
            }
            
            .quick-nav {
                justify-content: center;
            }
            
            .nav-btn {
                font-size: 0.8rem;
                padding: 8px 15px;
            }
            
            .modal-content {
                width: 95%;
                margin: 5% auto;
            }
            
            .modal-header {
                padding: 15px 20px;
            }
            
            .modal-body {
                padding: 20px;
            }
            
            .verse-arabic {
                font-size: 1.5rem;
            }
            
            .progress-stats {
                grid-template-columns: repeat(2, 1fr);
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
            
            #quranSearch {
                border-radius: 15px 15px 0 0;
            }
            
            .quick-nav {
                flex-direction: column;
                gap: 10px;
            }
            
            .nav-btn {
                width: 100%;
                justify-content: center;
            }
            
            .surah-header {
                flex-direction: column;
                align-items: center;
                text-align: center;
                gap: 10px;
            }
            
            .surah-actions {
                flex-direction: column;
            }
            
            .action-btn {
                justify-content: center;
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

        .surah-card {
            animation: fadeInUp 0.6s ease forwards;
        }

        .feature-card {
            animation: fadeInUp 0.8s ease forwards;
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

        /* Smooth scrollbar for modal */
        .verses-container::-webkit-scrollbar {
            width: 6px;
        }

        .verses-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 3px;
        }

        .verses-container::-webkit-scrollbar-thumb {
            background: #d4af37;
            border-radius: 3px;
        }

        .verses-container::-webkit-scrollbar-thumb:hover {
            background: #2c5530;
        }

        /* Verse hover effect */
        .verse:hover {
            background: #e9ecef;
            transform: translateX(5px);
            transition: all 0.3s ease;
        }
    </style>

    <script>
        // Sample Surah data
        const surahsData = [
            {
                number: 1,
                name: "Al-Fatiha",
                arabicName: "الفاتحة",
                englishName: "The Opening",
                type: "meccan",
                verses: 7,
                verses_data: [
                    {
                        number: 1,
                        arabic: "بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ",
                        translation: "In the name of Allah, the Most Gracious, the Most Merciful."
                    },
                    {
                        number: 2,
                        arabic: "ٱلْحَمْدُ لِلَّهِ رَبِّ ٱلْعَٰلَمِينَ",
                        translation: "Praise be to Allah, Lord of all the worlds."
                    },
                    {
                        number: 3,
                        arabic: "ٱلرَّحْمَٰنِ ٱلرَّحِيمِ",
                        translation: "The Most Gracious, the Most Merciful."
                    },
                    {
                        number: 4,
                        arabic: "مَٰلِكِ يَوْمِ ٱلدِّينِ",
                        translation: "Master of the Day of Judgment."
                    },
                    {
                        number: 5,
                        arabic: "إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ",
                        translation: "You alone we worship, and You alone we ask for help."
                    },
                    {
                        number: 6,
                        arabic: "ٱهْدِنَا ٱلصِّرَٰطَ ٱلْمُسْتَقِيمَ",
                        translation: "Guide us along the straight path."
                    },
                    {
                        number: 7,
                        arabic: "صِرَٰطَ ٱلَّذِينَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ ٱلْمَغْضُوبِ عَلَيْهِمْ وَلَا ٱلضَّآلِّينَ",
                        translation: "The path of those You have blessed—not those You are displeased with, or those who have gone astray."
                    }
                ]
            },
            {
                number: 2,
                name: "Al-Baqarah",
                arabicName: "البقرة",
                englishName: "The Cow",
                type: "medinan",
                verses: 286,
                verses_data: [
                    {
                        number: 1,
                        arabic: "الم",
                        translation: "Alif-Lām-Mīm."
                    },
                    {
                        number: 2,
                        arabic: "ذَٰلِكَ ٱلْكِتَٰبُ لَا رَيْبَ ۛ فِيهِ ۛ هُدًى لِّلْمُتَّقِينَ",
                        translation: "This is the Book! There is no doubt about it—a guide for those mindful of Allah."
                    }
                ]
            },
            {
                number: 112,
                name: "Al-Ikhlas",
                arabicName: "الإخلاص",
                englishName: "The Sincerity",
                type: "meccan",
                verses: 4,
                verses_data: [
                    {
                        number: 1,
                        arabic: "قُلْ هُوَ ٱللَّهُ أَحَدٌ",
                        translation: "Say: He is Allah, the One!"
                    },
                    {
                        number: 2,
                        arabic: "ٱللَّهُ ٱلصَّمَدُ",
                        translation: "Allah—the Eternal, Absolute."
                    },
                    {
                        number: 3,
                        arabic: "لَمْ يَلِدْ وَلَمْ يُولَدْ",
                        translation: "He begets not, nor is He begotten."
                    },
                    {
                        number: 4,
                        arabic: "وَلَمْ يَكُن لَّهُۥ كُفُوًا أَحَدٌۢ",
                        translation: "And there is none comparable to Him."
                    }
                ]
            },
            {
                number: 113,
                name: "Al-Falaq",
                arabicName: "الفلق",
                englishName: "The Daybreak",
                type: "meccan",
                verses: 5,
                verses_data: [
                    {
                        number: 1,
                        arabic: "قُلْ أَعُوذُ بِرَبِّ ٱلْفَلَقِ",
                        translation: "Say: I seek refuge in the Lord of the daybreak"
                    },
                    {
                        number: 2,
                        arabic: "مِن شَرِّ مَا خَلَقَ",
                        translation: "From the evil of what He created"
                    },
                    {
                        number: 3,
                        arabic: "وَمِن شَرِّ غَاسِقٍ إِذَا وَقَبَ",
                        translation: "And from the evil of the night when it settles"
                    },
                    {
                        number: 4,
                        arabic: "وَمِن شَرِّ ٱلنَّفَّٰثَٰتِ فِى ٱلْعُقَدِ",
                        translation: "And from the evil of the blowers in knots"
                    },
                    {
                        number: 5,
                        arabic: "وَمِن شَرِّ حَاسِدٍ إِذَا حَسَدَ",
                        translation: "And from the evil of an envier when he envies"
                    }
                ]
            },
            {
                number: 114,
                name: "An-Nas",
                arabicName: "الناس",
                englishName: "Mankind",
                type: "meccan",
                verses: 6,
                verses_data: [
                    {
                        number: 1,
                        arabic: "قُلْ أَعُوذُ بِرَبِّ ٱلنَّاسِ",
                        translation: "Say: I seek refuge in the Lord of mankind"
                    },
                    {
                        number: 2,
                        arabic: "مَلِكِ ٱلنَّاسِ",
                        translation: "The King of mankind"
                    },
                    {
                        number: 3,
                        arabic: "إِلَٰهِ ٱلنَّاسِ",
                        translation: "The God of mankind"
                    },
                    {
                        number: 4,
                        arabic: "مِن شَرِّ ٱلْوَسْوَاسِ ٱلْخَنَّاسِ",
                        translation: "From the evil of the retreating whisperer"
                    },
                    {
                        number: 5,
                        arabic: "ٱلَّذِى يُوَسْوِسُ فِى صُدُورِ ٱلنَّاسِ",
                        translation: "Who whispers [evil] into the breasts of mankind"
                    },
                    {
                        number: 6,
                        arabic: "مِنَ ٱلْجِنَّةِ وَٱلنَّاسِ",
                        translation: "From among the jinn and mankind"
                    }
                ]
            },
            {
                number: 36,
                name: "Ya-Sin",
                arabicName: "يس",
                englishName: "Ya-Sin",
                type: "meccan",
                verses: 83,
                verses_data: [
                    {
                        number: 1,
                        arabic: "يس",
                        translation: "Ya-Sin."
                    },
                    {
                        number: 2,
                        arabic: "وَٱلْقُرْءَانِ ٱلْحَكِيمِ",
                        translation: "By the wise Quran."
                    }
                ]
            }
        ];

        // State management
        let currentSurahs = [];
        let surahsLoaded = 6;
        let readingStats = {
            surahsRead: 0,
            versesRead: 0,
            bookmarkedVerses: 0,
            readingTime: 0
        };

        // DOM elements
        const surahsContainer = document.getElementById('surahsContainer');
        const modal = document.getElementById('surahModal');
        const versesContainer = document.getElementById('versesContainer');
        const modalSurahTitle = document.getElementById('modalSurahTitle');
        const loadMoreBtn = document.getElementById('loadMoreSurahs');

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            loadSurahs();
            setupEventListeners();
            updateReadingStats();
            setupDailyVerseRotation();
        });

        // Load Surahs
        function loadSurahs() {
            const revelationType = document.getElementById('revelationType').value;
            const sortBy = document.getElementById('sortSurahs').value;
            
            let filteredSurahs = surahsData.filter(surah => {
                return revelationType === '' || surah.type === revelationType;
            });

            // Sort surahs
            filteredSurahs.sort((a, b) => {
                switch(sortBy) {
                    case 'number': return a.number - b.number;
                    case 'name': return a.name.localeCompare(b.name);
                    case 'verses': return b.verses - a.verses;
                    case 'revelation': return a.type.localeCompare(b.type);
                    default: return a.number - b.number;
                }
            });

            currentSurahs = filteredSurahs.slice(0, surahsLoaded);
            renderSurahs();
        }

        // Render Surahs
        function renderSurahs() {
            surahsContainer.innerHTML = '';
            
            currentSurahs.forEach(surah => {
                const surahCard = createSurahCard(surah);
                surahsContainer.appendChild(surahCard);
            });
        }

        // Create Surah Card
        function createSurahCard(surah) {
            const card = document.createElement('div');
            card.className = 'surah-card';
            card.setAttribute('data-surah-id', surah.number);
            
            card.innerHTML = `
                <div class="surah-header">
                    <div class="surah-number">${surah.number}</div>
                    <div class="surah-info">
                        <h3>${surah.name}</h3>
                        <div class="surah-details">
                            <span>${surah.verses} verses</span>
                            <span>${surah.type.charAt(0).toUpperCase() + surah.type.slice(1)}</span>
                        </div>
                    </div>
                </div>
                <div class="arabic-name">${surah.arabicName}</div>
                <div class="surah-meaning">"${surah.englishName}"</div>
                <div class="surah-actions">
                    <button class="action-btn read-btn" onclick="openSurah(${surah.number})">
                        <i class="fas fa-book-open"></i> Read
                    </button>
                    <button class="action-btn audio-btn" onclick="playAudio(${surah.number})">
                        <i class="fas fa-play"></i> Listen
                    </button>
                    <button class="action-btn bookmark-btn" onclick="bookmarkSurah(${surah.number})">
                        <i class="fas fa-bookmark"></i> Save
                    </button>
                </div>
            `;
            
            return card;
        }

        // Open Surah Modal
        function openSurah(surahNumber) {
            const surah = surahsData.find(s => s.number === surahNumber);
            if (!surah) return;

            modalSurahTitle.textContent = `${surah.number}. ${surah.name}`;
            
            // Render verses
            versesContainer.innerHTML = '';
            surah.verses_data.forEach(verse => {
                const verseElement = document.createElement('div');
                verseElement.className = 'verse';
                verseElement.innerHTML = `
                    <div class="verse-number">${verse.number}</div>
                    <div class="verse-arabic">${verse.arabic}</div>
                    <div class="verse-translation">${verse.translation}</div>
                `;
                versesContainer.appendChild(verseElement);
            });

            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
            
            // Update reading stats
            readingStats.versesRead += surah.verses_data.length;
            if (!readingStats.readSurahs) readingStats.readSurahs = new Set();
            readingStats.readSurahs.add(surahNumber);
            readingStats.surahsRead = readingStats.readSurahs.size;
            updateReadingStats();
        }

        // Setup Event Listeners
        // function setupEventListeners() {
        //     // Mobile menu toggle
        //     const hamburger = document.querySelector('.hamburger');
        //     const navMenu = document.querySelector('.nav-menu');
            
        //     hamburger.addEventListener('click', function() {
        //         navMenu.classList.toggle('active');
        //         this.classList.toggle('active');
        //     });

            // Modal close
            document.querySelector('.modal-close').addEventListener('click', closeModal);
            window.addEventListener('click', function(e) {
                if (e.target === modal) closeModal();
            });

            // Escape key to close modal
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && modal.style.display === 'block') {
                    closeModal();
                }
            });

            // Search functionality
            const searchBtn = document.getElementById('searchBtn');
            const searchInput = document.getElementById('quranSearch');
            
            searchBtn.addEventListener('click', performSearch);
            searchInput.addEventListener('keyup', function(e) {
                if (e.key === 'Enter') performSearch();
            });

            // Filter controls
            document.getElementById('revelationType').addEventListener('change', loadSurahs);
            document.getElementById('sortSurahs').addEventListener('change', loadSurahs);

            // View toggle
            const viewButtons = document.querySelectorAll('.view-btn');
            viewButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    viewButtons.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    
                    const view = this.dataset.view;
                    if (view === 'list') {
                        surahsContainer.classList.add('list-view');
                    } else {
                        surahsContainer.classList.remove('list-view');
                    }
                });
            });

            // Load more button
            loadMoreBtn.addEventListener('click', function() {
                this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading...';
                this.disabled = true;
                
                setTimeout(() => {
                    surahsLoaded += 6;
                    loadSurahs();
                    this.innerHTML = '<i class="fas fa-plus-circle"></i> Load More Surahs';
                    this.disabled = false;
                    
                    if (surahsLoaded >= surahsData.length) {
                        this.style.display = 'none';
                    }
                }, 1000);
            });

            // Feature cards
            document.querySelectorAll('.feature-card').forEach(card => {
                card.addEventListener('click', function() {
                    const feature = this.dataset.feature;
                    handleFeatureClick(feature);
                });
            });

            // Quick navigation buttons
            document.getElementById('jumpToSurah').addEventListener('click', jumpToSurah);
            document.getElementById('jumpToPage').addEventListener('click', jumpToPage);
            document.getElementById('randomVerse').addEventListener('click', showRandomVerse);
            document.getElementById('bookmarks').addEventListener('click', showBookmarks);

            // Daily verse audio
            document.getElementById('playDailyVerse').addEventListener('click', function() {
                this.innerHTML = '<i class="fas fa-pause"></i> Playing...';
                setTimeout(() => {
                    this.innerHTML = '<i class="fas fa-play"></i> Listen';
                }, 3000);
            });
        

        // Close Modal
        function closeModal() {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Search functionality
        function performSearch() {
            const query = document.getElementById('quranSearch').value.toLowerCase().trim();
            if (!query) return;

            // Simple search implementation
            const results = surahsData.filter(surah => 
                surah.name.toLowerCase().includes(query) ||
                surah.englishName.toLowerCase().includes(query) ||
                surah.arabicName.includes(query)
            );

            if (results.length > 0) {
                currentSurahs = results;
                renderSurahs();
            } else {
                surahsContainer.innerHTML = `
                    <div class="no-results">
                        <i class="fas fa-search"></i>
                        <h3>No results found</h3>
                        <p>Try searching with different keywords</p>
                    </div>
                `;
            }
        }

        // Audio functions
        function playAudio(surahNumber) {
            alert(`Playing audio for Surah ${surahNumber}\n\nIn a real application, this would play the actual recitation.`);
        }

        // Bookmark functions
        function bookmarkSurah(surahNumber) {
            if (!readingStats.bookmarks) readingStats.bookmarks = new Set();
            
            if (readingStats.bookmarks.has(surahNumber)) {
                readingStats.bookmarks.delete(surahNumber);
                alert('Bookmark removed!');
            } else {
                readingStats.bookmarks.add(surahNumber);
                alert('Surah bookmarked!');
            }
            
            readingStats.bookmarkedVerses = readingStats.bookmarks.size;
            updateReadingStats();
        }

        // Feature handling
        function handleFeatureClick(feature) {
            switch(feature) {
                case 'browse':
                    document.getElementById('surahBrowser').scrollIntoView({ behavior: 'smooth' });
                    break;
                case 'audio':
                    alert('Audio feature would open a dedicated audio player interface.');
                    break;
                case 'translation':
                    alert('Translation feature would show language selection options.');
                    break;
                case 'tafsir':
                    alert('Tafsir feature would open commentary and explanations.');
                    break;
            }
        }

        // Quick navigation functions
        function jumpToSurah() {
            const surahNumber = prompt('Enter Surah number (1-114):');
            const num = parseInt(surahNumber);
            
            if (num && num >= 1 && num <= 114) {
                const surah = surahsData.find(s => s.number === num);
                if (surah) {
                    openSurah(num);
                } else {
                    alert('Surah not found in current dataset.');
                }
            } else {
                alert('Please enter a valid Surah number (1-114).');
            }
        }

        function jumpToPage() {
            const pageNumber = prompt('Enter page number (1-604):');
            if (pageNumber) {
                alert(`Jumping to page ${pageNumber}\n\nIn a real application, this would navigate to the specific page.`);
            }
        }

        function showRandomVerse() {
            const randomSurah = surahsData[Math.floor(Math.random() * surahsData.length)];
            const randomVerse = randomSurah.verses_data[Math.floor(Math.random() * randomSurah.verses_data.length)];
            
            // Update daily verse with random verse
            document.getElementById('dailyVerseArabic').textContent = randomVerse.arabic;
            document.getElementById('dailyVerseTranslation').textContent = randomVerse.translation;
            document.getElementById('dailyVerseReference').textContent = `- Quran ${randomSurah.number}:${randomVerse.number}`;
            
            // Scroll to daily verse
            document.querySelector('.daily-verse').scrollIntoView({ behavior: 'smooth' });
        }

        function showBookmarks() {
            if (!readingStats.bookmarks || readingStats.bookmarks.size === 0) {
                alert('No bookmarks saved yet. Start bookmarking your favorite surahs!');
                return;
            }

            const bookmarkedSurahs = Array.from(readingStats.bookmarks)
                .map(id => surahsData.find(s => s.number === id))
                .filter(s => s)
                .map(s => `${s.number}. ${s.name}`)
                .join('\n');
            
            alert(`Your Bookmarked Surahs:\n\n${bookmarkedSurahs}`);
        }

        // Update reading stats
        function updateReadingStats() {
            document.getElementById('surahsRead').textContent = readingStats.surahsRead || 0;
            document.getElementById('versesRead').textContent = readingStats.versesRead || 0;
            document.getElementById('bookmarkedVerses').textContent = readingStats.bookmarkedVerses || 0;
            document.getElementById('readingTime').textContent = readingStats.readingTime || 0;
            
            // Update progress bar
            const totalVerses = 6236; // Total verses in Quran
            const progress = Math.min((readingStats.versesRead / totalVerses) * 100, 100);
            document.querySelector('.progress-fill').style.width = progress + '%';
        }

        // Daily verse rotation
        function setupDailyVerseRotation() {
            const dailyVerses = [
                {
                    arabic: "وَمَن يَتَّقِ ٱللَّهَ يَجْعَل لَّهُۥ مَخْرَجًا وَيَرْزُقْهُ مِنْ حَيْثُ لَا يَحْتَسِبُ",
                    translation: "And whoever fears Allah - He will make for him a way out and will provide for him from where he does not expect.",
                    reference: "Quran 65:2-3"
                },
                {
                    arabic: "وَٱللَّهُ خَيْرٌ حَٰفِظًا ۖ وَهُوَ أَرْحَمُ ٱلرَّٰحِمِينَ",
                    translation: "But Allah is the best guardian, and He is the most merciful of the merciful.",
                    reference: "Quran 12:64"
                },
                {
                    arabic: "فَإِنَّ مَعَ ٱلْعُسْرِ يُسْرًا إِنَّ مَعَ ٱلْعُسْرِ يُسْرًا",
                    translation: "So verily, with the hardship, there is relief. Verily, with the hardship, there is relief.",
                    reference: "Quran 94:5-6"
                }
            ];
            
            // Change verse based on day of week
            const dayOfWeek = new Date().getDay();
            const todayVerse = dailyVerses[dayOfWeek % dailyVerses.length];
            
            document.getElementById('dailyVerseArabic').textContent = todayVerse.arabic;
            document.getElementById('dailyVerseTranslation').textContent = todayVerse.translation;
            document.getElementById('dailyVerseReference').textContent = `- ${todayVerse.reference}`;
        }

        // Simulate reading time tracking
        let startTime = Date.now();
        setInterval(() => {
            if (modal.style.display === 'block') {
                readingStats.readingTime = Math.floor((Date.now() - startTime) / 60000);
                updateReadingStats();
            }
        }, 60000); // Update every minute

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

        // Animate cards on scroll
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

        // Observe surah cards when they're created
        function observeCards() {
            document.querySelectorAll('.surah-card').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(card);
            });
        }

        // Call observeCards after rendering
        const originalRenderSurahs = renderSurahs;
        renderSurahs = function() {
            originalRenderSurahs();
            setTimeout(observeCards, 100);
        };

        // Keyboard shortcuts
        document.addEventListener('keydown', function(e) {
            if (e.ctrlKey || e.metaKey) {
                switch(e.key) {
                    case 'f':
                        e.preventDefault();
                        document.getElementById('quranSearch').focus();
                        break;
                    case 'r':
                        e.preventDefault();
                        showRandomVerse();
                        break;
                    case 'b':
                        e.preventDefault();
                        showBookmarks();
                        break;
                }
            }
        });

        // Add helpful tooltips
        function addTooltips() {
            const tooltips = {
                '#jumpToSurah': 'Ctrl+J - Jump directly to any Surah',
                '#randomVerse': 'Ctrl+R - Show a random verse',
                '#bookmarks': 'Ctrl+B - View your bookmarked surahs',
                '#quranSearch': 'Ctrl+F - Search the Quran'
            };
            
            Object.entries(tooltips).forEach(([selector, tooltip]) => {
                const element = document.querySelector(selector);
                if (element) {
                    element.title = tooltip;
                }
            });
        }

        // Initialize tooltips after DOM loads
        setTimeout(addTooltips, 500);

        // Smooth scrolling for all links
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

        // Mobile menu toggle
            document.addEventListener('DOMContentLoaded', function() {
        const mobileToggle = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');
        if (mobileToggle && navMenu) {
            mobileToggle.addEventListener('click', function() {
                navMenu.classList.toggle('active');
                this.classList.toggle('active');
            
            });
        }
        })            // Close alert messages
            const alertCloseButtons = document.querySelectorAll('.alert-close');
            alertCloseButtons.forEach(button => {
                button.addEventListener('click', function() {
                    this.parentElement.style.display = 'none';
                });
            });
    </script>
</body>
</html>