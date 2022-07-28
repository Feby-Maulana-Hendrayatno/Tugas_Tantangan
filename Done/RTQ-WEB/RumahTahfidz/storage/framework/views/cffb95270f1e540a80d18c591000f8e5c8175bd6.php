<?php $__env->startSection("app_title", "Data Profil"); ?>

<?php $__env->startSection("app_content"); ?>

<section class="section">
    <div class="section-header">
        <h1>
            <?php echo $__env->yieldContent("app_title"); ?>
        </h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active">
                <a href="<?php echo e(url('/app/admin/home')); ?>">Home</a>
            </div>
            <div class="breadcrumb-item">
                <?php echo $__env->yieldContent("app_title"); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <i class="fa fa-plus"></i>
                        <span>Tambah Data</span>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="nama"> Nama </label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="singkatan"> Singkatan </label>
                                <input type="text" class="form-control" id="singkatan" placeholder="Masukkan Singkatan">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="no_hp"> No. HP </label>
                                <input type="number" class="form-control" id="no_hp" placeholder="0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email"> Email </label>
                                <input type="email" class="form-control" id="email" placeholder="Masukkan Email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat"> Alamat </label>
                        <textarea class="form-control" id="alamat" placeholder="Masukkan Alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="logo"> Logo </label>
                        <input type="file" class="form-control" id="logo">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="reset" class="btn btn-danger">
                        <i class="fa fa-times"></i> Batal
                    </button>
                    <button type="button" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Tambah
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(".app.layouts.template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\FILE KULIAH\SEMESTER 4\TUGAS KULIAH TAHUN AJARAN 2021 - 2022\PROYEK 3\RTQ-WEB\RumahTahfidz\resources\views/app/administrator/profil/v_index.blade.php ENDPATH**/ ?>