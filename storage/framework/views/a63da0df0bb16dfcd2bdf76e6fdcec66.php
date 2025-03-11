<?php $__env->startSection('title', 'Login'); ?>
<link rel="preload" as="image" href="design_files/images/Student.jpg">

<?php $__env->startSection('content'); ?>
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
                    <a href="#" class="text-muted">Forgot password?</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple_content_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\LE_PROJECT_LARAVEL\LE_Project\resources\views/Login_Registers/login.blade.php ENDPATH**/ ?>