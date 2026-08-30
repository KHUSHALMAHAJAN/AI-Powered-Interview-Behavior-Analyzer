<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AI Interview Analyzer</title>

    @vite(['resources/css/home.css', 'resources/js/home.js'])
</head>

<body>

    <!-- ================= NAVBAR ================= -->

    <header class="navbar">

        <div class="nav-container">


<!-- LOGO -->

<a href="/" class="logo">

    <img
        src="{{ asset('images/logo.png') }}"
        alt="AI Interview Analyzer Logo"
        class="logo-image"
    >

    <div class="logo-content">

        <strong>
            AI Interview <span>Analyzer</span>
        </strong>

        <small>
            Analyze • Improve • Succeed
        </small>

    </div>

</a>

                <div class="logo-content">
                    <strong>
                        AI Interview <span>Analyzer</span>
                    </strong>

                    <small>
                        Analyze • Improve • Succeed
                    </small>
                </div>

            </a>


            <!-- NAVIGATION -->

            <nav class="nav-links">

                <a href="/" class="active">
                    Home
                </a>

                <a href="#features">
                    Features
                </a>

               

                <a href="#about">
                    About
                </a>

                

                <a href="#contact">
                    Contact
                </a>

            </nav>


            <!-- RIGHT SIDE -->

            <div class="nav-actions">

                <!-- THEME TOGGLE -->

                <button
                    class="theme-toggle"
                    id="themeToggle"
                    type="button"
                    aria-label="Toggle dark mode"
                >

                    <span class="sun-icon">
                        ☀
                    </span>

                    <span class="toggle-track">
                        <span class="toggle-circle"></span>
                    </span>

                    <span class="moon-icon">
                        ☾
                    </span>

                </button>


                <a href="/login" class="login-link">
                    Login
                </a>

                <a href="/signup" class="signup-link">
                    Sign Up
                </a>

            </div>


            <!-- MOBILE MENU -->

            <button
                class="mobile-menu-btn"
                id="mobileMenuBtn"
                type="button"
                aria-label="Open menu"
            >
                ☰
            </button>

        </div>


        <!-- MOBILE NAVIGATION -->

        <div class="mobile-menu" id="mobileMenu">

            <a href="/">Home</a>
            <a href="#features">Features</a>
            <a href="#how-it-works">How It Works</a>
            <a href="#about">About</a>
            <a href="#pricing">Pricing</a>
            <a href="#contact">Contact</a>

            <div class="mobile-actions">

                <a href="#" class="login-link">
                    Login
                </a>

                <a href="#" class="signup-link">
                    Sign Up
                </a>

            </div>

        </div>

    </header>


    <!-- ================= HERO ================= -->

    <main>

        <section class="hero">

            <!-- HERO CONTENT -->

            <div class="hero-content">

                <div class="hero-badge">
                    <span>✦</span>
                    Next-Gen AI Interview Platform
                </div>


                <h1>

                    Master Your
                    <br>

                    <span class="gradient-text">
                        Interview Skills
                    </span>

                    with AI

                </h1>


                <p class="hero-description">

                    Get real-time analysis of your facial expressions,
                    eye contact, speech, attention and overall behavior.
                    Practice smarter, get better feedback and improve
                    your interview performance.

                </p>


                <!-- BUTTONS -->

                <div class="hero-buttons">

                    <a href="#" class="primary-button">

                        <span>▶</span>

                        Start Your Interview

                        <span>→</span>

                    </a>


                    <a href="#how-it-works" class="secondary-button">

                        <span class="play-circle">
                            ▶
                        </span>

                        Watch Demo

                    </a>

                </div>


                <!-- TRUST -->

                <div class="trust-section">

                    <div class="avatar-group">

                        <div class="avatar">K</div>
                        <div class="avatar">P</div>
                        <div class="avatar">R</div>
                        <div class="avatar">A</div>

                    </div>

                    <div class="trust-text">

                        <strong>
                            50,000+
                        </strong>

                        <span>
                            students already improving
                        </span>

                        <div class="rating">

                            <span>★★★★★</span>

                            <small>
                                4.8/5 rating
                            </small>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================= DASHBOARD PREVIEW ================= -->

            <div class="hero-dashboard">

                <div class="dashboard-window">

                    <!-- Dashboard header -->

                    <div class="dashboard-header">

                        <div class="dashboard-title">

                            <span class="live-dot"></span>

                            Interview Analysis

                        </div>

                        <div class="dashboard-menu">
                            ⋮
                        </div>

                    </div>


                    <div class="dashboard-body">

                        
<!-- CAMERA -->

<div class="camera-preview">

    <div class="camera-label">
        LIVE
    </div>

    <img
        src="{{ asset('images/profile.jpg') }}"
        alt="Interview Candidate"
        class="profile-image"
    >

</div>


                        <!-- ANALYSIS -->

                        <div class="analysis-panel">

                            <h3>
                                Behavior Analysis
                            </h3>


                            <!-- Eye Contact -->

                            <div class="analysis-item">

                                <div class="analysis-name">

                                    <span class="analysis-icon green">
                                        ◉
                                    </span>

                                    <span>
                                        Eye Contact
                                    </span>

                                </div>

                                <strong>
                                    85%
                                </strong>

                            </div>

                            <div class="progress">
                                <span style="width:85%"></span>
                            </div>


                            <!-- Facial Expression -->

                            <div class="analysis-item">

                                <div class="analysis-name">

                                    <span class="analysis-icon blue">
                                        ●
                                    </span>

                                    <span>
                                        Facial Expression
                                    </span>

                                </div>

                                <strong>
                                    78%
                                </strong>

                            </div>

                            <div class="progress blue-progress">
                                <span style="width:78%"></span>
                            </div>


                            <!-- Voice -->

                            <div class="analysis-item">

                                <div class="analysis-name">

                                    <span class="analysis-icon purple">
                                        ♪
                                    </span>

                                    <span>
                                        Voice Tone
                                    </span>

                                </div>

                                <strong>
                                    82%
                                </strong>

                            </div>

                            <div class="progress purple-progress">
                                <span style="width:82%"></span>
                            </div>


                            <!-- Body -->

                            <div class="analysis-item">

                                <div class="analysis-name">

                                    <span class="analysis-icon orange">
                                        ✦
                                    </span>

                                    <span>
                                        Body Language
                                    </span>

                                </div>

                                <strong>
                                    88%
                                </strong>

                            </div>

                            <div class="progress orange-progress">
                                <span style="width:88%"></span>
                            </div>

                        </div>


                        <!-- SCORE -->

                        <div class="score-panel">

                            <h3>
                                Overall Score
                            </h3>

                            <div class="score-circle">

                                <div>
                                    <strong>
                                        84%
                                    </strong>

                                    <span>
                                        Good
                                    </span>
                                </div>

                            </div>

                            <p>
                                Good Performance
                            </p>

                        </div>

                    </div>


                    <!-- BOTTOM -->

                    <div class="dashboard-bottom">

                        <div class="speaking">

                            <div class="voice-icon">
                                ≋
                            </div>

                            <div>

                                <strong>
                                    Speaking...
                                </strong>

                                <span>
                                    02:14 / 15:00
                                </span>

                            </div>

                        </div>


                        <div class="ai-insight">

                            <div class="bulb">
                                💡
                            </div>

                            <div>

                                <strong>
                                    AI Insight
                                </strong>

                                <p>
                                    Great eye contact! Try to reduce
                                    filler words for even better clarity.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- ================= FEATURES ================= -->

        <section class="features-section" id="features">

            <div class="feature-card">

                <div class="feature-icon blue-icon">
                    ◉
                </div>

                <div class="feature-content">

                    <h3>
                        Face Detection
                    </h3>

                    <p>
                        Detect and track facial landmarks in real-time.
                    </p>

                </div>

                <span class="feature-arrow">
                    →
                </span>

            </div>


            <div class="feature-card">

                <div class="feature-icon green-icon">
                    ◉
                </div>

                <div class="feature-content">

                    <h3>
                        Eye Contact Analysis
                    </h3>

                    <p>
                        Measure visual attention and engagement.
                    </p>

                </div>

                <span class="feature-arrow">
                    →
                </span>

            </div>


            <div class="feature-card">

                <div class="feature-icon purple-icon">
                    ♫
                </div>

                <div class="feature-content">

                    <h3>
                        Voice Analysis
                    </h3>

                    <p>
                        Convert speech to text and analyze tone.
                    </p>

                </div>

                <span class="feature-arrow">
                    →
                </span>

            </div>


            <div class="feature-card">

                <div class="feature-icon orange-icon">
                    ✦
                </div>

                <div class="feature-content">

                    <h3>
                        AI Evaluation
                    </h3>

                    <p>
                        Get intelligent feedback and improvement tips.
                    </p>

                </div>

                <span class="feature-arrow">
                    →
                </span>

            </div>

        </section>


        <!-- ================= HOW IT WORKS ================= -->

        <section class="how-section" id="how-it-works">

            <div class="section-heading">

                <h2>
                    How It Works?
                </h2>

                <p>
                    Simple steps to better interview performance
                </p>

            </div>


            <div class="steps-container">

                <div class="step-card">

                    <div class="step-number">
                        1
                    </div>

                    <div class="step-icon">
                        ♙
                    </div>

                    <div>

                        <h3>
                            Create Account
                        </h3>

                        <p>
                            Sign up and set up your profile.
                        </p>

                    </div>

                </div>


                <div class="step-arrow">
                    →
                </div>


                <div class="step-card">

                    <div class="step-number">
                        2
                    </div>

                    <div class="step-icon">
                        ▶
                    </div>

                    <div>

                        <h3>
                            Start Interview
                        </h3>

                        <p>
                            Answer AI-generated questions.
                        </p>

                    </div>

                </div>


                <div class="step-arrow">
                    →
                </div>


                <div class="step-card">

                    <div class="step-number">
                        3
                    </div>

                    <div class="step-icon">
                        ✦
                    </div>

                    <div>

                        <h3>
                            AI Analysis
                        </h3>

                        <p>
                            We analyze your behavior in real-time.
                        </p>

                    </div>

                </div>


                <div class="step-arrow">
                    →
                </div>


                <div class="step-card">

                    <div class="step-number">
                        4
                    </div>

                    <div class="step-icon">
                        ▤
                    </div>

                    <div>

                        <h3>
                            Get Report
                        </h3>

                        <p>
                            Receive detailed feedback and suggestions.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- ================= ABOUT ================= -->

        <section class="about-section" id="about">

            <div class="about-content">

                <span class="section-label">
                    ABOUT THE PLATFORM
                </span>

                <h2>
                    Smarter Interview Preparation
                    <span>Powered by AI</span>
                </h2>

                <p>
                    AI Interview Analyzer combines computer vision,
                    speech processing and artificial intelligence to
                    help candidates understand their interview behavior.
                </p>

            </div>

        </section>


        <!-- ================= CTA ================= -->

        <section class="cta-section" id="pricing">

            <div class="cta-content">

                <div class="cta-icon">
                    ✦
                </div>

                <div>

                    <h2>
                        Ready to Take Your Skills to the Next Level?
                    </h2>

                    <p>
                        Start practicing and get intelligent feedback
                        on your interview performance.
                    </p>

                </div>

                <a href="#" class="cta-button">

                    Get Started Free

                    <span>
                        →
                    </span>

                </a>

            </div>

        </section>

    </main>


    <!-- ================= FOOTER ================= -->

    <footer id="contact">

        <div class="footer-container">

            <div class="footer-brand">

                <div class="footer-logo">

                    <div class="logo-mark">
                        AI
                    </div>

                    <strong>
                        AI Interview Analyzer
                    </strong>

                </div>

                <p>
                    AI-powered interview practice and behavior analysis
                    platform designed to help you improve your performance.
                </p>

            </div>


            <div class="footer-column">

                <h4>
                    Platform
                </h4>

                <a href="#features">
                    Features
                </a>

                <a href="#how-it-works">
                    How It Works
                </a>

                <a href="#about">
                    About
                </a>

            </div>


            <div class="footer-column">

                <h4>
                    Account
                </h4>

                <a href="#">
                    Login
                </a>

                <a href="#">
                    Sign Up
                </a>

            </div>


            <div class="footer-column">

                <h4>
                    Project
                </h4>

                <a href="#">
                    Privacy
                </a>

                <a href="#">
                    Terms
                </a>

                <a href="#">
                    Contact
                </a>

            </div>

        </div>


        <div class="copyright">

            © 2026 AI-Powered Interview Behavior Analyzer.
            All rights reserved.

        </div>

    </footer>

</body>

</html>
