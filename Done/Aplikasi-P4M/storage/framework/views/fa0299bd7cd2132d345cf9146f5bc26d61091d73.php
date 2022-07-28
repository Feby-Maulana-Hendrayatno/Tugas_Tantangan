<?php $__env->startSection('title', 'Data Pegawai Pemerintahan Desa'); ?>

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

<?php if($data_penduduk->count()): ?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-user"></i> Pegawai
                    </h3>
                    <div class="pull-right">
                        <a href="<?php echo e(url('/page/admin/pemerintahan/pegawai/create')); ?>" class="btn btn-primary btn-social btn-flat btn-sm" title="Tambah Data">
                            <i class="fa fa-plus"></i> Tambah Data
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">NIK</th>
                                    <th>Nama</th>
                                    <th class="text-center">No. HP</th>
                                    <th class="text-center">Jenis Kelamin</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($loop->iteration); ?>.</td>
                                    <?php if(empty($pegawai->id_penduduk)): ?>
                                    <td class="text-center"><?php echo e($pegawai->nik); ?></td>
                                    <td><?php echo e($pegawai->nama); ?></td>
                                    <td class="text-center"><?php echo e($pegawai->no_hp); ?></td>
                                    <td class="text-center">
                                        <?php echo e($pegawai->getKelamin->nama); ?>

                                    </td>
                                    <td class="text-center">
                                        <a href="<?php echo e(url('/page/admin/pemerintahan/pegawai/'.$pegawai->id)); ?>/luar" class="btn btn-warning btn-sm" title="Edit Data">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="<?php echo e(url('/page/admin/pemerintahan/pegawai/'.$pegawai->id)); ?>" method="POST" style="display: inline;">
                                            <?php echo method_field("DELETE"); ?>
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="oldImage" value="<?php echo e($pegawai->foto); ?>">
                                            <button type="submit" class="btn btn-danger btn-sm btn-delete" title="Hapus Data">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </form>
                                        <?php if($pegawai->status == 1): ?>
                                        <form action="" method="POST" style="display: none">
                                            <?php echo method_field("PUT"); ?>
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-navy btn-flat btn-sm">
                                                <i class="fa fa-lock"></i>
                                            </button>
                                        </form>
                                        <?php elseif($pegawai->status == 0): ?>
                                        <form action="" method="POST" style="display: none">
                                            <?php echo method_field("PUT"); ?>
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-navy btn-flat btn-sm">
                                                <i class="fa fa-lock"></i>
                                            </button>
                                        </form>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php else: ?>
                                <td class="text-center"><?php echo e($penduduk->nik); ?></td>
                                <td><?php echo e($penduduk->nama); ?></td>
                                <td class="text-center"><?php echo e($penduduk->telepon); ?></td>
                                <td class="text-center">
                                    <?php echo e($penduduk->getKelamin->nama); ?>

                                </td>
                                <td class="text-center">
                                    <a href="<?php echo e(url('/page/admin/pemerintahan/pegawai/'.$pegawai->id)); ?>/dalam" class="btn btn-warning btn-sm" title="Edit Data">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="<?php echo e(url('/page/admin/pemerintahan/pegawai/'.$pegawai->id)); ?>" method="POST" style="display: inline;">
                                        <?php echo method_field("DELETE"); ?>
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="oldImage" value="<?php echo e($pegawai->foto); ?>">
                                        <button type="submit" class="btn btn-danger btn-sm btn-delete" title="Hapus Data">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                    </form>
                                    <?php if($pegawai->status == 1): ?>
                                    <form action="" method="POST" style="display: none">
                                        <?php echo method_field("PUT"); ?>
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-navy btn-flat btn-sm">
                                            <i class="fa fa-lock"></i>
                                        </button>
                                    </form>
                                    <?php elseif($pegawai->status == 0): ?>
                                    <form action="" method="POST" style="display: none">
                                        <?php echo method_field("PUT"); ?>
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-navy btn-flat btn-sm">
                                            <i class="fa fa-lock"></i>
                                        </button>
                                    </form>
                                    <?php endif; ?>
                                </td>
                                <?php endif; ?>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
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
                            Karena <b> Data Penduduk </b> Masih Kosong.
                            <a href="<?php echo e(url('/page/admin/kependudukan/penduduk')); ?>">Silahkan Inputkan Data Penduduk Terlebih Dahulu</a>
                        </p>
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/pemerintahan/pegawai/index.blade.php ENDPATH**/ ?>