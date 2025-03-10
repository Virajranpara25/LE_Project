<?php $__env->startSection('title', 'Register'); ?>

<?php $__env->startSection('content'); ?>
<div class="login-background d-flex justify-content-center align-items-center min-vh-100">
    <!-- Register Card with Internal Lottie Animation -->
    <div class="row register-card shadow-lg rounded overflow-hidden bg-white position-relative" id="register-card">

        <!-- Lottie Container as Background -->
        <div class="lottie-card-bg position-absolute w-100 h-100">
            <dotlottie-player
                src="https://lottie.host/28b1663c-0aaf-4d72-aa72-60be941da3f3/5d2zQAJJEZ.lottie"
                background="transparent"
                speed="1"
                loop
                autoplay>
            </dotlottie-player>
        </div>

        <!-- Card Content: Registration Form -->
        <div class="col-md-12 p-4 d-flex flex-column justify-content-center position-relative form-container">
            
            <h3 class="text-center mb-4 " style="font-weight: 800;">Register Here</h3>
            <div class="form-wrapper mx-auto">
                <form action="<?php echo e(route('register')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <!-- Row 1: Name and Email -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control form-control-lg" required>
                        </div>
                    </div>
                    <!-- Row 2: Mobile and Enroll No -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="mobile">Mobile No</label>
                            <input type="text" id="mobile" name="mobile" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="enroll_no">Enroll No</label>
                            <input type="text" id="enroll_no" name="enroll_no" class="form-control form-control-lg" required>
                        </div>
                    </div>
                    <!-- Row 3: Course & Semester -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="course">Course</label>
                            <select id="course" name="course" class="form-control form-control-lg" required>
                                <option value="">-- Select Course --</option>
                                <option value="B.Tech">B.Tech</option>
                                <option value="B.Sc">B.Sc</option>
                                <option value="B.Com">B.Com</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="semester">Semester</label>
                            <select id="semester" name="semester" class="form-control form-control-lg" required>
                                <option value="">-- Select Semester --</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                    </div>
                    <!-- Row 4: Address -->
                    <div class="mb-3">
                        <label class="form-label" for="address">Address</label>
                        <textarea id="address" name="address" rows="3" class="form-control form-control-lg" required></textarea>
                    </div>
                    <!-- Row 5: City & State -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="city">City</label>
                            <input type="text" id="city" name="city" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="state">State</label>
                            <input type="text" id="state" name="state" class="form-control form-control-lg" required>
                        </div>
                    </div>
                    <!-- Row 6: Password & Confirm Password -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="password_confirmation">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg" required>
                        </div>
                    </div>
                    <button class="btn btn-dark btn-lg w-100 custom-login-btn" type="submit">Register</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.simple_content_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\LE_PROJECT_LARAVEL\LE_Project\resources\views/Login_Registers/Register.blade.php ENDPATH**/ ?>