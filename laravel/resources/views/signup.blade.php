<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Sign Up | AI Interview Analyzer</title>

    @vite([
        'resources/css/signup.css',
        'resources/js/signup.js'
    ])

</head>

<body>

    <!-- ================= SIGN UP PAGE ================= -->

    <main class="signup-page">

        <div class="signup-card">


            <!-- ================= BRAND ================= -->

            <div class="brand">

                <a href="/" class="brand-link">

                    <img
                        src="{{ asset('images/logo.png') }}"
                        alt="AI Interview Analyzer Logo"
                        class="brand-logo"
                    >

                    <div class="brand-text">

                        <h1>
                            AI Interview
                            <span>Analyzer</span>
                        </h1>

                        <p>
                            Analyze • Improve • Succeed
                        </p>

                    </div>

                </a>

            </div>


            <!-- ================= HEADING ================= -->

            <div class="signup-heading">

                <h2>
                    Create Your Account
                </h2>

                <p>
                    Start improving your interview skills with AI-powered analysis.
                </p>

            </div>


            <!-- ================= FORM ================= -->

            <form
    action="{{ route('signup.register') }}"
    method="POST"
    class="signup-form"
    id="signupForm"
>
    @csrf

                @csrf


                <!-- NAME -->

                <div class="form-group">

                    <label for="name">
                        Full Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Enter your full name"
                        value="{{ old('name') }}"
                        required
                        autocomplete="name"
                    >

                    <small
                        class="error-message"
                        id="nameError"
                    ></small>

                </div>


                <!-- EMAIL -->

                <div class="form-group">

                    <label for="email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter your email address"
                        value="{{ old('email') }}"
                        required
                        autocomplete="email"
                    >

                    <small
                        class="error-message"
                        id="emailError"
                    ></small>

                    @error('email')

                        <small class="server-error">
                            {{ $message }}
                        </small>

                    @enderror

                </div>


                <!-- PHONE -->

                <div class="form-group">

                    <label for="phone">
                        Phone Number
                    </label>

                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        placeholder="Enter your phone number"
                        value="{{ old('phone') }}"
                        required
                        autocomplete="tel"
                        maxlength="10"
                    >

                    <small
                        class="error-message"
                        id="phoneError"
                    ></small>

                </div>


                <!-- PASSWORD -->

                <div class="form-group">

                    <label for="password">
                        Password
                    </label>

                    <div class="password-wrapper">

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Create a password"
                            required
                            autocomplete="new-password"
                        >

                        <button
                            type="button"
                            class="password-toggle"
                            data-target="password"
                            aria-label="Show password"
                        >
                            Show
                        </button>

                    </div>

                    <small
                        class="password-hint"
                    >
                        Use at least 8 characters.
                    </small>

                    <small
                        class="error-message"
                        id="passwordError"
                    ></small>

                </div>


                <!-- CONFIRM PASSWORD -->

                <div class="form-group">

                    <label for="password_confirmation">
                        Confirm Password
                    </label>

                    <div class="password-wrapper">

                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            placeholder="Confirm your password"
                            required
                            autocomplete="new-password"
                        >

                        <button
                            type="button"
                            class="password-toggle"
                            data-target="password_confirmation"
                            aria-label="Show password"
                        >
                            Show
                        </button>

                    </div>

                    <small
                        class="error-message"
                        id="confirmPasswordError"
                    ></small>

                </div>


                <!-- TERMS -->

                <div class="terms-group">

                    <label class="checkbox-label">

                        <input
                            type="checkbox"
                            id="terms"
                            name="terms"
                            required
                        >

                        <span>
                            I agree to the
                            <a href="#">
                                Terms & Conditions
                            </a>
                            and
                            <a href="#">
                                Privacy Policy
                            </a>.
                        </span>

                    </label>

                    <small
                        class="error-message"
                        id="termsError"
                    ></small>

                </div>


                <!-- SUBMIT -->

                <button
                    type="submit"
                    class="signup-button"
                >

                    Create Account

                    <span>
                        →
                    </span>

                </button>


                <!-- LOGIN -->

                <p class="login-text">

                    Already have an account?

                    <a href="/login">
                        Login
                    </a>

                </p>

            </form>

        </div>

    </main>

</body>

</html>
