<?php

use App\Http\Controllers\FacultyRegistration_Controller;
use App\Http\Controllers\StudentRegistration_Controller;
use App\Http\Controllers\HODRegistration_Controller;
use App\Http\Controllers\UserLogin_Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    return view('homepage.index');
})->name('index');


Route::get('/login', function () {
    return view('Login_Registers.login');
})->name('login');

Route::post('/login', [UserLogin_Controller::class, 'login'])->name('login');

//Create a New Laravel Route to Send OTP
Route::post('/send_otp', [UserLogin_Controller::class,'send_otp'])->name('send_otp');


//for student registration  
Route::get('/student_register',[StudentRegistration_Controller::class, 'student_registration'])->name('student_register');

Route::post('/student_register',[StudentRegistration_Controller::class, 'student_registration'])->name('student_register');    



//for faculty registration
Route::get('/faculty_register', [FacultyRegistration_Controller::class, 'faculty_registration'])->name('faculty_register');

Route::post('/faculty_register',[FacultyRegistration_Controller::class, 'faculty_registration'])->name('faculty_register');    

//for HOD registration  

Route::get('/HOD_register', [HODRegistration_Controller::class, 'HOD_registration'])->name('HOD_register');

Route::post('/HOD_register',[HODRegistration_Controller::class, 'HOD_registration'])->name('HOD_register');    


Route::get('/mail-test', function () {
    try {
        Mail::raw('This is a test email.', function ($message) {
            $message->to('your_email@gmail.com')
                    ->subject('Laravel Mail Test');
        });

        return "Mail sent successfully!";
    } catch (\Exception $e) {
        return "Mail failed: " . $e->getMessage();
    }
});

?>