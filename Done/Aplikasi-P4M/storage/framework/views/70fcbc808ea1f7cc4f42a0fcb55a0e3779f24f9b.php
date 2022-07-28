<?php $__env->startSection('title', 'Edit Data Hak Akses'); ?>

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
        <li>
            <a href="<?php echo e(url('/page/admin/pengaturan/hak_akses')); ?>">
                Data Hak Akses
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
                        <i class="fa fa-edit"></i> Edit Data
                    </h3>
                </div>
                <form action="<?php echo e(url('/page/admin/pengaturan/hak_akses/'.$edit->id)); ?>" method="POST" id="editHakAkses">
                    <?php echo method_field("PUT"); ?>
                    <?php echo csrf_field(); ?>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama_hak_akses"> Hak Akses </label>
                            <input type="text" class="form-control" name="nama_hak_akses" id="nama_hak_akses" placeholder="Masukkan Hak Akses" value="<?php echo e($edit->nama_hak_akses); ?>">
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-social btn-success btn-flat btn-sm">
                            <i class="fa fa-edit"></i> Simpan
                        </button>
                        <button type="reset" class="btn btn-social btn-danger btn-flat btn-sm">
                            <i class="fa fa-times"></i> Batal
                        </button>
                        <div class="pull-right">
                            <a href="<?php echo e(url('/page/admin/pengaturan/hak_akses')); ?>" class="btn btn-social btn-info btn-flat btn-sm" title="Kembali">
                                <i class="fa fa-arrow-circle-left"></i> Kembali
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">
                        Data Hak Akses
                    </h3>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Nama Hak Akses</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data_hak_akses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hak_akses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                    <td class="text-center"><?php echo e($hak_akses->nama_hak_akses); ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo e(url('/page/admin/pengaturan/hak_akses/'.$hak_akses->id.'/edit')); ?>" class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form style="display: inline;" action="<?php echo e(url('/page/admin/pengaturan/hak_akses/'.$hak_akses->id)); ?>" method="POST">
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/pengaturan/hak_akses/edit.blade.php ENDPATH**/ ?>