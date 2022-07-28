<?php $__env->startSection('page_content'); ?>

<section class="content-header">
    <h1>
        Info Alamat
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(url('/page/admin/dashboard')); ?>">
                <i class="fa fa-dashboard"></i> Dashboard
            </a>
        </li>
        <li class="active">Data Info Alamat</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <?php if($data_alamat->count()): ?>
            <?php $__currentLoopData = $data_alamat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alamat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form action="<?php echo e(url('/page/admin/alamat/'.$alamat->id)); ?>" method="POST">
                <?php echo method_field("PUT"); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <form action="<?php echo e(url('/page/admin/alamat')); ?>" method="POST">
        <?php endif; ?>
            <?php echo csrf_field(); ?>
            <div class="col-md-4">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            <?php if($data_alamat->count()): ?>
                            <i class="fa fa-edit"></i> Edit Data Alamat
                            <?php else: ?>
                            <i class="fa fa-plus"></i> Tambah Data Alamat
                            <?php endif; ?>
                        </h3>
                    </div>
                    <div class="box-body">
                        <?php if($data_alamat->count()): ?>
                            <?php $__currentLoopData = $data_alamat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alamat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-group">
                                <label for="website"> Website </label>
                                <input type="text" class="form-control" name="website" id="website" placeholder="Masukkan Nama Website" value="<?php echo e($alamat->website); ?>">
                            </div>
                            <div class="form-group">
                                <label for="no_telepon"> No. Telepon </label>
                                <input type="text" class="form-control" name="no_telepon" id="no_telepon" placeholder="0" value="<?php echo e($alamat->no_telepon); ?>">
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <div class="form-group">
                            <label for="website"> Website </label>
                            <input type="text" class="form-control" name="website" id="website" placeholder="Masukkan Nama Website">
                        </div>
                        <div class="form-group">
                            <label for="no_telepon"> No. Telepon </label>
                            <input type="text" class="form-control" name="no_telepon" id="no_telepon" placeholder="0">
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            Info Alamat
                        </h3>
                    </div>
                    <div class="box-body">
                        <?php if($data_alamat->count()): ?>
                            <?php $__currentLoopData = $data_alamat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alamat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <textarea name="alamat" id="alamat" cols="80" rows="10">
                                <?php echo e($alamat->alamat); ?>

                            </textarea>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <textarea name="alamat" id="alamat" cols="80" rows="10">
                            Alamat ...
                        </textarea>
                        <?php endif; ?>
                    </div>
                    <div class="box-footer">
                        <?php if($data_alamat->count()): ?>
                        <button type="submit" class="btn btn-success btn-sm">
                            <i class="fa fa-edit"></i> Simpan
                        </button>
                        <?php else: ?>
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus"></i> Tambah
                        </button>
                        <?php endif; ?>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-refresh"></i> Batal
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>

<script src="<?php echo e(url('/backend/template')); ?>/bower_components/ckeditor/ckeditor.js"></script>

<script type="text/javascript">

    $(function() {
        CKEDITOR.replace('alamat')
    })

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/alamat/index.blade.php ENDPATH**/ ?>