<?php $__env->startSection('page_title', 'Dashboard'); ?>

<?php $__env->startSection('page_content'); ?>

<section class="content-header">
    <h1>
        Data Pegawai
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(url('/page/admin/dashboard')); ?>">
                <i class="fa fa-dashboard"></i> Home
            </a>
        </li>
        <li class="active">Blank page</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-plus"></i> Edit Data Staf
                    </h3>
                </div>
                <form action="<?php echo e(url('/page/admin/staf/'.$edit->id)); ?>" method="POST">
                    <?php echo method_field("PUT"); ?>
                    <?php echo csrf_field(); ?>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="staf"> Staf </label>
                            <input type="text" class="form-control" name="staf" id="staf" placeholder="Staf" value="<?php echo e($edit->staf); ?>">
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success btn-sm">
                            <i class="fa fa-plus"></i> Simpan
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-refresh"></i> Batal
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-bars"></i> Staf
                    </h3>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Staf</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data_staf; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-center"><?php echo e($loop->iteration); ?>.</td>
                                        <td><?php echo e($staf->staf); ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo e(url('/page/admin/staf/'.$staf->id)); ?>/edit" class="btn btn-warning btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="<?php echo e(url('/page/admin/staf/'.$staf->id)); ?>" method="POST" style="display: inline;">
                                                <?php echo method_field("DELETE"); ?>
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/staf/edit.blade.php ENDPATH**/ ?>