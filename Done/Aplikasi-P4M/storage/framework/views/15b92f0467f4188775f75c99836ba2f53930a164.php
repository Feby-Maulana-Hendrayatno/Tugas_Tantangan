<?php $__env->startSection('page_title', 'Dashboard'); ?>

<?php $__env->startSection('page_content'); ?>

<section class="content-header">
    <h1>
        Data Struktur Pemerintahan
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(url('/page/admin/dashboard')); ?>">
                <i class="fa fa-dashboard"></i> Home
            </a>
        </li>
        <li>
            <a href="<?php echo e(url('/page/admin/pemerintahan/struktur_pemerintahan')); ?>">
                <i class="fa fa-bars"></i> Struktur Pemerintahan
            </a>
        </li>
        <li class="active">Edit Data Struktur Pemerintahan</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-edit"></i> Edit Struktur Pemerintahan
                    </h3>
                </div>
                <form id="editStruktur" action="<?php echo e(url('/page/admin/pemerintahan/struktur_pemerintahan/'.$edit->id)); ?>" method="POST">
                    <?php echo method_field("PUT"); ?>
                    <?php echo csrf_field(); ?>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="jabatan_id"> Jabatan </label>
                            <select name="jabatan_id" id="jabatan_id" class="form-control select2" style="width: 100%">
                                <option value="" selected>- Pilih -</option>
                                <?php $__currentLoopData = $data_jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($edit->jabatan_id == $data->id): ?>
                                    <option value="<?php echo e($data->id); ?>" selected>
                                        <?php echo e($data->nama_jabatan); ?>

                                    </option>
                                    <?php else: ?>
                                    <option value="<?php echo e($data->id); ?>">
                                        <?php echo e($data->nama_jabatan); ?>

                                    </option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pegawai_id"> Pegawai </label>
                            <select name="pegawai_id" id="pegawai_id" class="form-control select2" style="width: 100%;">
                                <option value="" selected>- Pilih -</option>
                                <?php $__currentLoopData = $data_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($edit->pegawai_id == $pegawai->id): ?>
                                    <option value="<?php echo e($pegawai->id); ?>" selected>
                                        <?php echo e($pegawai->nama); ?>

                                    </option>
                                    <?php else: ?>
                                    <option value="<?php echo e($pegawai->id); ?>">
                                        <?php echo e($pegawai->nama); ?>

                                    </option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-social btn-success btn-flat btn-sm" title="Simpan Data">
                            <i class="fa fa-edit"></i> Simpan
                        </button>
                        <button type="reset" class="btn btn-social btn-warning btn-flat btn-sm" title="Reset">
                            <i class="fa fa-refresh"></i> Reset
                        </button>
                        <a href="<?php echo e(url('/page/admin/pemerintahan/struktur_pemerintahan')); ?>" class="pull-right btn btn-info btn-social btn-flat btn-sm">
                            <i class="fa fa-sign-out"></i> Kembali
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-sign-out"></i> Struktur Pemerintahan
                    </h3>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Jabatan</th>
                                    <th>Pegawai</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data_struktur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($data->getJabatan->nama_jabatan); ?></td>
                                        <td><?php echo e($data->getPegawai->nama); ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo e(url('/page/admin/struktur_pemerintahan/'.$data->id)); ?>/edit" class="btn btn-warning btn-sm" title="Ubah Data">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="<?php echo e(url('/page/admin/struktur_pemerintahan/'.$data->id)); ?>" method="POST" style="display: inline;">
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/pemerintahan/struktur_pemerintahan/edit.blade.php ENDPATH**/ ?>