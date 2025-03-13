@extends('layouts.simple_content_layout')

@section('title', 'Reset Password')

@section('content')
<div class="reset-password-container d-flex justify-content-center align-items-center min-vh-100">
    <div class="reset-password-card d-flex shadow-lg rounded overflow-hidden bg-white">

        <!-- Left Side: Lottie Animation -->
        <div class="lottie-container d-flex align-items-center justify-content-center p-4">
            <dotlottie-player
                src="https://lottie.host/c92b3123-5ecf-4fd1-8cf5-16c3bf8521d1/yzEMlUsfP6.lottie"
                background="transparent"
                speed="1"
                style="width: 100%; height: auto; max-width: 250px;"
                loop
                autoplay>
            </dotlottie-player>
        </div>

        <!-- Right Side: Reset Password Form -->
        <div class="form-container p-4 w-100">
            <h3  class="resetlbl">Reset Your Password</h3>
            <p class="text-muted mb-3  resetlbl">Enter a new password for your account.</p>

            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                <input type="hidden" name="email" value="{{ request()->email }}">

                <div class="mb-3">
                    <label class="resetlbl">New Password</label>
                    <input type="password" name="password" class="form-control custom-input" required>
                </div>

                <div class="mb-3">
                    <label class="resetlbl">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control custom-input" required>
                </div>

                <button type="submit" class="btn btn-dark w-100 custom-btn">Reset Password</button>
            </form>
        </div>
    </div>
</div>
@endsection