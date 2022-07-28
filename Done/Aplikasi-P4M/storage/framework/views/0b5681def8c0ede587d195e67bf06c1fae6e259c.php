<?php $__env->startSection('title', 'Data Visi & Misi'); ?>

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
            <?php if($data_visi_misi->count()): ?>
            <?php $__currentLoopData = $data_visi_misi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visi_misi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form action="<?php echo e(url('/page/admin/info/visi-misi')); ?>/<?php echo e($visi_misi->id); ?>" id="formVisiMisi" method="POST">
                <?php echo method_field("PUT"); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <form action="<?php echo e(url('/page/admin/info/visi-misi')); ?>" method="POST" id="formVisiMisi">
                    <?php endif; ?>
                    <?php echo csrf_field(); ?>
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title">
                                <?php if($data_visi_misi->count()): ?>
                                <i class="fa fa-edit"></i> Edit <?php echo $__env->yieldContent('title'); ?>
                                <?php else: ?>
                                <i class="fa fa-plus"></i> Tambah <?php echo $__env->yieldContent('title'); ?>
                                <?php endif; ?>
                            </h3>
                            <a href="<?php echo e(url('/pemerintahan/visi-misi')); ?>" target="_blank" class="btn btn-social btn-info btn-flat btn-sm pull-right" title="Lihat">
                                <i class="fa fa-eye"></i> Preview
                            </a>
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
                                    <textarea name="visi" id="visi" cols="80" rows="10">Masukkan Visi Desa</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <h3 for="misi" class="col-sm-2 control-label">Misi</h3>
                                <div class="col-sm-10">
                                    <textarea name="misi" id="misi" cols="80" rows="10">Masukkan Misi Desa</textarea>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="box-footer">
                            <?php if($data_visi_misi->count()): ?>
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
            </div>
        </div>
    </section>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('page_scripts'); ?>

    <script src="<?php echo e(url('/backend/template')); ?>/bower_components/ckeditor/ckeditor.js"></script>

    <script type="text/javascript">

        (function($,W,D){var JQUERY4U={};JQUERY4U.UTIL={setupFormValidation:function(){$("#formVisiMisi").validate({ignore:"",rules:{visi:{required:!0},misi:{required:!0},},messages:{visi:{required:"Visi harap di isi!"},misi:{required:"Visi harap di isi!"},},submitHandler:function(form){form.submit()}})}}
        $(D).ready(function($){JQUERY4U.UTIL.setupFormValidation()})})(jQuery,window,document)

        $(function() {
            CKEDITOR.replace('visi'),
            CKEDITOR.replace('misi')
        })

    </script>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/info/visi_misi/index.blade.php ENDPATH**/ ?>