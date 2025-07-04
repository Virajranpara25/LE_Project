

<?php $__env->startSection('title', 'HOD Registration'); ?>

<?php $__env->startSection('content'); ?>
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
            <img src="<?php echo e(asset('design_files/images/logo.png')); ?>" alt="Logo" style="height: 90px;">
            <div style="font-weight: bold; font-size: 27px; color:black; margin-left: 20px;">REGISTER HERE</div>
        </div>

        <!-- Left Column (Desktop) -->
        <div class="col-md-1 d-none d-md-flex flex-column align-items-center justify-content-center bg-light py-4 position-relative">
            <img src="<?php echo e(asset('design_files/images/logo.png')); ?>" alt="Logo" class="mb-4" id="logo_register">
            <div class="text-center">
                <?php $__currentLoopData = str_split('REGISTER HERE'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $char): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div style="font-size: 25px; font-weight: bold; color: black;">
                    <?php echo $char === ' ' ? '&nbsp;' : $char; ?>

                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div style="position: absolute; right: 0; top: 0; bottom: 0; width: 3px; background-color: #ccc;"></div>
        </div>




        <!-- Right Column: Form -->
        <div class="col-md-11 d-flex flex-column justify-content-center position-relative form-container py-3">
            <?php if(session('success')): ?>
            <div class="alert alert-success auto-hide-alert" style="border-radius: 5px; font-size: 16px; font-weight: bold;">
                <?php echo e(session('success')); ?>

            </div>
            <?php endif; ?>

            <?php if(session('error')): ?>
            <div class="alert alert-danger auto-hide-alert" style="border-radius: 5px; font-size: 16px; font-weight: bold;">
                <?php echo e(session('error')); ?>

            </div>
            <?php endif; ?>



            <div class="form-wrapper mx-auto">
                <form action="<?php echo e(route('HOD_register')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <!-- Row 1 -->
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="HOD_id">HOD ID</label>
                            <input type="text" id="HOD_id" name="HOD_id" value="<?php echo e(old('HOD_id')); ?>" class="form-control form-control-lg">
                            <?php $__errorArgs = ['HOD_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="name">HOD Name</label>
                            <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" class="form-control form-control-lg">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="email">Email</label>
                            <input type="text" id="email" name="email" value="<?php echo e(old('email')); ?>" class="form-control form-control-lg">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control form-control-lg">
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="password_confirmation">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg">
                            <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="gender">Gender</label>
                            <select id="gender" name="gender" class="form-control form-control-lg">
                                <option value="">-- Select Gender --</option>
                                <option value="Male" <?php echo e(old('gender') == 'Male' ? 'selected' : ''); ?>>Male</option>
                                <option value="Female" <?php echo e(old('gender') == 'Female' ? 'selected' : ''); ?>>Female</option>
                                <option value="Other" <?php echo e(old('gender') == 'Other' ? 'selected' : ''); ?>>Other</option>
                            </select>
                            <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>




                    <!-- Row 3 -->
                    <div class="row">

                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="city">City</label>
                            <input type="text" id="city" name="city" value="<?php echo e(old('city')); ?>" class="form-control form-control-lg">
                            <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="state">State</label>
                            <input type="text" id="state" name="state" value="<?php echo e(old('state')); ?>" class="form-control form-control-lg">
                            <?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="mobile_no">Mobile No</label>
                            <input type="text" id="phone_no" name="phone_no" value="<?php echo e(old('phone_no')); ?>" class="form-control form-control-lg">
                            <?php $__errorArgs = ['phone_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>



                    <!-- Row 4 -->
                    <div class="row">

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="branch">Faculty Department</label>
                            <select id="branch" name="branch" class="form-control form-control-lg">
                                <option value="">-- Select Branch --</option>
                                <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($branch->Br_id); ?>" <?php echo e(old('branch') == $branch->Br_id ? 'selected' : ''); ?>>
                                    <?php echo e($branch->Br_name); ?> 
                                </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>
                            <?php $__errorArgs = ['branch'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>



                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="profile_image">Profile Image</label>
                            <input type="file" id="profile_image" name="profile_image" class="form-control form-control-lg" accept="image/*">
                            <?php $__errorArgs = ['profile_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>


                    </div>

                    <!-- Row 5 -->
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="current_address">Current Address</label>
                            <textarea id="current_address" name="current_address" rows="3" class="form-control form-control-lg"><?php echo e(old('current_address')); ?></textarea>
                            <?php $__errorArgs = ['current_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="permanent_address">Permanent Address</label>
                            <textarea id="permanent_address" name="permanent_address" rows="3" class="form-control form-control-lg"><?php echo e(old('permanent_address')); ?></textarea>
                            <?php $__errorArgs = ['permanent_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <!-- Row 6 -->
                    <div class="row">

                        <div class="col-md-12 mb-2 d-flex align-items-end">
                            <button class="btn btn-dark btn-lg w-100 custom-login-btn" type="submit">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.simple_content_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\LE_PROJECT_LARAVEL\LE_Project\resources\views/Login_Registers/HOD_register.blade.php ENDPATH**/ ?>