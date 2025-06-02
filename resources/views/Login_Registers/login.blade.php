@extends('layouts.simple_content_layout')

@section('title', 'Login')
<link rel="preload" as="image" href="design_files/images/Student.jpg">

@section('content')
<div class="login-background d-flex justify-content-center align-items-center min-vh-100">
    <div class="row login-card shadow-lg rounded overflow-hidden bg-white" id="login-card">

        <!-- Left Side: Image (Hidden on Small Screens) -->
        <div class="col-md-5  p-0 " id="hideimg">
            <img src="design_files/images/Student.jpg"
                alt="Login Form"

                class="img-fluid full-height rounded-start" />
        </div>

        <!-- Right Side: Login Form -->
        <div class="col-md-7 p-4 d-flex flex-column justify-content-center">
            <div class="text-center mb-3">
                <img src="design_files/images/logo.png" alt="LE College" class="logo-img">
            </div>
            <h3 id="headinglbl">Welcome Login Here </h3>

            @if(session('success'))
            <div id="formErrorAlert" class="alert alert-success alert-dismissible  show d-flex align-items-center" role="alert" style="border-radius: 5px;font-size: 16px; font-weight: bold;margin-bottom: -10px;">
                {{ session('success') }}
                <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
            </div>
            @endif

            <div id="customErrorContainer">
            @if(session('error'))
            <div id="formErrorAlert" class="alert alert-danger alert-dismissible show d-flex align-items-center" role="alert" style="border-radius: 5px; font-size: 16px; font-weight: bold;margin-bottom: -10px;">
                {{ session('error') }}
                <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
            </div>
            @endif
            </div>



            <form action="{{ route('login') }}" method="POST">
                @csrf

                <!-- Dropdown for User Role -->
                <div class="mb-3">
                    <label class="form-label" for="user_role">Select Role</label>
                    <select id="user_role" name="user_role" class="form-control form-control-lg">
                            <option value="">-- Select Role --</option>
                        <option value="hod" {{ old('user_role') == 'hod' ? 'selected' : '' }}>HOD</option>
                        <option value="student" {{ old('user_role') == 'student' ? 'selected' : '' }}>STUDENT</option>
                        <option value="faculty" {{ old('user_role') == 'faculty' ? 'selected' : '' }}>FACULTY</option>
                        <option value="admin" {{ old('user_role') == 'admin' ? 'selected' : '' }}>ADMIN</option>
                    </select>
                    @error('user_role') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <!-- Enrollment Number Field -->
                <div class="mb-3">
                    <label class="form-label" for="enrollment_number">Enrollment Number</label>
                    <input type="text" id="enrollment_number" name="enrollment_number"
                        class="form-control form-control-lg"
                        value="{{ old('enrollment_number') }}" />
                        @error('enrollment_number') <div class="text-danger">{{ $message }}</div> @enderror

                </div>

                <!-- Password Field -->
                <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password"
                        class="form-control form-control-lg" />
                        @error('password') <div class="text-danger">{{ $message }}</div> @enderror

                </div>

                <button class="btn mt-4 btn-dark btn-lg w-100 custom-login-btn" type="submit">Login</button>

                <div class="text-center mt-3">
                    <a href="javascript:void(0);" id="forgetpasstxt" onclick="checkUserRoleBeforeForgot()">Forgot password?</a>
                </div>

            </form>
        </div>
    </div>
</div>

<script>
     function checkUserRoleBeforeForgot() {
        const userRole = document.getElementById('user_role').value;

        if (!userRole) {
            const errorContainer = document.getElementById('customErrorContainer');
        errorContainer.innerHTML = `
            <div id="formErrorAlert" class="alert alert-danger alert-dismissible show d-flex align-items-center" role="alert" style="border-radius: 5px; font-size: 16px; font-weight: bold;margin-bottom: -10px;">
                Please select a user role before proceeding.
            </div>
        `;
        return;
        } else {
            openForgotPasswordModal(); // This opens your forgot password popup
        }
    }
</script>




<!-- Forgot Password Modal -->
<div class="modal-overlay" id="forgotPasswordModal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeForgotPasswordModal()">&times;</span>
        <h4 class="form-label">Forgot Password</h4>
        <p style="font-weight: 500;">Enter your email address, and we’ll send you a OTP for verification.</p>

        <form id="resetPasswordForm" action="{{ route('send_otp') }}" method="POST">
        @csrf
            <div class="input-group mb-3">
                <input type="email" id="resetEmail" name="email" class="form-control" placeholder="Enter your email">
                @error('email') <div class="text-danger">{{ $message }}</div> @enderror

            </div>
            <button type="button" class="btn btn-primary w-100 " id="SendOtpBtn" onclick="sendOtp()">Send OTP</button>

            </form>
        </div>  
    </div>

<!-- OTP Verification Modal -->
<div class="modal-overlay" id="otpModal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeOtpModal()">&times;</span>
        <h4 class="form-label">Enter OTP</h4>
        <p style="font-weight: 500;">A 6-digit OTP has been sent to your email. Enter it below to reset your password.</p>

        <!-- Countdown Timer -->
        <p id="otp-timer" class="otp-timer">Time remaining: <span id="countdown">05:00</span></p>

        <form id="verifyOtpForm">
            <input type="hidden" id="otpInput" name="otp">

            <div class="otp-input-container">
                <input type="text" id="otp1" class="otp-input" maxlength="1" onkeyup="moveToNext(this, 'otp2')">
                <input type="text" id="otp2" class="otp-input" maxlength="1" onkeyup="moveToNext(this, 'otp3')">
                <input type="text" id="otp3" class="otp-input" maxlength="1" onkeyup="moveToNext(this, 'otp4')">
                <input type="text" id="otp4" class="otp-input" maxlength="1" onkeyup="moveToNext(this, 'otp5')">
                <input type="text" id="otp5" class="otp-input" maxlength="1" onkeyup="moveToNext(this, 'otp6')">
                <input type="text" id="otp6" class="otp-input" maxlength="1" onkeyup="combineOtp()">
            </div>
            <button type="button" class="btn btn-success w-100 custom-login-btn" onclick="verifyOtp()" id="verify-btn">
                Verify OTP
            </button>
        </form>

        <p id="resendOtpMsg" style="color: gray;font-weight:bold;">Didn't receive Otp? <a href="#" onclick="resendOtp()" class="resend-text">Resend OTP</a></p>
    </div>
</div>



<script src="{{ asset('design_files/js/custom.js') }}"></script>


<script>
document.addEventListener("DOMContentLoaded", function () {
    const fields = document.querySelectorAll('#user_role, #enrollment_number, #password');

    fields.forEach(field => {
        field.addEventListener('input', function () {
            const errorAlert = document.getElementById('formErrorAlert');
            if (errorAlert) {
                errorAlert.remove(); // or errorAlert.style.display = 'none';
            }
        });
    });
});
</script>


@endsection