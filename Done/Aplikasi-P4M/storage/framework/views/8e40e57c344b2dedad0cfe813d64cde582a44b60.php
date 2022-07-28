

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
            <?php if($data_visi_misi->count()): ?>
                <?php $__currentLoopData = $data_visi_misi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visi_misi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form action="<?php echo e(url('/page/admin/visi_misi')); ?>/<?php echo e($visi_misi->id); ?>" id="formVisiMisi" method="POST">
                    <?php echo method_field("PUT"); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <form action="<?php echo e(url('/page/admin/visi_misi')); ?>" method="POST" id="formVisiMisi">
            <?php endif; ?>
                <?php echo csrf_field(); ?>
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">
                            <?php if($data_visi_misi->count()): ?>
                            <i class="fa fa-edit"></i> Edit Visi & Misi
                            <?php else: ?>
                            <i class="fa fa-plus"></i> Tambah Data Visi & Misi
                            <?php endif; ?>
                        </h3>
                    </div>
                    <div class="box-body">
                        <?php if($data_visi_misi->count()): ?>
                            <?php $__currentLoopData = $data_visi_misi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visi_misi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-group row">
                                <h3 for="visi" class="col-sm-2">Visi</h3>
                                <div class="col-sm-10">
                                    <textarea name="visi" id="visi" cols="80" rows="10">
                                        <?php echo e($visi_misi->visi); ?>

                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <h3 for="misi" class="col-sm-2 control-label">Misi</h3>
                                <div class="col-sm-10">
                                    <textarea name="misi" id="misi" cols="80" rows="10">
                                        <?php echo e($visi_misi->misi); ?>

                                    </textarea>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <div class="form-group row">
                            <h3 for="visi" class="col-sm-2">Visi</h3>
                            <div class="col-sm-10">
                                <textarea name="visi" id="visi" cols="80" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <h3 for="misi" class="col-sm-2 control-label">Misi</h3>
                            <div class="col-sm-10">
                                <textarea name="misi" id="misi" cols="80" rows="10"></textarea>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="box-footer">
                        <?php if($data_visi_misi->count()): ?>
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
            </form>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>

<script src="<?php echo e(url('/backend/template')); ?>/bower_components/ckeditor/ckeditor.js"></script>

<script type="text/javascript">

    $(function() {
        CKEDITOR.replace('visi'),
        CKEDITOR.replace('misi')
    })

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/visi_misi/index.blade.php ENDPATH**/ ?>