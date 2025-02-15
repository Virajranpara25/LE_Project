@extends('layouts.master')

@section('title', 'LE College(Diploma), Morbi')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row w-75 shadow-lg rounded overflow-hidden bg-white custom-shadow">

        <!-- Left Side: Image (Hidden on Small Screens) -->
        <div class="col-md-6 d-none d-md-block p-0">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="Login Form" class="img-fluid full-height rounded-start" />
        </div>

        <!-- Right Side: Login Form -->
        <div class="col-md-6 p-4 d-flex flex-column justify-content-center">
            <h3 class="text-center mb-4">Welcome Back</h3>
            <form action="{{ route('login') }}" method="POST">
                @csrf


                <!-- Dropdown for User Role -->
                <div class="form-outline mb-3">
                    <label class="form-label" for="user_role">Select Role</label>
                    <select id="user_role" name="user_role" class="form-control form-control-lg" required>
                        <option value="">-- Select Role --</option>
                        <option value="hod" {{ old('user_role') == 'hod' ? 'selected' : '' }}>HOD</option>
                        <option value="student" {{ old('user_role') == 'student' ? 'selected' : '' }}>STUDENT</option>
                        <option value="admin" {{ old('user_role') == 'admin' ? 'selected' : '' }}>ADMIN</option>
                    </select>
                    <span class="error-msg">@error('user_role') {{ $message }} @enderror</span>
                </div>


                <!-- Enrollment Number Field -->
                <div class="form-outline mb-3">
                    <label class="form-label" for="enrollment_number">Enrollment Number</label>
                    <input type="text" id="enrollment_number" name="enrollment_number" class="form-control form-control-lg" value="{{ old('enrollment_number') }}" required />
                    <span class="error-msg">@error('enrollment_number') {{ $message }} @enderror</span>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg" required />
                    <span class="error-msg">@error('password') {{ $message }} @enderror</span>
                </div>

                <button class="btn btn-dark btn-lg w-100" type="submit">Login</button>

                <div class="text-center mt-3">
                    <a href="#" class="text-muted">Forgot password?</a>
                </div>
                <!-- <p class="text-center text-muted mt-3">
                    <a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a>
                </p> -->
            </form>
        </div>
    </div>
</div>

<!-- Custom Styles -->
<style>
    /* Apply a Blue Box Shadow */
    .custom-shadow {
        box-shadow: 0px 4px 15px rgba(0, 0, 255, 0.3) !important;
    }

    /* Full Height Image */
    .full-height {
        height: 100%;
        object-fit: cover;
    }

    /* Error Message Styling */
    .error-msg {
        color: red;
        font-size: 14px;
        display: block;
        margin-top: 4px;
    }

    /* Centering Form */
    .d-flex.flex-column.justify-content-center {
        min-height: 90vh;
    }

    /* Mobile Adjustments */
    @media (max-width: 768px) {
        .container {
            padding: 20px;
        }

        h3 {
            font-size: 24px;
        }

        .text-center {
            font-size: 14px;
        }
    }
</style>
@endsection