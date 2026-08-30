<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\OtpMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class SignupController extends Controller
{
    /**
     * Display the signup page.
     */
    public function showSignup()
    {
        return view('signup');
    }

    /**
     * Process signup and send OTP.
     */
    public function register(Request $request)
    {
        // Validate signup form
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users,email',
            ],

            'phone' => [
                'required',
                'digits:10',
            ],

            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
            ],
        ]);

        // Generate 6-digit OTP
        $otp = (string) random_int(100000, 999999);

        // Store temporary signup data in session
        session([
            'signup_data' => [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'password' => Hash::make($validated['password']),
            ],

            'otp_hash' => Hash::make($otp),

            'otp_purpose' => 'signup',

            'otp_expires_at' => now()->addMinutes(10),
        ]);

        // Send OTP email
        Mail::to($validated['email'])->send(
            new OtpMail(
                $validated['name'],
                $otp,
                'signup'
            )
        );

        // Redirect to OTP verification page
        return redirect()
            ->route('otp.verify')
            ->with(
                'success',
                'OTP has been sent to your email address.'
            );
    }
}
