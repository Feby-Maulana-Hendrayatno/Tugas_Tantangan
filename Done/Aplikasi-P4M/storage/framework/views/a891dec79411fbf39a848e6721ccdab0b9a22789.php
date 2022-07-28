<?php $__env->startSection('title', 'Data Letak Geografis'); ?>

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
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">
                        <?php if(empty($data_geografis)): ?>
                        <i class="fa fa-plus"></i> Tambah <?php echo $__env->yieldContent('title'); ?>
                        <?php else: ?>
                        <i class="fa fa-edit"></i> Edit <?php echo $__env->yieldContent('title'); ?>
                        <?php endif; ?>
                    </h3>
                    <a href="<?php echo e(url('/profil/wilayah-desa')); ?>" target="_blank" class="btn btn-social btn-info btn-flat btn-sm pull-right" title="Lihat">
                        <i class="fa fa-eye"></i> Preview
                    </a>
                </div>
                <?php if(empty($data_geografis)): ?>
                <form action="<?php echo e(url('/page/admin/info/geografis')); ?>" method="POST">
                    <?php else: ?>
                    <form action="<?php echo e(url('/page/admin/info/geografis/'.$data_geografis->id)); ?>" method="POST">
                        <?php echo method_field("PUT"); ?>
                        <?php endif; ?>
                        <?php echo csrf_field(); ?>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="deskripsi"> Deskripsi Geografis </label>
                                <?php if(empty($data_geografis)): ?>
                                <textarea name="deskripsi" id="deskripsi" cols="80" rows="10">
                                    Deskripsi Geografis
                                </textarea>
                                <?php else: ?>
                                <textarea name="deskripsi" id="deskripsi" cols="80" rows="10">
                                    <?php echo e($data_geografis->deskripsi); ?>

                                </textarea>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="box-footer">
                            <?php if(empty($data_geografis)): ?>
                            <button type="submit" class="btn btn-social btn-primary btn-flat btn-sm" title="Tambah Data">
                                <i class="fa fa-plus"></i> Tambah
                            </button>
                            <?php else: ?>
                            <button type="submit" class="btn btn-social btn-success btn-flat btn-sm" title="Simpan Data">
                                <i class="fa fa-edit"></i> Simpan
                            </button>
                            <?php endif; ?>
                            <button type="reset" class="btn btn-social btn-warning btn-flat btn-sm" title="Reset">
                                <i class="fa fa-refresh"></i> Reset
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('page_scripts'); ?>

    <script src="<?php echo e(url('/backend/template')); ?>/bower_components/ckeditor/ckeditor.js"></script>

    <script type="text/javascript">

        (function($,W,D){var JQUERY4U={};JQUERY4U.UTIL={setupFormValidation:function(){$("#formVisiMisi").validate({ignore:"",rules:{deskripsi:{required:!0},},messages:{deskripsi:{required:"Deskripsi harap di isi!"},},submitHandler:function(form){form.submit()}})}}
        $(D).ready(function($){JQUERY4U.UTIL.setupFormValidation()})})(jQuery,window,document)

        $(function() {
            CKEDITOR.replace('deskripsi')
        })

    </script>

    <script type="text/javascript">
        function editWilayah(id)
        {
            $.ajax({
                url : "<?php echo e(url('/page/admin/geografis/edit')); ?>",
                type : "GET",
                data : { id : id },
                success : function(data) {
                    $("#modal-content-edit").html(data);
                    return true;
                }
            })
        }
    </script>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/info/geografis/data_geografis.blade.php ENDPATH**/ ?>