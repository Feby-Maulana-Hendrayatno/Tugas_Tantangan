<?php $__env->startSection('title', 'Data Surat Keluar'); ?>

<?php $__env->startSection('page_content'); ?>

<section class="content-header">
    <h1>
        <?php echo $__env->yieldContent('title'); ?>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(url('/page/admin')); ?>">
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
                    <a href="<?php echo e(url('/page/admin/surat/keluar/create')); ?>" class="btn btn-social btn-flat btn-primary btn-sm" title="Tambah Surat Keluar Baru">
                        <i class="fa fa-plus"></i> Tambah Surat Keluar Baru
                    </a>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">No. Urut</th>
                                    <th class="text-center">Nomor Surat</th>
                                    <th class="text-center">Tanggal Surat</th>
                                    <th>Ditujukan Kepada</th>
                                    <th>Isi Singkat</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data_surat_keluar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($loop->iteration); ?>.</td>
                                    <td class="text-center"><?php echo e($data->no_urut); ?></td>
                                    <td class="text-center"><?php echo e($data->nomor_surat); ?></td>
                                    <td class="text-center"><?php echo e($data->tanggal_surat); ?></td>
                                    <td><?php echo e($data->tujuan); ?></td>
                                    <td><?php echo e($data->isi_singkat); ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo e(url('/page/admin/surat/keluar/'.$data->id)); ?>/edit" class="btn btn-warning btn-sm" title="Ubah Data">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="<?php echo e(url('/page/admin/surat/keluar/'.$data->id)); ?>" method="POST" style="display: inline;">
                                            <?php echo method_field("DELETE"); ?>
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="oldBerkasScan" value="<?php echo e($data->berkas_scan); ?>">
                                            <button type="submit" class="btn-delete btn btn-danger btn-sm" title="Hapus Data">
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/surat/keluar/index.blade.php ENDPATH**/ ?>