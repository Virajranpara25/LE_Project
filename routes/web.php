<?php

use App\Http\Controllers\StudentRegistration_Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    return view('homepage.index');
})->name('index');


Route::get('/login', function () {
    return view('Login_Registers.login');
})->name('login');

Route::post('/login',[StudentRegistration_Controller::class, 'login'])->name('login');

//Create a New Laravel Route to Send OTP
Route::post('/send_otp', [StudentRegistration_Controller::class,'verify_email'])->name('send_otp');





// Create a Laravel Route to Verify OTP
Route::post('/verify-otp', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'otp' => 'required|numeric'
    ]);

    $storedOtp = Cache::get('otp_' . $request->email);

    if ($storedOtp && $storedOtp == $request->otp) {
        Cache::forget('otp_' . $request->email); // Remove OTP after successful verification
        return response()->json(['success' => true, 'message' => 'OTP verified!']);
    } else {
        return response()->json(['success' => false, 'message' => 'Invalid or expired OTP!']);
    }
})->name('verify.otp');




// Show Reset Password Form

Route::get('/reset-password', function () {
    return view('Login_Registers.Reset_Password');
})->name('resetpass');

// Handle Password Reset Submission   JIYARE OTP VERFY THY JAY PACHI NEW PASSWORD RAKHVA MATE Reset_Password MA REDIRECT KARE PACHI AE NE DATA BASE MA UPDATED PASS NE SAVE KARVA MATE JAY
Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6|confirmed',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return back()->withErrors(['email' => 'User not found!']);
    }

    // Update the password
    $user->password = Hash::make($request->password);
    $user->save();

    return redirect()->route('login')->with('success', 'Password reset successful. Please log in.');
})->name('password.update');

//for student registration
Route::get('/register', function () {
    return view('Login_Registers.Register');
})->name('register');

Route::post('/register',[StudentRegistration_Controller::class, 'student_registration'])->name('student_registration');    


