<?php $__env->startSection('title', 'Profil Penerima Manfaat Program'); ?>

<?php $__env->startSection('page_content'); ?>

<section class="content-header">
    <h1>
        <?php echo $__env->yieldContent('title'); ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(url('/page/admin')); ?>"><i class="fa fa-home"></i> Dashboard</a></li>
        <li><a href="<?php echo e(url('/page/admin/program_bantuan')); ?>">Daftar Program Bantuan</a></li>
        <li class="active"><?php echo $__env->yieldContent('title'); ?></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <a href="<?php echo e(url('/page/admin/program_bantuan/')); ?>" class="btn btn-social btn-info btn-flat btn-sm" title="Kembali ke Daftar Program Bantuan">
                        <i class="fa fa-arrow-left"></i> Kembali ke Daftar Program Bantuan
                    </a>
                </div>
                <div class="box-body">
                    <h5>
                        <b>Profil Penerima Manfaat Program Bantuan</b>
                    </h5>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
                                <tr>
                                    <td width="20%">Nama Penerima</td>
                                    <td width="1%">:</td>
                                    <td>
                                        <?php echo e($profil->kartu_nama); ?> - <?php echo e($profil->kartu_nik); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>:</td>
                                    <td>
                                        <?php echo e($profil->kartu_alamat); ?>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <h5>
                        <b>
                            Program Bantuan Yang Pernah Diikuti :
                        </b>
                    </h5>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th width="15%">Waktu / Tanggal</th>
                                    <th width="15%">Nama Program</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data_profil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center" width="5%"><?php echo e($loop->iteration); ?>.</td>
                                    <td>
                                        <?php echo e($data->getDataProgramBantuan->tanggal_mulai); ?> -
                                        <?php echo e($data->getDataProgramBantuan->tanggal_berakhir); ?>

                                    </td>
                                    <td>
                                        <a href="<?php echo e(url('/page/admin/program_bantuan/'.$data->getDataProgramBantuan->id.'/rincian')); ?>">
                                            <?php echo e($data->getDataProgramBantuan->nama); ?>

                                        </a>
                                    </td>
                                    <td><?php echo e($data->getDataProgramBantuan->deskripsi); ?></td>
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/program_bantuan/profil_peserta_bantuan.blade.php ENDPATH**/ ?>