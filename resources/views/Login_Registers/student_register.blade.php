@extends('layouts.simple_content_layout')

@section('title', 'Register')

@section('content')
<div class="login-background_R d-flex justify-content-center align-items-center min-vh-100">
    <!-- Register Card -->
    <div class="row register-card shadow-lg rounded overflow-hidden bg-white" id="register-card" style="width: 90%; max-width: 1250px;">

        <!-- Lottie Background -->
        <div class="lottie-card-bg position-absolute w-100 h-100">
            <dotlottie-player
                src="https://lottie.host/28b1663c-0aaf-4d72-aa72-60be941da3f3/5d2zQAJJEZ.lottie"
                background="transparent"
                speed="1"
                loop
                autoplay>
            </dotlottie-player>
        </div>

        <!-- Mobile View Header -->
        <div class="d-flex align-items-center px-3 py-2 w-100 d-md-none" style="border-bottom: 3px solid #ccc; background: #fff; z-index: 2;">
            <img src="{{ asset('design_files/images/logo.png') }}" alt="Logo" style="height: 90px;">
            <div style="font-weight: bold; font-size: 27px; color:black; margin-left: 20px;">REGISTER HERE</div>
        </div>

        <!-- Left Column (Desktop) -->
        <div class="col-md-1 d-none d-md-flex flex-column align-items-center justify-content-center bg-light py-4 position-relative">
            <img src="{{ asset('design_files/images/logo.png') }}" alt="Logo" class="mb-4" id="logo_register">
            <div class="text-center">
                @foreach(str_split('REGISTER HERE') as $char)
                <div style="font-size: 25px; font-weight: bold; color: black;">
                    {!! $char === ' ' ? '&nbsp;' : $char !!}
                </div>
                @endforeach
            </div>
            <div style="position: absolute; right: 0; top: 0; bottom: 0; width: 3px; background-color: #ccc;"></div>
        </div>




        <!-- Right Column: Form -->
        <div class="col-md-11 d-flex flex-column justify-content-center position-relative form-container py-3">
            @if (session('success'))
            <div class="alert alert-success auto-hide-alert" style="border-radius: 5px; font-size: 16px; font-weight: bold;">
                {{ session('success') }}
            </div>
            @endif

            @if (session('error'))
            <div class="alert alert-danger auto-hide-alert" style="border-radius: 5px; font-size: 16px; font-weight: bold;">
                {{ session('error') }}
            </div>
            @endif

            
            <div class="form-wrapper mx-auto">
                <form action="{{ route('student_registration') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Row 1 -->
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="enroll_no">Enroll No</label>
                            <input type="text" id="enroll_no" name="enroll_no" value="{{ old('enroll_no') }}" class="form-control form-control-lg">
                            @error('enroll_no') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control form-control-lg">
                            @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="email">Email</label>
                            <input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control form-control-lg">
                            @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control form-control-lg">
                            @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="password_confirmation">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg">
                            @error('password_confirmation') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="gender">Gender</label>
                            <select id="gender" name="gender" class="form-control form-control-lg">
                                <option value="">-- Select Gender --</option>
                                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('gender') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <!-- Row 3 -->
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="mobile">Mobile No</label>
                            <input type="text" id="mobile" name="mobile" value="{{ old('mobile') }}" class="form-control form-control-lg">
                            @error('mobile') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="parents_mobile">Parents Mobile No</label>
                            <input type="text" id="parents_mobile" name="parents_mobile" value="{{ old('parents_mobile') }}" class="form-control form-control-lg">
                            @error('parents_mobile') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="branch">Branch</label>
                            <select id="branch" name="branch" class="form-control form-control-lg">
                                <option value="">-- Select Branch --</option>
                                @foreach([
                                'Information Technology',
                                'Electrical Engineering',
                                'Mechanical Engineering',
                                'Civil Engineering',
                                'Chemical Engineering',
                                'Metallurgy Engineering',
                                'Information and Communication Technology',
                                'Ceramic Engineering'
                                ] as $branch)
                                <option value="{{ 45 }}" {{ old('branch') == $branch ? 'selected' : '' }}>{{ $branch }}</option>
                                @endforeach
                            </select>
                            @error('branch') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <!-- Row 4 -->
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="semester">Semester</label>
                            <select id="semester" name="semester" class="form-control form-control-lg">
                                <option value="">-- Select Semester --</option>
                                @for ($i = 1; $i <= 6; $i++)
                                    <option value="{{ $i }}" {{ old('semester') == $i ? 'selected' : '' }}>{{ $i }}</option>
                                    @endfor
                            </select>
                            @error('semester') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="city">City</label>
                            <input type="text" id="city" name="city" value="{{ old('city') }}" class="form-control form-control-lg">
                            @error('city') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="state">State</label>
                            <input type="text" id="state" name="state" value="{{ old('state') }}" class="form-control form-control-lg">
                            @error('state') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <!-- Row 5 -->
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="current_address">Current Address</label>
                            <textarea id="current_address" name="current_address" rows="3" class="form-control form-control-lg">{{ old('current_address') }}</textarea>
                            @error('current_address') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="permanent_address">Permanent Address</label>
                            <textarea id="permanent_address" name="permanent_address" rows="3" class="form-control form-control-lg">{{ old('permanent_address') }}</textarea>
                            @error('permanent_address') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <!-- Row 6 -->
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="profile_image">Profile Image</label>
                            <input type="file" id="profile_image" name="profile_image" class="form-control form-control-lg" accept="image/*">
                            @error('profile_image') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6 mb-2 d-flex align-items-end">
                            <button class="btn btn-dark btn-lg w-100 custom-login-btn" type="submit">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection