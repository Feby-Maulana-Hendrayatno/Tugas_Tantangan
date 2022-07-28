<?php $__env->startSection('title', 'Data Cetak Layanan Surat'); ?>

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
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <a href="" class="btn btn-primary btn-flat btn-sm" title="Contoh">
                        Contoh
                    </a>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped table-hover" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Aksi</th>
                                    <th>Layanan Administrasi Surat</th>
                                    <th class="text-center">Kode Surat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data_surat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-center"><?php echo e($loop->iteration); ?>.</td>
                                        <td class="text-center">
                                            <a href="<?php echo e(url('/page/admin/cetak_surat/form/'.$data->url_surat)); ?>" class="btn btn-social bg-purple btn-flat btn-sm" title="Buat Surat">
                                                <i class="fa fa-file-word-o"></i> Buat Surat
                                            </a>
                                        </td>
                                        <td><?php echo e($data->nama); ?></td>
                                        <td class="text-center"><?php echo e($data->kode_surat); ?></td>
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/cetak_surat/data_surat.blade.php ENDPATH**/ ?>