

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
        <?php if($data_profil->count()): ?>
        <?php $__currentLoopData = $data_profil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form action="<?php echo e(url('/page/admin/profil')); ?>/<?php echo e($profil->id); ?>" method="POST" enctype="multipart/form-data">
            <?php echo method_field("PUT"); ?>
            <?php echo csrf_field(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <form action="<?php echo e(url('/page/admin/profil')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
        <?php endif; ?>
            <div class="col-md-8">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            <i class="fa fa-plus"></i> Tambah Profil Desa
                        </h3>
                    </div>
                    <div class="box-body">
                        <?php if($data_profil->count()): ?>
                            <?php $__currentLoopData = $data_profil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <textarea name="deskripsi" id="deskripsi" cols="80" rows="10">
                                <?php echo e($profil->deskripsi); ?>

                            </textarea>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <textarea name="deskripsi" id="deskripsi" cols="80" rows="10">
                            Silahkan Isi Profil Desa
                        </textarea>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            <i class="fa fa-plus"></i> Gambar Desa
                        </h3>
                    </div>
                    <div class="box-body">
                        <?php if($data_profil->count()): ?>
                            <?php $__currentLoopData = $data_profil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($profil->gambar): ?>
                                <img src="<?php echo e(url('/storage/'.$profil->gambar)); ?>" class="gambar-preview img-fluid d-block" style="width: 300px; margin-bottom: 5px;">
                                <?php else: ?>
                                <img class="gambar-preview img-fluid" style="width: 100px; margin-bottom: 5px">
                                <?php endif; ?>
                                <input type="file" class="form-control" name="gambar" id="gambar">
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <img class="gambar-preview" style="width: 100px; margin-bottom: 5px">
                        <input type="file" class="form-control" name="gambar" id="gambar">
                        <?php endif; ?>
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
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>

<script src="<?php echo e(url('/backend/template')); ?>/bower_components/ckeditor/ckeditor.js"></script>

<script type="text/javascript">

    $(function() {
        CKEDITOR.replace('deskripsi')
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/profil/data.blade.php ENDPATH**/ ?>