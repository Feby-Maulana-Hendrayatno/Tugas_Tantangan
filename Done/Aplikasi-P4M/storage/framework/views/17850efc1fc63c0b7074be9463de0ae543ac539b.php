<?php $__env->startSection('title', 'Surat Keluar'); ?>

<?php $__env->startSection('page_content'); ?>

<link rel="stylesheet" href="<?php echo e(url('backend/template/plugins/timepicker/bootstrap-timepicker.min.css')); ?>">

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
            <div class="box box-info">
                <div class="box-header">
                    <a href="<?php echo e(url('/page/admin/surat/keluar')); ?>" class="btn btn-social btn-flat btn-success btn-sm">
                        <i class="fa fa-arrow-left"></i> Kembali ke Daftar Surat Keluar
                    </a>
                </div>
                <form action="<?php echo e(url('/page/admin/surat/keluar/'.$edit->id)); ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    <?php echo method_field("PUT"); ?>
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="oldBerkasScan" value="<?php echo e($edit->berkas_scan); ?>">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nomor_urut" class="col-sm-3"> Nomor Urut </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nomor_urut" id="nomor_urut" placeholder="Masukkan Nomor Urut" value="<?php echo e($edit->nomor_urut); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="berkas_scan" class="col-sm-3">Berkas Scan Surat Keluar</label>
                            <div class="col-sm-9">
                                <?php if($edit->berkas_scan): ?>
                                <img src="<?php echo e(url('/storage/'.$edit->berkas_scan)); ?>" class="gambar-preview img-fluid" width="300" style="margin-bottom: 5px;">
                                <?php else: ?>
                                <img class="gambar-preview img-fluid" width="300" style="margin-bottom: 5px;">
                                <?php endif; ?>
                                <input onchange="previewImage()" type="file" class="form-control input-sm" name="berkas_scan" id="berkas_scan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kode_surat" class="col-sm-3 "> Kode / Klasifikasi Surat </label>
                            <div class="col-sm-9">
                                <select name="kode_surat" id="kode_surat" class="form-control input-sm select2">
                                    <option value="">- Pilih -</option>
                                    <?php $__currentLoopData = $data_klasifikasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $surat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($surat->id); ?>" <?php echo e($edit->kode_surat == $surat->id ? 'selected' : ''); ?>>
                                        <?php echo e($surat->kode); ?> - <?php echo e($surat->nama); ?>

                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nomor_surat" class="col-sm-3"> Nomor Surat </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control input-sm" name="nomor_surat" id="nomor_surat" value="<?php echo e($edit->nomor_surat); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_surat" class="col-sm-3"> Tanggal Surat </label>
                            <div class="col-sm-9">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right datepicker" name="tanggal_surat" value="<?php echo e($edit->tanggal_surat); ?> <?php echo e(old('tanggal_surat')); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tujuan" class="col-sm-3"> Tujuan </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control input-sm" name="tujuan" id="tujuan" placeholder="Masukkan Tujuan" value="<?php echo e($edit->tujuan); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="isi_singkat" class="col-sm-3"> Isi Singkat Perihal </label>
                            <div class="col-sm-9">
                                <textarea name="isi_singkat" id="isi_singkat" class="form-control input-sm" cols="30" rows="5" placeholder="Masukkan Isian Singkat"><?php echo e($edit->isi_singkat); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="reset" class="btn btn-social btn-flat btn-danger btn-sm">
                            <i class="fa fa-times"></i> Batal
                        </button>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-social btn-flat btn-success btn-sm">
                                <i class="fa fa-edit"></i> Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>

<script src="<?php echo e(url('backend/template/bower_components/moment/min/moment.min.js')); ?>"></script>
<script src="<?php echo e(url('backend/template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')); ?>"></script>
<script src="<?php echo e(url('backend/template/plugins/timepicker/bootstrap-datetimepicker.min.js')); ?>"></script>

<script>
    $(function() {
        $('.datepicker').datetimepicker({
            locale:'id',
            format: 'YYYY-MM-DD'
        });

        $('.timepicker').datetimepicker({
            format: 'HH:mm',
            locale:'id'
        });
    })
</script>

<script type="text/javascript">

    function previewImage()
    {
        const gambar = document.querySelector("#berkas_scan");
        const gambarPreview = document.querySelector(".gambar-preview");

        gambarPreview.style.display = "block";

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
            gambarPreview.src = oFREvent.target.result;
        }
    }

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/surat/keluar/form_edit.blade.php ENDPATH**/ ?>