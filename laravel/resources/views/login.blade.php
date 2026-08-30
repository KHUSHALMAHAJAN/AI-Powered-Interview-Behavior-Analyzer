<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | AI Interview Analyzer</title>

    @vite([
        'resources/css/login.css',
        'resources/js/login.js'
    ])
</head>

<body>

    <div class="login-page">

        <!-- LEFT SIDE -->
        <div class="login-info">

            <div class="brand">

                <img
                    src="{{ asset('images/logo.png') }}"
                    alt="AI Interview Analyzer Logo"
                    class="brand-logo"
                >

                <div class="brand-text">
                    <h2>
                        AI Interview <span>Analyzer</span>
                    </h2>

                    <p>
                        Analyze • Improve • Succeed
                    </p>
                </div>

            </div>

            <div class="info-content">

                <span class="welcome-badge">
                    Welcome Back
                </span>

                <h1>
                    Continue Your<br>
                    <span>Interview Journey</span>
                </h1>

                <p>
                    Sign in to access your AI-powered interview
                    analysis, track your performance, and improve
                    your interview skills.
                </p>

                <div class="features">

                    <div class="feature">
                        <div class="feature-icon">AI</div>
                        <div>
                            <strong>AI-Powered Analysis</strong>
                            <small>Understand your interview behavior</small>
                        </div>
                    </div>

                    <div class="feature">
                        <div class="feature-icon">✓</div>
                        <div>
                            <strong>Track Your Progress</strong>
                            <small>Monitor your interview performance</small>
                        </div>
                    </div>

                    <div class="feature">
                        <div class="feature-icon">↗</div>
                        <div>
                            <strong>Improve Your Skills</strong>
                            <small>Get insights to perform better</small>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <!-- RIGHT SIDE -->
        <div class="login-container">

            <div class="login-card">

                <div class="mobile-brand">

                    <img
                        src="{{ asset('images/logo.png') }}"
                        alt="AI Interview Analyzer Logo"
                    >

                    <h2>
                        AI Interview <span>Analyzer</span>
                    </h2>

                </div>


                <div class="login-header">

                    <h1>Sign In</h1>

                    <p>
                        Enter your account details to continue.
                    </p>

                </div>


                <!-- SUCCESS MESSAGE -->
                @if(session('success'))
                    <div class="alert success">
                        {{ session('success') }}
                    </div>
                @endif


                <!-- ERROR MESSAGE -->
                @if($errors->any())
                    <div class="alert error">
                        <strong>Please check the following:</strong>

                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <!-- LOGIN FORM -->
                <form
                    action="{{ route('login.submit') }}"
                    method="POST"
                    class="login-form"
                >

                    @csrf


                    <!-- EMAIL -->
                    <div class="form-group">

                        <label for="email">
                            Email Address
                        </label>

                        <div class="input-wrapper">

                            <span class="input-icon">
                                ✉
                            </span>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="Enter your email"
                                required
                                autocomplete="email"
                            >

                        </div>

                    </div>


                    <!-- PASSWORD -->
                    <div class="form-group">

                        <div class="label-row">

                            <label for="password">
                                Password
                            </label>

                            <a href="#" class="forgot-password">
                                Forgot Password?
                            </a>

                        </div>

                        <div class="input-wrapper">

                            <span class="input-icon">
                                ●
                            </span>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Enter your password"
                                required
                                autocomplete="current-password"
                            >

                            <button
                                type="button"
                                class="password-toggle"
                                id="passwordToggle"
                                aria-label="Show password"
                            >
                                Show
                            </button>

                        </div>

                    </div>


                    <!-- REMEMBER -->
                    <div class="remember-row">

                        <label class="remember-label">

                            <input
                                type="checkbox"
                                name="remember"
                                value="1"
                            >

                            <span>
                                Remember me
                            </span>

                        </label>

                    </div>


                    <!-- LOGIN BUTTON -->
                    <button
                        type="submit"
                        class="login-button"
                    >
                        <span>Sign In</span>
                        <span class="button-arrow">→</span>
                    </button>

                </form>


                <!-- SIGNUP -->
                <div class="signup-link">

                    <span>
                        Don't have an account?
                    </span>

                    <a href="{{ route('signup') }}">
                        Create an account
                    </a>

                </div>


                <div class="security-note">
                    Your information is securely protected.
                </div>

            </div>

        </div>

    </div>

</body>
</html>
