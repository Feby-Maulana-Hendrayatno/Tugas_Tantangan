

<?php $__env->startSection('title', 'Permohonan Surat'); ?>

<?php $__env->startSection('page_content'); ?>

<section class="content-header">
    <h1>
        <?php echo $__env->yieldContent('title'); ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/page/admin">Dashboard</a></li>
        <li class="active"><?php echo $__env->yieldContent('title'); ?></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-users"></i> <?php echo $__env->yieldContent('title'); ?>
                    </h3>
                    <div class="pull-right">
                    </div>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped" style="width: 100%">
                            <thead>
                                <tr>
                                    <th class="">No.</th>
                                    <th class="">Nama</th>
                                    <th class="">NIK</th>
                                    <th class="">Jenis Surat</th>
                                    <th class="">Telepon</th>
                                    <th class="">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $pemohon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <th><?php echo e($loop->iteration); ?></th>
                                    <td><?php echo e($p->getPenduduk->nama); ?></td>
                                    <td><?php echo e($p->getPenduduk->nik); ?></td>
                                    <td><?php echo e($p->getSurat->nama); ?></td>
                                    <td><?php echo e($p->telepon); ?></td>
                                    <td>
                                        <a href="<?php echo e(url('page/admin/cetak_surat/form/'.$p->getSurat->url_surat.'/'.$p->nik)); ?>" class="btn bg-purple"><i class="fa fa-file-word-o"></i></a>
                                    </td>
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/permohonan_surat/index.blade.php ENDPATH**/ ?>