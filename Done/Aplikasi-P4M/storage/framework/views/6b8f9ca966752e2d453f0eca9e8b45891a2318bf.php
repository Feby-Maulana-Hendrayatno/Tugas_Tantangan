<?php $__env->startSection('title', 'Catatan Login'); ?>

<?php $__env->startSection('page_content'); ?>

<?php
    use Carbon\Carbon;
?>

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
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-book"></i> Catatan Pengguna Sistem
                    </h3>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Nama</th>
                                <th class="text-center">Terakhir Login</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data_terakhir_login; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $terakhir_login): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($loop->iteration); ?>.</td>
                                    <td><?php echo e($terakhir_login->nama); ?></td>
                                    <td class="text-center"><?php echo e(Carbon::createFromFormat('Y-m-d H:i:s', $terakhir_login->terakhir_login)->isoFormat('LLLL')); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/pengaturan/terakhir_login/index.blade.php ENDPATH**/ ?>