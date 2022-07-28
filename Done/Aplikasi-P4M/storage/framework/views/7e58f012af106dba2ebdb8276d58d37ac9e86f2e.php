<?php $__env->startSection('title', 'Data Surat Masuk'); ?>

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
            <a href="<?php echo e(url('/page/admin')); ?>">
                <i class="fa fa-home"></i> Home
            </a>
        </li>
        <li class="active"><?php echo $__env->yieldContent('title'); ?></li>
    </ol>
</section>

<?php if($data_klasifikasi->count()): ?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <a href="<?php echo e(url('/page/admin/surat/masuk/create')); ?>" class="btn btn-social btn-flat btn-primary btn-sm" title="Tambah Surat Masuk Baru">
                        <i class="fa fa-plus"></i> Tambah Surat Masuk Baru
                    </a>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Tanggal Penerimaan</th>
                                    <th class="text-center">Nomor Surat</th>
                                    <th class="text-center">Tanggal Surat</th>
                                    <th>Pengirim</th>
                                    <th>Isi Singkat</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data_surat_masuk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($loop->iteration); ?>.</td>
                                    <td class="text-center"><?php echo e(Carbon::createFromFormat('Y-m-d', $data->tanggal_penerimaan)->isoFormat('D MMMM Y')); ?></td>
                                    <td class="text-center"><?php echo e($data->nomor_surat); ?></td>
                                    <td class="text-center"><?php echo e(Carbon::createFromFormat('Y-m-d', $data->tanggal_surat)->isoFormat('D MMMM Y')); ?></td>
                                    <td><?php echo e($data->pengirim); ?></td>
                                    <td><?php echo e($data->isi_singkat); ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo e(url('/page/admin/surat/masuk/'.$data->id)); ?>/edit" class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="<?php echo e(url('/page/admin/surat/masuk/'.$data->id)); ?>" method="POST" style="display: inline;">
                                            <?php echo method_field("DELETE"); ?>
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="oldBerkasScan" value="<?php echo e($data->berkas_scan); ?>">
                                            <button type="submit" class="btn-delete btn btn-danger btn-sm">
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
<?php else: ?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header">
                    <i class="fa fa-bullhorn"></i>
                    <h3 class="box-title">Perhatian</h3>
                </div>
                <div class="box-body">
                    <div class="callout callout-danger">
                        <h4>Tidak Bisa Menginputkan Data</h4>

                        <p>
                            Karena <b> Data Surat Masuk </b> Masih Kosong. <a href="<?php echo e(url('/page/admin/surat/klasifikasi')); ?>">Silahkan Inputkan Data Klasifikasi Surat Terlebih Dahulu</a>
                        </p>
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/surat/masuk/index.blade.php ENDPATH**/ ?>