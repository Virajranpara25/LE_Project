<?php $__env->startSection('title', 'Login'); ?>
<link rel="preload" as="image" href="design_files/images/Student.jpg">

<?php $__env->startSection('content'); ?>
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
            <div class="text-center mb-4">
                <img src="design_files/images/logo.png" alt="LE College" class="logo-img">
            </div>
            <h3 id="headinglbl">Welcome Login Here </h3>

            <form action="<?php echo e(route('login')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <!-- Dropdown for User Role -->
                <div class="mb-3">
                    <label class="form-label" for="user_role">Select Role</label>
                    <select id="user_role" name="user_role" class="form-control form-control-lg" required>
                        <option value="">-- Select Role --</option>
                        <option value="hod" <?php echo e(old('user_role') == 'hod' ? 'selected' : ''); ?>>HOD</option>
                        <option value="student" <?php echo e(old('user_role') == 'student' ? 'selected' : ''); ?>>STUDENT</option>
                        <option value="faculty" <?php echo e(old('user_role') == 'faculty' ? 'selected' : ''); ?>>FACULTY</option>
                        <option value="admin" <?php echo e(old('user_role') == 'admin' ? 'selected' : ''); ?>>ADMIN</option>
                    </select>
                    <span class="error-msg"><?php $__errorArgs = ['user_role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                </div>

                <!-- Enrollment Number Field -->
                <div class="mb-3">
                    <label class="form-label" for="enrollment_number">Enrollment Number</label>
                    <input type="text" id="enrollment_number" name="enrollment_number"
                        class="form-control form-control-lg"
                        value="<?php echo e(old('enrollment_number')); ?>" required />
                    <span class="error-msg"><?php $__errorArgs = ['enrollment_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                </div>

                <!-- Password Field -->
                <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password"
                        class="form-control form-control-lg" required />
                    <span class="error-msg"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                </div>

                <button class="btn btn-dark btn-lg w-100 custom-login-btn" type="submit">Login</button>

                <div class="text-center mt-3">
                    <a href="javascript:void(0);" id="forgetpasstxt" onclick="openForgotPasswordModal()">Forgot password?</a>
                </div>

            </form>
        </div>
    </div>
</div>





<!-- Forgot Password Modal -->
<div class="modal-overlay" id="forgotPasswordModal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeForgotPasswordModal()">&times;</span>
        <h4 class="form-label">Forgot Password</h4>
        <p style="font-weight: 500;">Enter your email address, and we’ll send you a OTP for verification.</p>

        <form id="resetPasswordForm">

            <div class="input-group mb-3">
                <input type="email" id="resetEmail" name="email" class="form-control" placeholder="Enter your email" required>
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


<script>
    var csrfToken = "<?php echo e(csrf_token()); ?>";
    var sendOtpRoute = "<?php echo e(route('send.otp')); ?>";
    var verifyOtpRoute = "<?php echo e(route('verify.otp')); ?>";
    var resetPassRoute = "<?php echo e(route('resetpass')); ?>";
</script>
<script src="<?php echo e(asset('design_files/js/custom.js')); ?>"></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.simple_content_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\LE_PROJECT_LARAVEL\LE_Project\resources\views/Login_Registers/login.blade.php ENDPATH**/ ?>