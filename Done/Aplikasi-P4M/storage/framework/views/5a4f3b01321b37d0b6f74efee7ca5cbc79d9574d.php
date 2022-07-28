<?php $__env->startSection('page_title', 'Dashboard'); ?>

<?php $__env->startSection('page_content'); ?>

<link rel="stylesheet" href="<?php echo e(url('backend/template/plugins/timepicker/bootstrap-timepicker.min.css')); ?>">

<section class="content-header">
    <h1>
        Form Edit Data Pegawai
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(url('/page/admin/dashboard')); ?>">
                <i class="fa fa-dashboard"></i> Home
            </a>
        </li>
        <li>
            <a href="<?php echo e(url('/page/admin/pemerintahan/pegawai')); ?>">
                <i class="fa fa-user"></i> Data Pegawai
            </a>
        </li>
        <li class="active">Form Edit Data Pegawai</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <a href="<?php echo e(url('/page/admin/pemerintahan/pegawai')); ?>" class="btn btn-social btn-flat btn-info btn-sm" title="Kembali">
                        <i class="fa fa-arrow-circle-o-left"></i> Kembali
                    </a>
                </div>
                <div class="box-body">
                    <!--
                        <div class="row">
                            <div class="col-sm-12 form-horizontal">
                                <div class="form-group">
                                    <label class="col-xs-12 col-sm-4 col-lg-2 control-label" for="pengurus">Data Staf</label>
                                    <div class="btn-group col-xs-12 col-sm-8" data-toggle="buttons">
                                        <label for="pengurus_1" class="btn btn-info btn-flat btn-sm col-xs-6 col-sm-5 col-lg-3 form-check-label active">
                                            <input id="pengurus_1" type="radio" name="pengurus" class="form-check-input" type="radio" value="1" checked autocomplete="off" onchange="pengurus_asal(this.value);"> Dari Database Penduduk
                                        </label>
                                        <label for="pengurus_2" class="btn btn-info btn-flat btn-sm col-xs-6 col-sm-5 col-lg-3 form-check-label ">
                                            <input id="pengurus_2" type="radio" name="pengurus" class="form-check-input" type="radio" value="2"  autocomplete="off" onchange="pengurus_asal(this.value);"> Tidak Terdata
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    -->
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <form action="<?php echo e(url('/page/admin/pemerintahan/pegawai/'.$edit->id)); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <?php echo method_field("PUT"); ?>
            <?php echo csrf_field(); ?>
            <input type="hidden" name="oldImage" value="<?php echo e($edit->foto); ?>">
            <div class="col-md-4">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">
                            <i class="fa fa-upload"></i> Upload Gambar
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="foto"> Foto </label>
                            <?php if($edit->foto): ?>
                            <br>
                            <img class="gambar-preview img-fluid" src="<?php echo e(url('/storage/'.$edit->foto)); ?>" width="300" style="margin-bottom: 5px;">
                            <?php else: ?>
                            <img class="gambar-preview img-fluid" width="300" style="margin-bottom: 5px;">
                            <?php endif; ?>
                            <input onchange="previewImage()" type="file" class="form-control input-sm" name="foto" id="foto">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">
                            <i class="fa fa-pencil"></i> Edit Form Data Pegawai
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama" class="col-sm-4 control-label"> Nama </label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="nama" id="nama" placeholder="Nama" value="<?php echo e($edit->nama); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nik" class="col-sm-4 control-label"> Nomor Induk Kependudukan </label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="nik" id="nik" placeholder="Nomor Induk Kependudukan" value="<?php echo e($edit->nik); ?>">
                            </div>
                        </div>
                        <!--
                            <div class="form-group">
                                <label for="nip" class="col-sm-4 control-label"> NIPD </label>
                            </div>
                        -->
                        <div class="form-group">
                            <label for="nip" class="col-sm-4 control-label"> NIP </label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="nip" id="nip" placeholder="NIP" value="<?php echo e($edit->nip); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir" class="col-sm-4 control-label"> Tempat Lahir </label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo e($edit->tempat_lahir); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-4 control-label"> Tanggal Lahir </label>
                            <div class="col-sm-7">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="datepicker" name="tgl_lahir" value="<?php echo e(old('tgl_lahir')); ?> <?php echo e($edit->tgl_lahir); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sex" class="col-sm-4 control-label"> Jenis Kelamin </label>
                            <div class="col-sm-7">
                                <select name="sex" id="sex" class="form-control input-sm">
                                    <option value="">- Pilih -</option>
                                    <?php if($edit->sex == "L"): ?>
                                    <option value="L" selected>Laki - Laki</option>
                                    <option value="P">Perempuan</option>
                                    <?php elseif($edit->sex == "P"): ?>
                                    <option value="L">Laki - Laki</option>
                                    <option value="P" selected>Perempuan</option>
                                    <?php else: ?>
                                    <option value="L">Laki - Laki</option>
                                    <option value="P">Perempuan</option>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan" class="col-sm-4 control-label"> Pendidikan </label>
                            <div class="col-sm-7">
                                <select name="pendidikan" class="form-control input-sm select2" id="pendidikan">
                                    <option value="">- Pilih Pendidikan (Dalam KK) -</option>
                                    <?php $__currentLoopData = $data_pendidikan_kk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($edit->pendidikan == $data->id): ?>
                                        <option value="<?php echo e($data->id); ?>" selected>
                                            <?php echo e($data->nama); ?>

                                        </option>
                                        <?php else: ?>
                                        <option value="<?php echo e($data->id); ?>">
                                            <?php echo e($data->nama); ?>

                                        </option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="agama" class="col-sm-4 control-label"> Agama </label>
                            <div class="col-sm-7">
                                <select name="agama" class="form-control input-sm select2" id="agama">
                                    <option value="">- Pilih -</option>
                                    <?php $__currentLoopData = $data_agama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agama): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($agama->nama); ?>">
                                            <?php echo e($agama->nama); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pangkat" class="col-sm-4 control-label"> Pangkat / Golongan </label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="pangkat" placeholder="Pangkat / Golongan" value="<?php echo e($edit->pangkat); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_sk" class="col-sm-4 control-label"> Nomor SK Pengangkatan </label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="no_sk" id="no_sk" placeholder="Nomor SK Pengangkatan" value="<?php echo e($edit->no_sk); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_sk" class="col-sm-4 control-label"> Tanggal SK Pengangkatan </label>
                            <div class="col-sm-7">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="datepicker2" name="tgl_sk" value="<?php echo e(old('tgl_sk')); ?> <?php echo e($edit->tgl_sk); ?> ">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_henti" class="col-sm-4 control-label"> Nomor SK Pemberhentian </label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="no_henti" id="no_henti" placeholder="Nomor SK Pemberhentian" value="<?php echo e($edit->no_henti); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_henti" class="col-sm-4 control-label"> Tanggal SK Pemberhentian </label>
                            <div class="col-sm-7">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="datepicker3" name="tgl_henti" value="<?php echo e(old('tgl_henti')); ?> <?php echo e($edit->tgl_henti); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="masa_jabatan" class="col-sm-4 control-label"> Masa Jabatan </label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="masa_jabatan" id="masa_jabatan" placeholder="Contoh : 6 Tahun Periode Pertama (2015 s/d 2021)" value="<?php echo e($edit->masa_jabatan); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-4 control-label"> No. HP </label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="no_hp" id="no_hp" placeholder="0" value="<?php echo e($edit->no_hp); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-4 control-label"> Alamat </label>
                            <div class="col-sm-7">
                                <textarea name="alamat" id="alamat" class="form-control input-sm" cols="30" rows="5" placeholder="Alamat"><?php echo e($edit->alamat); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="reset" class="btn btn-social btn-flat btn-danger btn-sm" title="Batal">
                            <i class="fa fa-times"></i> Batal
                        </button>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-social btn-flat btn-success btn-sm" title="Simpan Data">
                                <i class="fa fa-plus"></i> Simpan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>

<script src="<?php echo e(url('backend/template/bower_components/moment/min/moment.min.js')); ?>"></script>
<script src="<?php echo e(url('backend/template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')); ?>"></script>
<script src="<?php echo e(url('backend/template/plugins/timepicker/bootstrap-datetimepicker.min.js')); ?>"></script>

<script type="text/javascript">
    $(function() {
        $('#datepicker').datetimepicker({
            locale:'id',
            format: 'YYYY-MM-DD'
        });

        $('#datepicker2').datetimepicker({
            locale:'id',
            format: 'YYYY-MM-DD'
        });

        $('#datepicker3').datetimepicker({
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
        const gambar = document.querySelector("#foto");
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/pemerintahan/pegawai/form_edit_data_pegawai.blade.php ENDPATH**/ ?>