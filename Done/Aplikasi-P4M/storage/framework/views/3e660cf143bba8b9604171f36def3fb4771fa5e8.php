<?php $__env->startSection('title', 'Surat '.$detail_surat->nama); ?>

<?php $__env->startSection('page_content'); ?>

<section class="content-header">
    <h1>
        <?php echo $__env->yieldContent('title'); ?>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(url('/page/admin/dashboard')); ?>">
                <i class="fa fa-dashboard"></i> Dashboard
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
                    <a href="<?php echo e(url('/page/admin/cetak_surat')); ?>" class="btn btn-social btn-info btn-flat btn-sm">
                        <i class="fa fa-arrow-left"></i> Kembali ke Daftar Cetak Surat
                    </a>
                </div>
                <form id="main" name="main" method="POST" class="form-horizontal">
                    <?php echo method_field("PUT"); ?>
                    <?php echo csrf_field(); ?>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="" class="col-sm-4 col-lg-4"> NIK / Nama </label>
                            <div class="col-sm-8">
                                <select name="id_penduduk" id="id_penduduk" class="form-control input-sm select2" width="100%" onchange="formAction('main')">
                                    <option value="">-- Cari NIK / Nama Penduduk /</option>
                                    <?php $__currentLoopData = $data_penduduk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penduduk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(empty($detail)): ?>
                                    <option value="<?php echo e($penduduk->id); ?>">
                                        <?php echo e($penduduk->nama); ?>

                                    </option>
                                    <?php else: ?>
                                    <?php if($detail->id == $penduduk->id): ?>
                                    <option value="<?php echo e($penduduk->id); ?>" selected>
                                        <?php echo e($penduduk->nama); ?>

                                    </option>
                                    <?php else: ?>
                                    <option value="<?php echo e($penduduk->id); ?>">
                                        <?php echo e($penduduk->nama); ?>

                                    </option>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
                <form id="validasi" action="<?php echo e(url('/page/admin/cetak_surat/form/'.$detail_surat->url_surat)); ?>"  method="POST" class="form-horizontal" target="_blank">
                    <?php echo csrf_field(); ?>
                    <div class="box-body">
                        <?php if(empty($detail)): ?>

                        <?php else: ?>
                        <input type="hidden" name="id_penduduk" value="<?php echo e($detail->id); ?>">
                        <input type="hidden" name="id_surat_format" value="<?php echo e($detail_surat->id); ?>">
                        <div class="form-group">
                            <label for="" class="col-sm-4 col-lg-4"> Tempat / Tanggal Lahir / Umur </label>
                            <div class="col-sm-4">
                                <input type="text" name="" id="" class="form-control input-sm" value="<?php echo e($detail->tempat_lahir); ?>" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" name="" id="" class="form-control input-sm" value="<?php echo e($detail->tgl_lahir); ?>" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" name="" id="" class="form-control input-sm" value="50" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-4 col-lg-4"> Alamat </label>
                            <div class="col-sm-8">
                                <input type="text" name="" id="" class="form-control input-sm" value="<?php echo e($detail->alamat_sekarang); ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-4 col-lg-4"> Pendidikan / Warga Negara / Agama </label>
                            <div class="col-sm-4">
                                <input type="text" name="" id="" class="form-control input-sm" value="<?php echo e(empty($detail->getPendidikan->nama) ? '' : ''.$detail->getPendidikan->nama.''); ?>" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" name="" id="" class="form-control input-sm" value="<?php echo e(empty($detail->getWargaNegara->nama) ? '' : ''.$detail->getWargaNegara->nama.''); ?>" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" name="" id="" class="form-control input-sm" value="<?php echo e(empty($detail->getAgama->nama) ? '' : ''.$detail->getAgama->nama.''); ?>" readonly>
                            </div>
                        </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <label for="no_surat" class="col-sm-4 col-lg-4"> Nomor Surat </label>
                            <div class="col-sm-8">
                                <input type="text" name="no_surat" id="no_surat" class="form-control input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-4 col-lg-4"> Keperluan </label>
                            <div class="col-sm-8">
                                <textarea name="" id="" rows="3" class="form-control input-sm" placeholder="Keperluan"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keterangan" class="col-sm-4 col-lg-4"> Keterangan </label>
                            <div class="col-sm-8">
                                <textarea name="keterangan" id="keterangan" rows="3" class="form-control input-sm" placeholder="Keterangan"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-4 col-lg-4"> Berlaku Dari - Sampai </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control input-sm">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id_pegawai" class="col-sm-4 col-lg-4"> Staf Pemerintah Desa </label>
                            <div class="col-sm-8">
                                <select name="id_pegawai" id="id_pegawai" class="form-control input-sm select2" width="100%">
                                    <option value="">- Pilih -</option>
                                    <?php $__currentLoopData = $data_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($pegawai->id); ?>">
                                        <?php echo e($pegawai->nama); ?>

                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="reset" class="btn btn-social btn-danger btn-flat btn-sm">
                            <i class="fa fa-times"></i> Batal
                        </button>
                        <button type="button" onclick="tambah_elemen_cetak('cetak_rtf'); $('#validasi').submit()" class="btn btn-social bg-purple btn-flat btn-sm pull-right">
                            <i class="fa fa-file-word-o"></i> Cetak
                        </button>
                        <script type="text/javascript">
                            function tambah_elemen_cetak($nilai) {
                                $('<input>').attr({
                                    type: 'hidden',
                                    name: 'submit_cetak',
                                    value: $nilai
                                }).appendTo($('#validasi'));
                            }
                        </script>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>

<script type="text/javascript">
    function formAction(idForm, action, target = '')
    {
        if (target != '')
        {
            $('#'+idForm).attr('target', target);
        }
        $('#'+idForm).attr('action', action);
        console.log();
        $('#'+idForm).submit();
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/cetak_surat/form_cetak_surat.blade.php ENDPATH**/ ?>