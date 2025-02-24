@extends('layouts.simple_content_layout')

@section('title', 'Login')
<link rel="preload" as="image" href="design_files/images/Student.jpg">

@section('content')
<div class="login-background d-flex justify-content-center align-items-center min-vh-100">
    <div class="row login-card shadow-lg rounded overflow-hidden bg-white" id="login-card">
        
        <!-- Left Side: Image (Hidden on Small Screens) -->
        <div class="col-md-5 d-none d-md-block p-0">
            <img src="design_files/images/Student.jpg"
                 alt="Login Form"
            
                 class="img-fluid full-height rounded-start" />
        </div>
        
        <!-- Right Side: Login Form -->
        <div class="col-md-7 p-4 d-flex flex-column justify-content-center">
            <div class="text-center mb-4">
                <img src="design_files/images/logo.png" alt="LE College" class="logo-img">
            </div>
            <h3 class="text-center mb-4">Welcome Login Here </h3>
            
            <form action="{{ route('login') }}" method="POST">
                @csrf

                <!-- Dropdown for User Role -->
                <div class="mb-3">
                    <label class="form-label" for="user_role">Select Role</label>
                    <select id="user_role" name="user_role" class="form-control form-control-lg" required>
                        <option value="">-- Select Role --</option>
                        <option value="hod" {{ old('user_role') == 'hod' ? 'selected' : '' }}>HOD</option>
                        <option value="student" {{ old('user_role') == 'student' ? 'selected' : '' }}>STUDENT</option>
                        <option value="faculty" {{ old('user_role') == 'faculty' ? 'selected' : '' }}>FACULTY</option>
                        <option value="admin" {{ old('user_role') == 'admin' ? 'selected' : '' }}>ADMIN</option>
                    </select>
                    <span class="error-msg">@error('user_role') {{ $message }} @enderror</span>
                </div>

                <!-- Enrollment Number Field -->
                <div class="mb-3">
                    <label class="form-label" for="enrollment_number">Enrollment Number</label>
                    <input type="text" id="enrollment_number" name="enrollment_number"
                           class="form-control form-control-lg"
                           value="{{ old('enrollment_number') }}" required />
                    <span class="error-msg">@error('enrollment_number') {{ $message }} @enderror</span>
                </div>

                <!-- Password Field -->
                <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password"
                           class="form-control form-control-lg" required />
                    <span class="error-msg">@error('password') {{ $message }} @enderror</span>
                </div>

                <button class="btn btn-dark btn-lg w-100 custom-login-btn" type="submit">Login</button>


                <div class="text-center mt-3">
                    <a href="#" class="text-muted">Forgot password?</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
