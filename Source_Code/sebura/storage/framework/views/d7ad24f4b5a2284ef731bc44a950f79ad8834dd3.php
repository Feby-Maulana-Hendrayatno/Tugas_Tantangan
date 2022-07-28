

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container mt-5">
    <div class="row content">
        <div class="col-md-6 mb-3">
            <img src="/img/img.svg" alt="" srcset="" width="500">
        </div>
        <div class="col-md-6">
            <h3 class="signin-text mb-3"> Sign In</h3>
            <form action="/login" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button class="btn btn-primary">Login</button>
                <?php echo csrf_field(); ?>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\sebura\resources\views/login/login.blade.php ENDPATH**/ ?>