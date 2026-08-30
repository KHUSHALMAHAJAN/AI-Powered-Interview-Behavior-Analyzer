<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OtpController extends Controller
{
    /**
     * Display OTP verification page.
     */
    public function show()
    {
        if (!session()->has('otp_hash')) {
            return redirect('/signup')
                ->withErrors([
                    'otp' => 'OTP verification session has expired.',
                ]);
        }

        return view('verify-otp');
    }

    /**
     * Verify OTP.
     */
    public function verify(Request $request)
    {
        // Validate OTP
        $request->validate([
            'otp' => [
                'required',
                'digits:6',
            ],
        ]);

        // Check OTP session
        if (!session()->has('otp_hash')) {
            return redirect('/signup')
                ->withErrors([
                    'otp' => 'OTP session has expired.',
                ]);
        }

        // Check OTP expiry
        $expiresAt = session('otp_expires_at');

        if (
            !$expiresAt ||
            now()->greaterThan($expiresAt)
        ) {
            $this->clearOtpSession();

            return redirect('/signup')
                ->withErrors([
                    'otp' => 'OTP has expired. Please try again.',
                ]);
        }

        // Check OTP
        if (
            !Hash::check(
                $request->otp,
                session('otp_hash')
            )
        ) {
            return back()
                ->withErrors([
                    'otp' => 'Invalid OTP. Please try again.',
                ]);
        }

        // Check OTP purpose
        $purpose = session('otp_purpose');

        /*
        |--------------------------------------------------------------------------
        | SIGNUP OTP
        |--------------------------------------------------------------------------
        */

        if ($purpose === 'signup') {

            $signupData = session('signup_data');

            if (!$signupData) {

                $this->clearOtpSession();

                return redirect('/signup')
                    ->withErrors([
                        'otp' => 'Signup session has expired.',
                    ]);
            }

            // Check email again before creating user
            if (
                User::where(
                    'email',
                    $signupData['email']
                )->exists()
            ) {
                $this->clearOtpSession();

                return redirect('/signup')
                    ->withErrors([
                        'email' => 'This email address is already registered.',
                    ]);
            }

            // Create user
            $user = User::create([
                'name' => $signupData['name'],
                'email' => $signupData['email'],
                'phone' => $signupData['phone'],
                'password' => $signupData['password'],
            ]);

            // Clear temporary signup + OTP data
            $this->clearOtpSession();

            // Log user in
            Auth::login($user);

            // Regenerate session ID
            $request->session()->regenerate();

            return redirect('/')
                ->with(
                    'success',
                    'Email verified successfully. Welcome to AI Interview Analyzer!'
                );
        }


        /*
        |--------------------------------------------------------------------------
        | LOGIN OTP
        |--------------------------------------------------------------------------
        */

        if ($purpose === 'login') {

            $userId = session('login_user_id');

            if (!$userId) {

                $this->clearOtpSession();

                return redirect('/login')
                    ->withErrors([
                        'otp' => 'Login session has expired. Please login again.',
                    ]);
            }

            // Find user
            $user = User::find($userId);

            if (!$user) {

                $this->clearOtpSession();

                return redirect('/login')
                    ->withErrors([
                        'email' => 'User account was not found.',
                    ]);
            }

            // Clear OTP data
            $this->clearOtpSession();

            // Login user
            Auth::login($user);

            // Regenerate session ID
            $request->session()->regenerate();

            return redirect('/')
                ->with(
                    'success',
                    'Login successful. Welcome back!'
                );
        }


        /*
        |--------------------------------------------------------------------------
        | UNKNOWN PURPOSE
        |--------------------------------------------------------------------------
        */

        $this->clearOtpSession();

        return redirect('/login')
            ->withErrors([
                'otp' => 'Invalid OTP request.',
            ]);
    }


    /**
     * Clear OTP session data.
     */
    private function clearOtpSession(): void
    {
        session()->forget([
            'signup_data',
            'login_user_id',
            'otp_hash',
            'otp_purpose',
            'otp_expires_at',
        ]);
    }
}
