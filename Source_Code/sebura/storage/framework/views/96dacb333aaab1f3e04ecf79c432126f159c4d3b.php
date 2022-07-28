

<?php $__env->startSection('sidebar'); ?>
<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('topbar'); ?>
<?php echo $__env->make('layouts.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php if(session('success')): ?>
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success">
            Berhasil
        </div>
    </div>
</div>
<?php endif; ?>
<!-- Page Heading -->
<div class="row">
    <div class="col-md-11">
        <h1 class="h3 mb-2 text-gray-800">Data User</h1>
    </div>
</div>

<br>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables User</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0 ?>
                    <?php $__currentLoopData = $data_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e(++$no); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->roled->role_name); ?></td>
                        <td class="d-flex">
                            <form method="POST" action="<?php echo e(url('deleteuser')); ?>/<?php echo e($user->id); ?>">
                                <a href="<?php echo e(url('/admin/edituser')); ?>/<?php echo e($user->id); ?>" class="btn btn-warning btn-sm">
                                    <i style="font-size:12px" class="fa">&#xf044;</i>
                                </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\sebura\resources\views/admin/user/datauser.blade.php ENDPATH**/ ?>