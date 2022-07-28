

<?php $__env->startSection('sidebar'); ?>
<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('topbar'); ?>
<?php echo $__env->make('layouts.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data User</h6>
    </div>
    <div class="card-body">
        <form action="<?php echo e(url('/admin/simpanuser')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="id" value="<?php echo e($edit->id); ?>">
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                <input type="text" name="email" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-sm" value="<?php echo e($edit->email); ?>">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
                <input type="text" name="password" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Role</span>
                <input type="text" name="role" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-sm" value="<?php echo e($edit->role); ?>">
            </div>
            <div class="col-md-2 ">
                <button type="submit" class="btn btn-success">
                    Simpan
                </button>
            </div>
        </form>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\DONE\sebura\resources\views/admin/user/edituser.blade.php ENDPATH**/ ?>