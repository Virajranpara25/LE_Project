<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

use App\Models\Student_Data;
use App\Models\HOD_Data;
use App\Models\Faculty_Data;
use App\Models\Principal_Data;

class UserLogin_Controller extends Controller
{
    public function login(Request $request)
    {
        // Validate request input
        $request->validate([
            'user_role' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $role = $request->input('user_role');
        $username = $request->input('username');
        $password = $request->input('password');

        $user = null;
        $guard = null;
        $passwordMatched = false;

        // Identify user and corresponding guard
        switch ($role) {
            case 'student':
                $user = Student_Data::where('Stu_Enrollment_NO', $username)->first();
                $guard = 'student';
                if ($user && Hash::check($password, $user->Stu_password)) {
                    $passwordMatched = true;
                }
                break;

            case 'faculty':
                $user = Faculty_Data::where('F_id', $username)->first();
                $guard = 'faculty';
                if ($user && Hash::check($password, $user->F_password)) {
                    $passwordMatched = true;
                }
                break;

            case 'hod':
                $user = HOD_Data::where('HOD_id', $username)->first();
                $guard = 'hod';
                if ($user && Hash::check($password, $user->HOD_Password)) {
                    $passwordMatched = true;
                }
                break;

            case 'principal':
                $user = Principal_Data::where('Pr_id', $username)->first();
                $guard = 'principal';
                if ($user && Hash::check($password, $user->Pr_password)) {
                    $passwordMatched = true;
                }
                break;

            default:
                return back()->with('error', 'Invalid role selected.');
        }

        if (!$user || !$passwordMatched) {
            return back()->with('error', 'Invalid credentials.');
        }

        // Login the user using proper guard
        Auth::guard($guard)->login($user);

        // Redirect to common dashboard or homepage
        return redirect()->route('index')->with('success', 'Login successful.');
    }

    public function send_otp(Request $request)
    {
        Log::info('OTP Request Data:', $request->all()); // Add this line

        $request->validate([
            'resetEmail' => 'required|email',
            'user_role' => 'required'
        ]);

        $email = $request->resetEmail;
        $role = $request->user_role;

        // Get user based on role
        $user = match ($role) {
            'student' => Student_Data::where('Stu_emailid', $email)->first(),
            'faculty' => Faculty_Data::where('F_emailid', $email)->first(),
            'hod'     => HOD_Data::where('HOD_emailid', $email)->first(),
            'principal' => Principal_Data::where('Pr_email_id', $email)->first(),
            default   => null
        };

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'Email not found for selected role']);
        }

        // Generate and cache OTP
        $otp = rand(100000, 999999);
        Cache::put("otp_{$role}_{$email}", $otp, now()->addSeconds(90)); // 1.5 min
        Session::put('verified_role', $role); // Store role in session

        // Send OTP
        try {
        Mail::raw("Dear user,\n\nYour One-Time Password (OTP) for password reset is: 
            $otp\n\nThis OTP will expire in 1.5 minutes.\n\nIf you did not request a password reset, 
            please ignore this message.\n\nRegards,\nLE College Support Team", function ($message) use ($email) {
            $message->to($email)->subject("LE College - OTP Verification");
        });

   
} catch (\Exception $e) {
    return response()->json([
        'success' => false,
        'message' => 'Failed to send OTP. ' . $e->getMessage()
    ], 500);
}


        return response()->json(['success' => true, 'message' => 'OTP sent to your email.']);
    }
}
