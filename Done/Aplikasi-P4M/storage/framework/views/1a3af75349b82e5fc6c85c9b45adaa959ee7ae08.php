<?php $__env->startSection('title', 'Data Jabatan'); ?>

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
        <div class="col-md-4">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-plus"></i> Tambah <?php echo $__env->yieldContent('title'); ?>
                    </h3>
                </div>
                <form id="tambahJabatan" action="<?php echo e(url('/page/admin/pemerintahan/jabatan')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama_jabatan"> Nama Jabatan </label>
                            <input type="text" class="form-control" name="nama_jabatan" id="nama_jabatan" placeholder="Masukkan Nama Jabatan">
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-social btn-primary btn-flat btn-sm" title="Tambah Data">
                            <i class="fa fa-plus"></i> Tambah
                        </button>
                        <button type="reset" class="btn btn-social btn-warning btn-flat btn-sm" title="Reset">
                            <i class="fa fa-refresh"></i> Reset
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-gavel"></i> Jabatan
                    </h3>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Jabatan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data_jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jabatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($jabatan->nama_jabatan); ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo e(url('/page/admin/pemerintahan/jabatan/'.$jabatan->id)); ?>/edit" class="btn btn-warning btn-sm" title="Ubah Data">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="<?php echo e(url('/page/admin/pemerintahan/jabatan/'.$jabatan->id)); ?>" method="POST" style="display: inline;">
                                            <?php echo method_field("DELETE"); ?>
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-danger btn-sm" title="Hapus Data">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
                $("#tambahJabatan").validate({
                    ignore: "",
                    rules: {
                        nama_jabatan: {
                            required: true
                        }
                    },

                    messages: {
                        nama_jabatan: {
                            required: "Nama jabatan harap di isi!"
                        }
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/pemerintahan/jabatan/index.blade.php ENDPATH**/ ?>