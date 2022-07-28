<?php $__env->startSection('title', "Peta Lokasi Kantor"); ?>

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
    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">
                <i class="fa fa-minus"></i> Form Maps
            </h3>
            <a href="<?php echo e(url('/peta')); ?>" target="_blank" class="btn btn-social btn-info btn-flat btn-sm pull-right" style="margin-left: 5px" title="Lihat">
                <i class="fa fa-eye"></i> Preview
            </a>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <form action="<?php echo e(url('/page/admin/peta/kantor')); ?>" method="POST" id="formPeta">
                        <?php if($kantor): ?>
                        <?php echo method_field("put"); ?>
                        <input type="hidden" name="id" id="id" value="<?php echo e($kantor->id); ?>">
                        <?php endif; ?>
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="url">Masukan Url</label>
                            <?php if(empty($kantor)): ?>
                            <textarea name="url" id="url" rows="8" class="form-control" placeholder="Silahkan Masukkan URL"></textarea>
                            <?php else: ?>
                            <textarea name="url" id="url" rows="8" class="form-control" placeholder="Silahkan Masukkan URL"><?php echo $kantor->lokasi_kantor; ?></textarea>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php if($kantor_desa): ?>
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
                <div class="col-md-6">
                    <h4><b>Cara memasukan data</b></h4>
                    <p>Silahkan kunjungi link berikut <a href="https://www.google.com/maps/">Google Maps</a></p>
                    <p class="text-danger"><b>*Masukan iframe dari google maps seperti berikut :</b></p>
                    <img src="/frontend/img/step-maps.png" width="100%" height="">
                </div>
            </div>
        </div>
    </div>
    <div class="box box-info">
        <div class="box-header">
            <h3 class="title">
                <i class="fa fa-minus"></i> Hasil
            </h3>
        </div>
        <div class="box-body">
            <?php if(empty($kantor) || $kantor->lokasi_kantor == NULL): ?>
            Harap isi url tersebut.
            <?php else: ?>
            <?php echo $kantor->lokasi_kantor; ?>

            <?php endif; ?>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('page_scripts'); ?>
<script>
    (function($,W,D) {
        var JQUERY4U = {};
        JQUERY4U.UTIL =
        {
            setupFormValidation: function()
            {
                $("#formPeta").validate({
                    ignore: "",
                    rules: {
                        url: {
                            required: true
                        },
                    },

                    messages: {
                        url: {
                            required: "URL harap di isi!"
                        },
                    },

                    submitHandler: function(form) {
                        form.submit();
                    }
                });
            }
        }

        $(D).ready(function($) {
            JQUERY4U.UTIL.setupFormValidation();
        });

    })(jQuery, window, document);
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/peta/kantor.blade.php ENDPATH**/ ?>