<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islamic Reflections - User List</title>
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
                    <li><a href="/users" class="nav-link active">Writers</a></li>
                    <li><a href="/joinus" class="nav-link">Join Us</a></li>
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
            <div class="header-content">
                <i class="fas fa-users"></i>
                <h1>Community Members</h1>
                <p>May Allah bless our growing Islamic community</p>
            </div>
        </div>
    </section>

    <!-- User List Section -->
    <section class="user-list-section">
        <div class="container">
            <!-- Laravel Blade Template Logic -->
            @isset($message)
                <div class="message-card">
                    <i class="fas fa-exclamation-triangle"></i>
                    <p>{{ $message }}</p>
                </div>
            @else
                <div class="users-table-container">
                    <div class="table-header">
                        
                        <h2>
                            <i class="fas fa-list-ul"></i>
                            All Registered Users
                        </h2>
                        <div class="user-count">
                            <span>Total Members: {{ count($users) }}</span>
                        </div>
                    </div>
                    
                    <div class="table-wrapper">
                        <table class="users-table">
                            <thead>
                                <tr>
                                    <th>
                                        <i class="fas fa-pen"></i>
                                        Pen Name
                                    </th>
                                    <th>
                                        <i class="fas fa-graduation-cap"></i>
                                        Background
                                    </th>
                                    <th>
                                        <i class="fas fa-hashtag"></i>
                                        ID
                                    </th>
                                    <th>
                                        <i class="fas fa-user"></i>
                                        Name
                                    </th>
                                    <th>
                                        <i class="fas fa-birthday-cake"></i>
                                        Age
                                    </th>
                                    <th>
                                        <i class="fas fa-map-marker-alt"></i>
                                        City
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr class="user-row">
                                        <td class="user-pen-name">{{ $user->pen_name ?? 'Writer' }}</td>
                                        <td class="user-background">
                                            <span class="background-badge">
                                                {{ ucfirst(str_replace('_', ' ', $user->islamic_background ?? 'Member')) }}
                                            </span>
                                        </td>
                                        <td class="user-id">{{ $user->id }}</td>
                                        <td class="user-name">
                                            <div class="name-container">
                                                <div class="avatar">
                                                    <i class="fas fa-user-circle"></i>
                                                </div>
                                                <span>{{ $user->name }}</span>
                                            </div>
                                        </td>
                                        <td class="user-age">{{ $user->age }}</td>
                                        <td class="user-city">{{ $user->city }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endisset
        </div>
    </section>

    <!-- Islamic Quote Section -->
    <section class="islamic-quote">
        <div class="container">
            <div class="quote-card">
                <i class="fas fa-star-and-crescent"></i>
                <div class="arabic-text">
                    إِنَّمَا الْمُؤْمِنُونَ إِخْوَةٌ
                </div>
                <div class="translation">
                    "The believers are but brothers"
                </div>
                <div class="reference">- Quran 49:10</div>
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
                        <li><a href="/users">Users</a></li>
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
/* Base styles from the original design */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.user-pen-name {
    color: #d4af37;
    font-weight: 600;
    font-style: italic;
}

.background-badge {
    background: linear-gradient(135deg, #2c5530, #1a3d1f);
    color: #fff;
    padding: 4px 12px;
    border-radius: 15px;
    font-size: 0.85rem;
    font-weight: 500;
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

.nav-link:hover,
.nav-link.active {
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

/* Page Header */
.page-header {
    background: linear-gradient(135deg, rgba(44, 85, 48, 0.9), rgba(26, 61, 31, 0.9)),
                url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="islamic-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="2" fill="rgba(212,175,55,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23islamic-pattern)"/></svg>');
    color: #fff;
    padding: 120px 0 60px;
    text-align: center;
    margin-top: 70px;
}

.header-content i {
    font-size: 4rem;
    color: #d4af37;
    margin-bottom: 1rem;
}

.header-content h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    color: #fff;
}

.header-content p {
    font-size: 1.2rem;
    opacity: 0.9;
    font-style: italic;
}

/* User List Section */
.user-list-section {
    padding: 80px 0;
    background: #f8f9fa;
}

.message-card {
    background: linear-gradient(135deg, #e74c3c, #c0392b);
    color: #fff;
    padding: 30px;
    border-radius: 15px;
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
    box-shadow: 0 10px 30px rgba(231, 76, 60, 0.3);
}

.message-card i {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.message-card p {
    font-size: 1.3rem;
    margin: 0;
}

.users-table-container {
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    overflow: hidden;
}

.table-header {
    background: linear-gradient(135deg, #2c5530, #1a3d1f);
    color: #fff;
    padding: 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1rem;
}

.table-header h2 {
    font-size: 1.8rem;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 10px;
}

.table-header h2 i {
    color: #d4af37;
}

.user-count {
    background: rgba(212, 175, 55, 0.2);
    padding: 10px 20px;
    border-radius: 25px;
    font-weight: bold;
}

.table-wrapper {
    overflow-x: auto;
}

.users-table {
    width: 100%;
    border-collapse: collapse;
}

.users-table thead {
    background: linear-gradient(135deg, #34495e, #2c3e50);
}

.users-table th {
    padding: 20px;
    text-align: left;
    color: #fff;
    font-weight: 600;
    font-size: 1.1rem;
    border: none;
}

.users-table th i {
    color: #d4af37;
    margin-right: 8px;
}

.user-row {
    transition: all 0.3s ease;
    border-bottom: 1px solid #e9ecef;
}

.user-row:hover {
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.users-table td {
    padding: 20px;
    font-size: 1rem;
    border: none;
    vertical-align: middle;
}

.user-id {
    font-weight: bold;
    color: #2c5530;
    background: rgba(212, 175, 55, 0.1);
    text-align: center;
    border-radius: 8px;
    margin: 5px;
    width: 60px;
}

.name-container {
    display: flex;
    align-items: center;
    gap: 15px;
}

.avatar {
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

.user-name span {
    font-weight: 600;
    color: #2c5530;
}

.user-phone {
    color: #666;
    font-family: 'Courier New', monospace;
}

.user-age {
    color: #2c5530;
    font-weight: 600;
    text-align: center;
}

.user-city {
    color: #666;
    font-style: italic;
}

/* Islamic Quote Section */
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
    
    .header-content h1 {
        font-size: 2rem;
    }
    
    .table-header {
        flex-direction: column;
        text-align: center;
    }
    
    .table-header h2 {
        font-size: 1.5rem;
    }
    
    .users-table th,
    .users-table td {
        padding: 15px 10px;
        font-size: 0.9rem;
    }
    
    .name-container {
        flex-direction: column;
        gap: 8px;
        text-align: center;
    }
    
    .arabic-text {
        font-size: 1.5rem;
    }
    
    .footer-content {
        grid-template-columns: 1fr;
        text-align: center;
    }
}

@media (max-width: 480px) {
    .users-table {
        font-size: 0.8rem;
    }
    
    .users-table th,
    .users-table td {
        padding: 10px 5px;
    }
    
    .avatar {
        width: 30px;
        height: 30px;
        font-size: 1rem;
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

.user-row {
    animation: fadeInUp 0.6s ease forwards;
}

.user-row:nth-child(even) {
    animation-delay: 0.1s;
}

.user-row:nth-child(odd) {
    animation-delay: 0.2s;
}
    </style>

    <script>
        // Mobile menu toggle
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');

        hamburger.addEventListener('click', function() {
            navMenu.classList.toggle('active');
        });

        // Smooth scrolling for anchor links
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

        // Add loading animation for table rows
        document.addEventListener('DOMContentLoaded', function() {
            const rows = document.querySelectorAll('.user-row');
            rows.forEach((row, index) => {
                row.style.animationDelay = `${index * 0.1}s`;
            });
        });
    </script>
</body>
</html>