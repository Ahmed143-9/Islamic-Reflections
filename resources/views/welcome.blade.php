<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islamic Reflections - A Journey of Faith</title>
    <link rel="stylesheet" href="">
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
                    <li><a href="/joinus" class="nav-link">About</a></li>
                    <li><a href="/users" class="nav-link">Writters</a></li>
                </ul>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <div class="islamic-pattern"></div>
            <h1 class="hero-title">بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ</h1>
            <p class="hero-subtitle">In the name of Allah, the Most Gracious, the Most Merciful</p>
            <h2 class="main-title">Welcome to Islamic Reflections</h2>
            <p class="hero-description">
                Discover the beauty of Islam through authentic teachings, spiritual reflections, 
                and guidance for a meaningful Islamic lifestyle.
            </p>
            <button class="cta-button " onclick="location.href='/post'">
                <i class="fas fa-book-open"></i>
                Start Reading
            </button>
        </div>
    </section>

    <!-- Prayer Times Reminder -->
    <section class="prayer-reminder">
        <div class="container">
            <div class="prayer-card">
                <i class="fas fa-pray"></i>
                <h3>Prayer Time Reminder</h3>
                <div class="current-time" id="currentTime"></div>
                <p>Remember to perform your daily prayers (Salah)</p>
                <div class="prayer-times">
                    <span>Fajr • Dhuhr • Asr • Maghrib • Isha</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Articles Section -->
    <section class="featured-articles" id="articles">
        <div class="container">
            <h2 class="section-title">Featured Articles</h2>
            <div class="articles-grid">
                <article class="article-card">
                    <div class="article-image">
                        <i class="fas fa-quran"></i>
                    </div>
                    <div class="article-content">
                        <h3>Understanding the Quran</h3>
                        <p>Explore the divine guidance and wisdom found in Allah's final revelation to mankind.</p>
                        <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                
                <article class="article-card">
                    <div class="article-image">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="article-content">
                        <h3>The Beauty of Islamic Ethics</h3>
                        <p>Discover how Islamic teachings guide us toward righteous character and moral excellence.</p>
                        <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                
                <article class="article-card">
                    <div class="article-image">
                        <i class="fas fa-hands-praying"></i>
                    </div>
                    <div class="article-content">
                        <h3>The Power of Dua</h3>
                        <p>Learn about supplication in Islam and how connecting with Allah brings peace to the heart.</p>
                        <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Daily Verse Section -->
    <section class="daily-verse">
        <div class="container">
            <div class="verse-card">
                <i class="fas fa-star-and-crescent"></i>
                <h3>Verse of the Day</h3>
                <div class="arabic-text">
                    وَمَن يَتَّقِ اللَّهَ يَجْعَل لَّهُ مَخْرَجًا
                </div>
                <div class="translation">
                    "And whoever fears Allah - He will make for him a way out"
                </div>
                <div class="reference">- Quran 65:2</div>
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
                        <li><a href="#home">Home</a></li>
                        <li><a href="#articles">Articles</a></li>
                        <li><a href="#quran">Quran</a></li>
                        <li><a href="#hadith">Hadith</a></li>
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
/* CSS Styles - In a real project, this would be in a separate styles.css file */

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
}

.nav-link:hover {
    color: #d4af37;
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
}

/* Hero Section */
.hero {
    background: linear-gradient(135deg, rgba(44, 85, 48, 0.9), rgba(26, 61, 31, 0.9)),
                url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="islamic-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="2" fill="rgba(212,175,55,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23islamic-pattern)"/></svg>');
    color: #fff;
    padding: 120px 0 80px;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.hero-content {
    max-width: 800px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}

.hero-title {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    color: #d4af37;
    font-weight: normal;
}

.hero-subtitle {
    font-size: 1.1rem;
    margin-bottom: 2rem;
    font-style: italic;
    opacity: 0.9;
}

.main-title {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    color: #fff;
}

.hero-description {
    font-size: 1.2rem;
    margin-bottom: 2rem;
    opacity: 0.9;
    line-height: 1.6;
}

.cta-button {
    background: linear-gradient(45deg, #d4af37, #f4d03f);
    color: #2c5530;
    padding: 15px 30px;
    border: none;
    border-radius: 50px;
    font-size: 1.1rem;
    font-weight: bold;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.cta-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(212, 175, 55, 0.3);
}

/* Prayer Reminder Section */
.prayer-reminder {
    background: #fff;
    padding: 50px 0;
    box-shadow: 0 -2px 10px rgba(0,0,0,0.05);
}

.prayer-card {
    background: linear-gradient(135deg, #2c5530, #1a3d1f);
    color: #fff;
    padding: 30px;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    max-width: 500px;
    margin: 0 auto;
}

.prayer-card i {
    font-size: 3rem;
    color: #d4af37;
    margin-bottom: 1rem;
}

.prayer-card h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
}

.current-time {
    font-size: 2rem;
    font-weight: bold;
    color: #d4af37;
    margin-bottom: 1rem;
}

.prayer-times {
    margin-top: 1rem;
    padding-top: 1rem;
    border-top: 1px solid rgba(212, 175, 55, 0.3);
}

/* Featured Articles Section */
.featured-articles {
    padding: 80px 0;
    background: #f8f9fa;
}

.section-title {
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 3rem;
    color: #2c5530;
}

.articles-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.article-card {
    background: #fff;
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.article-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.article-image {
    text-align: center;
    margin-bottom: 1.5rem;
}

.article-image i {
    font-size: 3rem;
    color: #d4af37;
}

.article-content h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    color: #2c5530;
}

.article-content p {
    color: #666;
    margin-bottom: 1.5rem;
    line-height: 1.6;
}

.read-more {
    color: #2c5530;
    text-decoration: none;
    font-weight: bold;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    transition: color 0.3s ease;
}

.read-more:hover {
    color: #d4af37;
}

/* Daily Verse Section */
.daily-verse {
    background: linear-gradient(135deg, #2c5530, #1a3d1f);
    color: #fff;
    padding: 80px 0;
}

.verse-card {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
}

.verse-card i {
    font-size: 3rem;
    color: #d4af37;
    margin-bottom: 2rem;
}

.verse-card h3 {
    font-size: 2rem;
    margin-bottom: 2rem;
}

.arabic-text {
    font-size: 2rem;
    margin-bottom: 1.5rem;
    color: #d4af37;
    line-height: 1.8;
}

.translation {
    font-size: 1.3rem;
    margin-bottom: 1rem;
    font-style: italic;
    opacity: 0.9;
}

.reference {
    font-size: 1rem;
    opacity: 0.8;
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
    }
    
    .hero-title {
        font-size: 2rem;
    }
    
    .main-title {
        font-size: 2rem;
    }
    
    .hero-description {
        font-size: 1rem;
    }
    
    .articles-grid {
        grid-template-columns: 1fr;
    }
    
    .arabic-text {
        font-size: 1.5rem;
    }
    
    .footer-content {
        grid-template-columns: 1fr;
        text-align: center;
    }
}

/* Animation for current time */
@keyframes pulse {
    0% { opacity: 1; }
    50% { opacity: 0.7; }
    100% { opacity: 1; }
}

/* Toggle Mobile Menu */

@media (max-width: 768px) {
    .nav-menu {
        display: none;
        flex-direction: column;
        gap: 1rem;
        background: #2c5530;
        padding: 2rem;
        border-radius: 10px;
        position: absolute;
        top: 70px; /* below navbar */
        right: 20px;
        width: 200px;
    }

    .nav-menu.active {
        display: flex;
    }
}

/* 
--------------------------------------- */
  

.current-time {
    animation: pulse 2s infinite;
}
    </style>

    <script>
        // Update current time
        function updateTime() {
            const now = new Date();
            const timeString = now.toLocaleTimeString('en-US', {
                hour12: true,
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });
            document.getElementById('currentTime').textContent = timeString;
        }

        // Update time every second
        setInterval(updateTime, 1000);
        updateTime(); // Initial call

        // Smooth scrolling for navigation links
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
            const mobileToggle = document.querySelector('.hamburger');
            const navMenu = document.querySelector('.nav-menu');
            mobileToggle.addEventListener('click', function() {
                navMenu.classList.toggle('active');
                this.classList.toggle('active');
            });
            // Close alert messages
            const alertCloseButtons = document.querySelectorAll('.alert-close');
            alertCloseButtons.forEach(button => {
                button.addEventListener('click', function() {
                    this.parentElement.style.display = 'none';
                });
            });

        
    </script>
</body>
</html>