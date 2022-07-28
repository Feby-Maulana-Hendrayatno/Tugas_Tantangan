<?php $__env->startSection('page_content'); ?>

<section class="content-header">
    <h1>
        Info Profil Desa
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(url('/page/admin/dashboard')); ?>">
                <i class="fa fa-dashboard"></i> Dashboard
            </a>
        </li>
        <li class="active">Data Info Alamat</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_1" data-toggle="tab">Profil Desa</a>
                    </li>
                    <li>
                        <a href="#tab_2" data-toggle="tab">Alamat</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
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
                                        <div class="box">
                                            <div class="box-header">
                                                <h3 class="box-title">
                                                    <?php if($data_profil->count()): ?>
                                                    <i class="fa fa-edit"></i> Edit Profil Desa
                                                    <?php else: ?>
                                                    <i class="fa fa-plus"></i> Tambah Profil Desa
                                                    <?php endif; ?>
                                                </h3>
                                            </div>
                                            <div class="box-body">
                                                <?php if($data_profil->count()): ?>
                                                <?php $__currentLoopData = $data_profil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="form-group">
                                                    <label for="nama_desa"> Nama Desa </label>
                                                    <input type="text" class="form-control" name="nama_desa" id="nama_desa" placeholder="Masukkan Nama Desa" value="<?php echo e($profil->nama_desa); ?>">
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="kecamatan"> Kecamatan </label>
                                                            <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Masukkan Kecamatan" value="<?php echo e($profil->kecamatan); ?>">
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
                                                <div class="form-group">
                                                    <label for="nama_desa"> Nama Desa </label>
                                                    <input type="text" class="form-control" name="nama_desa" id="nama_desa" placeholder="Masukkan Nama Desa">
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="kecamatan"> Kecamatan </label>
                                                            <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Masukkan Kecamatan">
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
                                        <div class="box">
                                            <div class="box-header">
                                                <h3 class="box-title">
                                                    Upload Gambar
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
                                                <button type="submit" class="btn btn-success btn-sm">
                                                    <i class="fa fa-edit"></i> Simpan
                                                </button>
                                                <?php else: ?>
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-plus"></i> Tambah
                                                </button>
                                                <?php endif; ?>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-refresh"></i> Batal
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_2">
                            <div class="row">
                                <?php if($data_alamat->count()): ?>
                                <?php $__currentLoopData = $data_alamat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alamat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <form action="<?php echo e(url('/page/admin/alamat/'.$alamat->id)); ?>" method="POST" id="formAlamat">
                                    <?php echo method_field("PUT"); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                    <form action="<?php echo e(url('/page/admin/alamat')); ?>" method="POST" id="formAlamat">
                                        <?php endif; ?>
                                        <?php echo csrf_field(); ?>
                                        <div class="col-md-4">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h3 class="box-title">
                                                        <?php if($data_alamat->count()): ?>
                                                        <i class="fa fa-pencil"></i> Edit Data Alamat
                                                        <?php else: ?>
                                                        <i class="fa fa-plus"></i> Tambah Data Alamat
                                                        <?php endif; ?>
                                                    </h3>
                                                </div>
                                                <div class="box-body">
                                                    <?php if($data_alamat->count()): ?>
                                                    <?php $__currentLoopData = $data_alamat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alamat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="form-group">
                                                        <label for="website"> Website </label>
                                                        <input type="text" class="form-control" name="website" id="website" placeholder="Masukkan Nama Website" value="<?php echo e($alamat->website); ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="no_telepon"> No. Telepon </label>
                                                        <input type="text" class="form-control" name="no_telepon" placeholder="0" value="<?php echo e($alamat->no_telepon); ?>">
                                                    </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php else: ?>
                                                    <div class="form-group">
                                                        <label for="website"> Website </label>
                                                        <input type="text" class="form-control" name="website" id="website" placeholder="Masukkan Nama Website">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="no_telepon"> No. Telepon </label>
                                                        <input type="text" class="form-control" name="no_telepon" placeholder="0">
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h3 class="box-title">
                                                        <i class="fa fa-map"></i> Alamat
                                                    </h3>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="alamat"> Alamat </label>
                                                        <?php if($data_alamat->count()): ?>
                                                        <?php $__currentLoopData = $data_alamat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alamat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <textarea name="alamat" id="alamat" cols="80" rows="10">
                                                            <?php echo e($alamat->alamat); ?>

                                                        </textarea>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php else: ?>
                                                        <textarea name="alamat" id="alamat" cols="80" rows="10">
                                                            Alamat
                                                        </textarea>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="box-footer">
                                                    <?php if($data_alamat->count()): ?>
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                        <i class="fa fa-edit"></i> Simpan
                                                    </button>
                                                    <?php else: ?>
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-plus"></i> Tambah
                                                    </button>
                                                    <?php endif; ?>
                                                    <button type="reset" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-refresh"></i> Batal
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Tambah Data -->
                    <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title">
                                        <i class="fa fa-plus"></i> Tambah Data
                                    </h4>
                                </div>
                                <form action="<?php echo e(url('/page/admin/wilayah_geografis/')); ?>" method="POST" id="tambahWilayah">
                                    <?php echo csrf_field(); ?>
                                    <?php $__currentLoopData = $data_geografis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $geografis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <input type="hidden" name="geografis_id" value="<?php echo e($geografis->id); ?>">
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="batas"> Batas </label>
                                            <input type="text" class="form-control" name="batas" id="batas" placeholder="Batas">
                                        </div>
                                        <div class="form-group">
                                            <label for="desa"> Desa </label>
                                            <input type="text" class="form-control" name="desa" id="desa" placeholder="Masukkan Nama Desa">
                                        </div>
                                        <div class="form-group">
                                            <label for="kecamatan"> Kecamatan </label>
                                            <input type="text" class="form-control" name="kecamatan" id="kecamatan">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">
                                            <i class="fa fa-refresh"></i> Batal
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-plus"></i> Tambah
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END -->

                    <!-- Tambah Data -->
                    <div class="modal fade" id="modal-default-edit">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title">
                                        <i class="fa fa-pencil"></i> Edit Data
                                    </h4>
                                </div>
                                <form action="<?php echo e(url('/page/admin/wilayah_geografis/simpan')); ?>" method="POST" id="editWilayah">
                                    <?php echo method_field("PUT"); ?>
                                    <?php echo csrf_field(); ?>
                                    <?php $__currentLoopData = $data_geografis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $geografis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <input type="hidden" name="geografis_id" value="<?php echo e($geografis->id); ?>">
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <div class="modal-body" id="modal-content-edit">

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">
                                            <i class="fa fa-refresh"></i> Batal
                                        </button>
                                        <button type="submit" class="btn btn-success">
                                            <i class="fa fa-edit"></i> Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END -->

                    <?php $__env->stopSection(); ?>

                    <?php $__env->startSection('page_scripts'); ?>

                    <script src="<?php echo e(url('/backend/template')); ?>/bower_components/ckeditor/ckeditor.js"></script>

                    <script type="text/javascript">

                        $(function() {
                            CKEDITOR.replace('deskripsi'),
                            CKEDITOR.replace('deskripsi_geografis'),
                            CKEDITOR.replace('visi'),
                            CKEDITOR.replace('misi'),
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/profil/index.blade.php ENDPATH**/ ?>