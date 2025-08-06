<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Our Writers - Islamic Reflections</title>
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
                    <li><a href="/article" class="nav-link">Articles</a></li>
                    <li><a href="/quran" class="nav-link">Quran</a></li>
                    <li><a href="/hadith" class="nav-link">Hadith</a></li>
                    <li><a href="/users" class="nav-link">Writers</a></li>
                    <li><a href="/joinus" class="nav-link active">Join Us</a></li>
                </ul>
                <div class="mobile-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>

    <!-- Success/Error Messages -->
    @if(session('success'))
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i>
            {{ session('success') }}
            <button class="alert-close">&times;</button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-error">
            <i class="fas fa-exclamation-triangle"></i>
            {{ session('error') }}
            <button class="alert-close">&times;</button>
        </div>
    @endif

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1><i class="fas fa-pen-nib"></i> Join Our Writers Community</h1>
            <p>Share your Islamic knowledge and inspire others through authentic content</p>
        </div>
    </section>

    <!-- Authentication Section -->
    <section class="auth-section">
        <div class="container">
            <div class="auth-container">
                <!-- Toggle Buttons -->
                <div class="auth-toggle">
                    <button class="toggle-btn active" id="loginToggle">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </button>
                    <button class="toggle-btn" id="registerToggle">
                        <i class="fas fa-user-plus"></i> Register
                    </button>
                </div>

                <!-- Login Form -->
                <div class="auth-form-container" id="loginForm">
                    <div class="form-header">
                        <i class="fas fa-user-circle"></i>
                        <h2>Welcome Back</h2>
                        <p>Sign in to continue your writing journey</p>
                    </div>
                    
                    <form class="auth-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Password" required id="loginPassword">
                            <button type="button" class="toggle-password" data-target="loginPassword">
                                <i class="fas fa-eye"></i>
                            </button>
                            @error('password')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-options">
                            <label class="checkbox-container">
                                <input type="checkbox" name="remember">
                                <span class="checkmark"></span>
                                Remember me
                            </label>
                            <a href="#" class="forgot-link">Forgot Password?</a>
                        </div>
                        
                        <button type="submit" class="submit-btn">
                            <i class="fas fa-sign-in-alt"></i>
                            Sign In
                        </button>
                    </form>
                </div>

                <!-- Register Form -->
                <div class="auth-form-container hidden" id="registerForm">
                    <div class="form-header">
                        <i class="fas fa-user-plus"></i>
                        <h2>Join Our Community</h2>
                        <p>Become a writer and share Islamic wisdom</p>
                    </div>
                    
                    <form class="auth-form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <i class="fas fa-user"></i>
                                <input type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required>
                                @error('first_name')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <i class="fas fa-user"></i>
                                <input type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required>
                                @error('last_name')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <i class="fas fa-pen"></i>
                            <input type="text" name="pen_name" placeholder="Pen Name (Display Name)" value="{{ old('pen_name') }}" required>
                            @error('pen_name')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <i class="fas fa-birthday-cake"></i>
                                <input type="number" name="age" placeholder="Age" value="{{ old('age') }}" min="13" max="120">
                                @error('age')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <i class="fas fa-map-marker-alt"></i>
                                <input type="text" name="city" placeholder="City" value="{{ old('city') }}">
                                @error('city')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Password" required id="registerPassword">
                            <button type="button" class="toggle-password" data-target="registerPassword">
                                <i class="fas fa-eye"></i>
                            </button>
                            @error('password')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" required id="confirmPassword">
                            <button type="button" class="toggle-password" data-target="confirmPassword">
                                <i class="fas fa-eye"></i>
                            </button>
                            @error('password_confirmation')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <i class="fas fa-graduation-cap"></i>
                            <select name="islamic_background" required>
                                <option value="">Select Your Islamic Studies Background</option>
                                <option value="student" {{ old('islamic_background') == 'student' ? 'selected' : '' }}>Student of Islamic Studies</option>
                                <option value="scholar" {{ old('islamic_background') == 'scholar' ? 'selected' : '' }}>Islamic Scholar</option>
                                <option value="teacher" {{ old('islamic_background') == 'teacher' ? 'selected' : '' }}>Islamic Teacher/Educator</option>
                                <option value="imam" {{ old('islamic_background') == 'imam' ? 'selected' : '' }}>Imam/Religious Leader</option>
                                <option value="enthusiast" {{ old('islamic_background') == 'enthusiast' ? 'selected' : '' }}>Passionate Muslim Writer</option>
                                <option value="other" {{ old('islamic_background') == 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('islamic_background')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <i class="fas fa-book"></i>
                            <textarea name="bio" placeholder="Tell us about your writing interests and expertise in Islamic topics (Optional)" rows="3">{{ old('bio') }}</textarea>
                            @error('bio')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-options">
                            <label class="checkbox-container">
                                <input type="checkbox" name="terms" required>
                                <span class="checkmark"></span>
                                I agree to the <a href="#" class="terms-link">Terms of Service</a> and <a href="#" class="terms-link">Community Guidelines</a>
                            </label>
                            @error('terms')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-options">
                            <label class="checkbox-container">
                                <input type="checkbox" name="newsletter">
                                <span class="checkmark"></span>
                                Subscribe to our newsletter for writing tips and updates
                            </label>
                        </div>
                        
                        <button type="submit" class="submit-btn">
                            <i class="fas fa-user-plus"></i>
                            Create Account
                        </button>
                    </form>
                </div>

                <!-- Writer Benefits -->
                <div class="writer-benefits">
                    <h3><i class="fas fa-star"></i> Writer Benefits</h3>
                    <div class="benefits-grid">
                        <div class="benefit-item">
                            <i class="fas fa-users"></i>
                            <span>Join our community of Islamic writers</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-edit"></i>
                            <span>Share your knowledge and insights</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-heart"></i>
                            <span>Inspire and educate fellow Muslims</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-trophy"></i>
                            <span>Build your reputation as a writer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Islamic Quote Section -->
    <section class="islamic-quote">
        <div class="container">
            <div class="quote-card">
                <i class="fas fa-star-and-crescent"></i>
                <div class="arabic-text">
                    وَالَّذِينَ آمَنُوا وَعَمِلُوا الصَّالِحَاتِ أُولَئِكَ أَصْحَابُ الْجَنَّةِ
                </div>
                <div class="translation">
                    "And those who believe and do righteous deeds - those are the companions of Paradise"
                </div>
                <div class="reference">- Quran 2:82</div>
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

        /* Alert Messages */
        .alert {
            padding: 15px 20px;
            margin: 20px auto;
            max-width: 800px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: bold;
            position: fixed;
            top: 90px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 9999;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            animation: slideDown 0.3s ease;
        }

        .alert-success {
            background: linear-gradient(135deg, #d4edda, #c3e6cb);
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background: linear-gradient(135deg, #f8d7da, #f5c6cb);
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .alert-close {
            background: none;
            border: none;
            font-size: 1.2rem;
            cursor: pointer;
            color: inherit;
            margin-left: auto;
            padding: 0 5px;
        }

        .error-message {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 5px;
            display: block;
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

        /* Authentication Section */
        .auth-section {
            padding: 60px 0;
            min-height: calc(100vh - 400px);
        }

        .auth-container {
            max-width: 800px;
            margin: 0 auto;
        }

        /* Toggle Buttons */
        .auth-toggle {
            display: flex;
            background: #fff;
            border-radius: 50px;
            padding: 5px;
            margin-bottom: 2rem;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 2rem;
        }

        .toggle-btn {
            flex: 1;
            padding: 12px 24px;
            border: none;
            border-radius: 45px;
            background: transparent;
            color: #666;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .toggle-btn.active {
            background: linear-gradient(45deg, #2c5530, #1a3d1f);
            color: #fff;
            box-shadow: 0 3px 15px rgba(44, 85, 48, 0.3);
        }

        /* Form Container */
        .auth-form-container {
            background: #fff;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
            transition: all 0.3s ease;
        }

        .auth-form-container.hidden {
            display: none;
        }

        .form-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-header i {
            font-size: 3rem;
            color: #d4af37;
            margin-bottom: 1rem;
        }

        .form-header h2 {
            color: #2c5530;
            margin-bottom: 0.5rem;
            font-size: 2rem;
        }

        .form-header p {
            color: #666;
            font-size: 1.1rem;
        }

        /* Form Styles */
        .auth-form {
            max-width: 500px;
            margin: 0 auto;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .form-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #2c5530;
            z-index: 1;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 15px 45px;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            font-size: 1rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            background: #fff;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #d4af37;
            box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.1);
        }

        .form-group textarea {
            resize: vertical;
            padding-top: 15px;
        }

        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #666;
            cursor: pointer;
            font-size: 1rem;
            z-index: 2;
        }

        .toggle-password:hover {
            color: #2c5530;
        }

        /* Form Options */
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            cursor: pointer;
            font-size: 0.9rem;
            color: #666;
        }

        .checkbox-container input[type="checkbox"] {
            display: none;
        }

        .checkmark {
            width: 20px;
            height: 20px;
            border: 2px solid #e9ecef;
            border-radius: 4px;
            margin-right: 10px;
            position: relative;
            transition: all 0.3s ease;
            flex-shrink: 0;
        }

        .checkbox-container input[type="checkbox"]:checked + .checkmark {
            background: linear-gradient(45deg, #2c5530, #1a3d1f);
            border-color: #2c5530;
        }

        .checkbox-container input[type="checkbox"]:checked + .checkmark::after {
            content: '\2713';
            position: absolute;
            color: #fff;
            font-size: 14px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .forgot-link,
        .terms-link {
            color: #2c5530;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .forgot-link:hover,
        .terms-link:hover {
            color: #d4af37;
        }

        /* Submit Button */
        .submit-btn {
            width: 100%;
            background: linear-gradient(45deg, #2c5530, #1a3d1f);
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .submit-btn:hover {
            background: linear-gradient(45deg, #d4af37, #f4d03f);
            color: #2c5530;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
        }

        /* Writer Benefits */
        .writer-benefits {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .writer-benefits h3 {
            text-align: center;
            color: #2c5530;
            margin-bottom: 2rem;
            font-size: 1.5rem;
        }

        .writer-benefits h3 i {
            color: #d4af37;
            margin-right: 10px;
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
        }

        .benefit-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        }

        .benefit-item i {
            font-size: 1.5rem;
            color: #d4af37;
            flex-shrink: 0;
        }

        .benefit-item span {
            color: #2c5530;
            font-weight: 500;
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
            font-size: 1.8rem;
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

        /* Animations */
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translate(-50%, -20px);
            }
            to {
                opacity: 1;
                transform: translate(-50%, 0);
            }
        }

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

        .auth-form-container {
            animation: fadeInUp 0.5s ease;
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
            
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .form-options {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .benefits-grid {
                grid-template-columns: 1fr;
            }
            
            .auth-form-container {
                padding: 25px;
            }
            
            .arabic-text {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .auth-toggle {
                margin: 0 0 2rem 0;
                max-width: 100%;
            }
            
            .toggle-btn {
                padding: 10px 16px;
                font-size: 0.9rem;
            }
            
            .form-group input,
            .form-group select,
            .form-group textarea {
                padding: 12px 40px;
            }
            
            .submit-btn {
                padding: 12px;
                font-size: 1rem;
            }
            
            .benefit-item {
                flex-direction: column;
                text-align: center;
                gap: 10px;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle between login and register forms
            const loginToggle = document.getElementById('loginToggle');
            const registerToggle = document.getElementById('registerToggle');
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');

            loginToggle.addEventListener('click', function() {
                loginToggle.classList.add('active');
                registerToggle.classList.remove('active');
                loginForm.classList.remove('hidden');
                registerForm.classList.add('hidden');
            });

            registerToggle.addEventListener('click', function() {
                registerToggle.classList.add('active');
                loginToggle.classList.remove('active');
                registerForm.classList.remove('hidden');
                loginForm.classList.add('hidden');
            });

            // Toggle password visibility
            const togglePasswordButtons = document.querySelectorAll('.toggle-password');
            togglePasswordButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const targetId = this.getAttribute('data-target');
                    const inputField = document.getElementById(targetId);
                    if (inputField.type === 'password') {
                        inputField.type = 'text';
                        this.innerHTML = '<i class="fas fa-eye-slash"></i>';
                    } else {
                        inputField.type = 'password';
                        this.innerHTML = '<i class="fas fa-eye"></i>';
                    }
                });
            });
            // Mobile menu toggle
            const mobileToggle = document.querySelector('.mobile-toggle');
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
        });
    </script>