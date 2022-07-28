

<?php $__env->startSection('content'); ?>
<section id="register" class="bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <h4>
                <i class="fas fa-user-plus"></i> Register</h4>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('register')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                  <div class="form-group">
                    <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div><br />
                    <?php endif; ?>
                  <label for="first_name">First Name</label>
                  <input type="text" name="first_name" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="last_name">Last Name</label>
                  <input type="text" name="last_name" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="password2">Password</label>
                  <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="password">Confirm Password</label>
                  <input type="password" name="password_confirmation" class="form-control" required>
                </div>
                <input type="submit" value="Register" class="btn btn-secondary btn-block">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\DONE\laravel7\Property-Listing-Platform-Laravel\resources\views/auth/register.blade.php ENDPATH**/ ?>