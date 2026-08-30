<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\OtpMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    /**
     * Display login page.
     */
    public function showLogin()
    {
        return view('login');
    }

    /**
     * Check login credentials and send OTP.
     */
    public function login(Request $request)
    {
        // Validate login form
        $validated = $request->validate([
            'email' => [
                'required',
                'email',
            ],

            'password' => [
                'required',
                'string',
            ],
        ]);

        // Find user by email
        $user = User::where(
            'email',
            $validated['email']
        )->first();

        // Check user and password
        if (
            !$user ||
            !Hash::check(
                $validated['password'],
                $user->password
            )
        ) {
            return back()
                ->withInput($request->only('email'))
                ->withErrors([
                    'email' => 'Invalid email or password.',
                ]);
        }

        // Generate 6-digit OTP
        $otp = (string) random_int(100000, 999999);

        // Store login information in session
        session([
            'login_user_id' => $user->id,

            'otp_hash' => Hash::make($otp),

            'otp_purpose' => 'login',

            'otp_expires_at' => now()->addMinutes(10),
        ]);

        // Send OTP email
        Mail::to($user->email)->send(
            new OtpMail(
                $user->name,
                $otp,
                'login'
            )
        );

        // Redirect to OTP verification
        return redirect()
            ->route('otp.verify')
            ->with(
                'success',
                'Login OTP has been sent to your email address.'
            );
    }
}
