<?php $__env->startSection('title', 'Tambah Data Hak Akses'); ?>

<?php $__env->startSection('page_content'); ?>

<section class="content-header">
    <h1>
        <?php echo $__env->yieldContent('title'); ?>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(url('/page/admin/dashboard')); ?>">
                <i class="fa fa-home"></i> Home
            </a>
        </li>
        <li class="active"><?php echo $__env->yieldContent('title'); ?></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-plus"></i> Tambah Data
                    </h3>
                </div>
                <form action="<?php echo e(url('/page/admin/pengaturan/hak_akses')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama_hak_akses"> Nama Hak Akses </label>
                            <input type="text" class="form-control" name="nama_hak_akses" id="nama_hak_akses" placeholder="Masukkan <?php echo $__env->yieldContent('title'); ?>">
                            <label class="error hidden" for="nama_hak_akses"><?php echo $__env->yieldContent('title'); ?> harap di isi!</label>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-social btn-primary btn-flat btn-sm" id="tambah" title="Tambah Data">
                            <i class="fa fa-plus"></i> Tambah
                        </button>
                        <button type="reset" class="btn btn-social btn-danger btn-sm" id="reset" title="Batal">
                            <i class="fa fa-times"></i> Batal
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-key"></i> Hak Akses
                    </h3>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" width="100%" id="example1">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Hak Akses</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data_hak_akses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hak_akses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-center"><?php echo e($loop->iteration); ?>.</td>
                                        <td class="text-center"><?php echo e($hak_akses->nama_hak_akses); ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo e(url('/page/admin/pengaturan/hak_akses/'.$hak_akses->id.'/edit')); ?>" class="btn btn-warning btn-sm" title="Ubah Data">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="<?php echo e(url('/page/admin/pengaturan/hak_akses/'.$hak_akses->id)); ?>" method="POST" style="display: inline;">
                                                <?php echo method_field("DELETE"); ?>
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-danger btn-sm" title="Hapus Data">
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/pengaturan/hak_akses/index.blade.php ENDPATH**/ ?>