<?php $__env->startSection('title', 'Data Profil Desa'); ?>

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

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <?php if($data_profil->count()): ?>
                <?php $__currentLoopData = $data_profil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form action="<?php echo e(url('/page/admin/info/profil/'.$profil->id)); ?>" method="POST" enctype="multipart/form-data" id="formEditProfil">
                    <?php echo method_field("PUT"); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <form action="<?php echo e(url('/page/admin/info/profil')); ?>" method="POST" enctype="multipart/form-data" id="formTambahProfil">
                        <?php endif; ?>
                        <?php echo csrf_field(); ?>
                        <div class="col-md-8">
                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">
                                        <?php if($data_profil->count()): ?>
                                        <i class="fa fa-edit"></i> Edit <?php echo $__env->yieldContent('title'); ?>
                                        <?php else: ?>
                                        <i class="fa fa-plus"></i> Tambah <?php echo $__env->yieldContent('title'); ?>
                                        <?php endif; ?>
                                    </h3>
                                </div>
                                <div class="box-body">
                                    <?php if($data_profil->count()): ?>
                                    <?php $__currentLoopData = $data_profil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nama_desa"> Nama Desa </label>
                                                <input type="text" class="form-control" name="nama_desa" id="nama_desa" placeholder="Masukkan Nama Desa" value="<?php echo e($profil->nama_desa); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kecamatan"> Kecamatan </label>
                                                <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Masukkan Kecamatan" value="<?php echo e($profil->kecamatan); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kabupaten"> Kabupaten </label>
                                                <input type="text" class="form-control" name="kabupaten" id="kabupaten" placeholder="Masukkan Kabupaten" value="<?php echo e($profil->kabupaten); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="provinsi"> Provinsi </label>
                                                <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Masukkan Data Provinsi" value="<?php echo e($profil->provinsi); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="negara"> Negara </label>
                                                <input type="text" class="form-control" name="negara" id="negara" placeholder="Masukkan Negara" value="<?php echo e($profil->negara); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kode_pos"> Kode Pos </label>
                                                <input type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="Masukkan Kode Pos" value="<?php echo e($profil->kode_pos); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi"> Deskripsi </label>
                                        <textarea name="deskripsi" id="deskripsi" cols="80" rows="10">
                                            <?php echo e($profil->deskripsi); ?>

                                        </textarea>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nama_desa"> Nama Desa </label>
                                                <input type="text" class="form-control" name="nama_desa" id="nama_desa" placeholder="Masukkan Nama Desa">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kecamatan"> Kecamatan </label>
                                                <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Masukkan Kecamatan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kabupaten"> Kabupaten </label>
                                                <input type="text" class="form-control" name="kabupaten" id="kabupaten" placeholder="Masukkan Kabupaten">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="provinsi"> Provinsi </label>
                                                <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Masukkan Data Provinsi">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="negara"> Negara </label>
                                                <input type="text" class="form-control" name="negara" id="negara" placeholder="Masukkan Negara">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kode_pos"> Kode Pos </label>
                                                <input type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="Masukkan Kode Pos">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi"> Deskripsi </label>
                                        <textarea name="deskripsi" id="deskripsi" cols="80" rows="10">
                                            Deskripsi Desa
                                        </textarea>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">
                                        <i class="fa fa-upload"></i> Upload Gambar
                                    </h3>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="gambar"> Gambar </label>
                                        <?php if($data_profil->count()): ?>
                                        <?php $__currentLoopData = $data_profil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <img src="<?php echo e(url('/storage/'.$profil->gambar)); ?>" class="gambar-preview" style="width: 300px; margin-bottom: 5px;">
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                        <br>
                                        <center>
                                            <img src="<?php echo e(url('/gambar/upload.png')); ?>" class="gambar-preview" style="width: 200px; margin-bottom: 20px;">
                                        </center>
                                        <?php endif; ?>
                                        <input onchange="previewImage()" type="file" class="form-control" name="gambar" id="gambar">
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <?php if($data_profil->count()): ?>
                                    <button type="submit" class="btn btn-social btn-success btn-flat btn-sm" title="Simpan Data">
                                        <i class="fa fa-edit"></i> Simpan
                                    </button>
                                    <?php else: ?>
                                    <button type="submit" class="btn btn-social btn-primary btn-flat btn-sm" title="Tambah Data">
                                        <i class="fa fa-plus"></i> Tambah
                                    </button>
                                    <?php endif; ?>
                                    <button type="reset" class="btn btn-social btn-warning btn-flat btn-sm" title="Reset">
                                        <i class="fa fa-refresh"></i> Reset
                                    </button>
                                </div>
                            </div>
                        </form>
                    </section>

                    <?php $__env->stopSection(); ?>

                    <?php $__env->startSection('page_scripts'); ?>

                    <script src="<?php echo e(url('/backend/template')); ?>/bower_components/ckeditor/ckeditor.js"></script>

                    <script type="text/javascript">

                        (function($,W,D){var JQUERY4U={};JQUERY4U.UTIL={setupFormValidation:function(){$("#formTambahProfil").validate({ignore:"",rules:{nama_desa:{required:!0},kecamatan:{required:!0},kabupaten:{required:!0},provinsi:{required:!0},negara:{required:!0},kode_pos:{required:!0},deskripsi:{required:!0},gambar:{required:!0,accept:'image/*'},},messages:{nama_desa:{required:"Nama desa harap diisi!"},kecamatan:{required:"Kecamatan harap diisi!"},kabupaten:{required:"Kabupaten harap diisi!"},provinsi:{required:"Provinsi harap diisi!"},negara:{required:"Negara harap diisi!"},kode_pos:{required:"Kode pos harap diisi!"},deskripsi:{required:"Deskripsi harap diisi!"},gambar:{required:"Gambar harap diisi!",accept:'Masukan format gambar'},},submitHandler:function(form){form.submit()}})
                        $("#formEditProfil").validate({ignore:"",rules:{nama_desa:{required:!0},kecamatan:{required:!0},kabupaten:{required:!0},provinsi:{required:!0},negara:{required:!0},kode_pos:{required:!0},deskripsi:{required:!0},gambar:{accept:'image/*'},},messages:{nama_desa:{required:"Nama desa harap diisi!"},kecamatan:{required:"Kecamatan harap diisi!"},kabupaten:{required:"Kabupaten harap diisi!"},provinsi:{required:"Provinsi harap diisi!"},negara:{required:"Negara harap diisi!"},kode_pos:{required:"Kode pos harap diisi!"},deskripsi:{required:"Deskripsi harap diisi!"},gambar:{accept:'Masukan format gambar'},},submitHandler:function(form){form.submit()}})}}
                        $(D).ready(function($){JQUERY4U.UTIL.setupFormValidation()})})(jQuery,window,document)

                        $(function() {
                            CKEDITOR.replace('deskripsi'),
                            CKEDITOR.replace('alamat')
                        })

                    </script>

                    <script type="text/javascript">

                        function previewImage()
                        {
                            const gambar = document.querySelector("#gambar");
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/info/profil/data_profil.blade.php ENDPATH**/ ?>