<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Verify OTP - AI Interview Analyzer
    </title>

    @vite([
        'resources/css/otp.css'
    ])

</head>


<body>

    <main class="otp-container">

        <section class="otp-card">


            <!-- LOGO -->

            <div class="otp-logo">

                <img
                    src="{{ asset('images/logo.png') }}"
                    alt="AI Interview Analyzer Logo"
                    class="otp-logo-image"
                >

                <h1>
                    AI Interview
                    <span>Analyzer</span>
                </h1>

                <p>
                    Analyze • Improve • Succeed
                </p>

            </div>


            <!-- HEADING -->

            <h2>
                Verify Your Email
            </h2>


            @if (session('otp_purpose') === 'login')

                <p class="otp-description">

                    Enter the 6-digit OTP sent to your
                    email to complete your login.

                </p>

            @else

                <p class="otp-description">

                    Enter the 6-digit OTP sent to your
                    email to complete your registration.

                </p>

            @endif


            <!-- EMAIL -->

            @if (session('signup_data.email'))

                <div class="otp-email">

                    {{ session('signup_data.email') }}

                </div>

            @endif


            @if (session('otp_purpose') === 'login')

                @php
                    $loginUser = \App\Models\User::find(
                        session('login_user_id')
                    );
                @endphp

                @if ($loginUser)

                    <div class="otp-email">

                        {{ $loginUser->email }}

                    </div>

                @endif

            @endif


            <!-- SUCCESS MESSAGE -->

            @if (session('success'))

                <div class="otp-success">

                    {{ session('success') }}

                </div>

            @endif


            <!-- ERROR MESSAGE -->

            @if ($errors->any())

                <div class="otp-error">

                    @foreach ($errors->all() as $error)

                        <p>
                            {{ $error }}
                        </p>

                    @endforeach

                </div>

            @endif


            <!-- OTP FORM -->

            <form
                method="POST"
                action="{{ route('otp.verify.submit') }}"
            >

                @csrf


                <input
                    type="text"
                    name="otp"
                    class="otp-input"
                    maxlength="6"
                    minlength="6"
                    inputmode="numeric"
                    pattern="[0-9]{6}"
                    autocomplete="one-time-code"
                    placeholder="Enter OTP"
                    required
                    autofocus
                >


                <button
                    type="submit"
                    class="otp-button"
                >
                    Verify OTP
                </button>

            </form>


            <!-- FOOTER -->

            <div class="otp-footer">

                @if (session('otp_purpose') === 'login')

                    <p>
                        Want to try again?
                    </p>

                    <a href="{{ url('/login') }}">
                        Back to Login
                    </a>

                @else

                    <p>
                        Didn't receive the OTP?
                    </p>

                    <a href="{{ url('/signup') }}">
                        Signup Again
                    </a>

                @endif

            </div>


        </section>

    </main>

</body>

</html>
