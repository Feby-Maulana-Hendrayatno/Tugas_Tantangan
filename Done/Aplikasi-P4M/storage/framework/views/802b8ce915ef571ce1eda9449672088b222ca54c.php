

<?php $__env->startSection('page_title', 'Dashboard'); ?>
<?php $__env->startSection('page_subtitle', 'Data Struktur Pemerintahan'); ?>

<?php $__env->startSection('page_content'); ?>

<section class="content-header">
    <h1>
        <?php echo $__env->yieldContent('page_subtitle'); ?>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(url('/page/admin/dashboard')); ?>">
                <i class="fa fa-dashboard"></i> Home
            </a>
        </li>
        <li class="active"><?php echo $__env->yieldContent('page_subtitle'); ?></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-plus"></i> Tambah Struktur Pemerintahan
                    </h3>
                </div>
                <form id="tambahStruktur" action="<?php echo e(url('/page/admin/struktur_pemerintahan')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="jabatan_id"> Jabatan </label>
                            <select name="jabatan_id" id="jabatan_id" class="form-control select2" style="width: 100%">
                                <option value="" selected>- Pilih -</option>
                                <?php $__currentLoopData = $data_jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                $cek_jabatan = App\Models\Model\StrukturPemerintahan::where('jabatan_id', $data->id)->first();
                                ?>
                                <?php if(!$cek_jabatan): ?>
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
                                <?php
                                $cek_pegawai = App\Models\Model\StrukturPemerintahan::where('pegawai_id', $pegawai->id)->first();
                                ?>
                                <?php if(!$cek_pegawai): ?>
                                <option value="<?php echo e($pegawai->id); ?>">
                                    <?php echo e($pegawai->nama); ?>

                                </option>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="staf_id"> Sejajar </label>
                            <select name="staf_id" id="staf_id" class="form-control select2" style="width: 100%">
                                <option value="" selected>- Pilih -</option>
                                <?php $__currentLoopData = $data_jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($data->id); ?>">
                                    <?php echo e($data->nama_jabatan); ?>

                                </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus"></i> Tambah
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
                        <i class="fa fa-sign-out"></i> Struktur Pemerintahan
                    </h3>
                    <div class="pull-right">
                        <a href="<?php echo e(url('/page/admin/struktur_pemerintahan/show')); ?>">
                            <i class="fa fa-search"></i> Lihat Struktur Pemerintahan
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
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
                                        <a href="<?php echo e(url('/page/admin/struktur_pemerintahan/'.$data->id)); ?>/edit" class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="<?php echo e(url('/page/admin/struktur_pemerintahan/'.$data->id)); ?>" method="POST" style="display: inline;">
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/struktur_pemerintahan/index.blade.php ENDPATH**/ ?>