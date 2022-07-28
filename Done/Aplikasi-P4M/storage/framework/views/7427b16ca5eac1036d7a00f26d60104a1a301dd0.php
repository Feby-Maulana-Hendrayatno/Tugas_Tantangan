<?php $__env->startSection('title', 'Data Sarana Agama'); ?>

<?php $__env->startSection('page_content'); ?>

<section class="content-header">
    <h1>
        <?php echo $__env->yieldContent('title'); ?>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(url('/page/admin')); ?>">
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
                    <a href="<?php echo e(url('/sarpras/agama')); ?>" target="_blank" class="btn btn-social btn-info btn-flat btn-sm" style="margin-left: 5px" title="Lihat">
                        <i class="fa fa-eye"></i> Preview
                    </a>
                    <div class="pull-right">
                        <button type="button" class="btn btn-social btn-primary btn-flat btn-sm" data-toggle="modal" data-target="#tambahSaranaAgama" title="Tambah Data">
                            <i class="fa fa-plus"></i> Tambah Data
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped" style="width: 100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Jenis</th>
                                    <th class="text-center">Jumlah</th>
                                    <th>Lokasi</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $agama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($p->jenis); ?></td>
                                    <td class="text-center"><?php echo e($p->jumlah); ?></td>
                                    <td><?php echo e($p->lokasi); ?></td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-warning" onclick="editSaranaAgama(<?php echo e($p->id); ?>)" data-toggle="modal" data-target="#editSaranaAgama" title="Ubah Data">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <form action="<?php echo e(url('page/admin/sarana/keagamaan/'.$p->id)); ?>" method="POST" style="display: inline">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button class="btn btn-sm btn-danger" title="Hapus Data">
                                                <i class="fa fa-trash"></i>
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

<div class="modal fade" id="tambahSaranaAgama">
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
            <form action="<?php echo e(url('page/admin/sarana/keagamaan')); ?>" method="POST" id="formTambahSarana">
                <div class="modal-body">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="jenis"> Jenis </label>
                        <input type="text" class="form-control" name="jenis" id="jenis" placeholder="Masukkan Jenis">
                    </div>
                    <div class="form-group">
                        <label for="jumlah"> Jumlah </label>
                        <input type="text" class="form-control" name="jumlah" id="jumlah" min="1" placeholder="Masukkan Jumlah">
                    </div>
                    <div class="form-group">
                        <label for="lokasi"> Lokasi </label>
                        <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Masukkan Lokasi">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-social btn-danger btn-flat btn-sm pull-left" title="Batal">
                        <i class="fa fa-times"></i> Batal
                    </button>
                    <button type="submit" class="btn btn-social btn-primary btn-flat btn-sm" title="Tambah Data">
                        <i class="fa fa-plus"></i> Tambah
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editSaranaAgama">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">
                    <i class="fa fa-edit"></i> Edit Data
                </h4>
            </div>
            <form action="<?php echo e(url('page/admin/sarana/keagamaan')); ?>" method="POST" id="formEditSarana">
                <?php echo csrf_field(); ?>
                <?php echo method_field('patch'); ?>
                <div class="modal-body" id="modal-content-edit">
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-social btn-danger btn-flat btn-sm pull-left">
                        <i class="fa fa-times"></i> Batal
                    </button>
                    <button type="submit" class="btn btn-social btn-success btn-flat btn-sm">
                        <i class="fa fa-edit"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>
<script>
    function editSaranaAgama(id)
    {
        $.ajax({
            url : "/page/admin/sarana/keagamaan/edit",
            type : "GET",
            data : { id : id },
            success : function(data) {
                $("#modal-content-edit").html(data);
                return true;
            }
        })
    }

    (function($,W,D) {
        var JQUERY4U = {};
        JQUERY4U.UTIL =
        {
            setupFormValidation: function()
            {
                $("#formTambahSarana").validate({
                    ignore: "",
                    rules: {
                        jenis: {
                            required: true
                        },
                        jumlah: {
                            required: true
                        },
                        lokasi: {
                            required: true
                        },
                    },

                    messages: {
                        jenis: {
                            required: "Jenis harap di isi!"
                        },
                        jumlah: {
                            required: "Jumlah harap di isi!"
                        },
                        lokasi: {
                            required: "Lokasi harap di isi!"
                        },
                    },

                    submitHandler: function(form) {
                        form.submit();
                    }
                });
                $("#formEditSarana").validate({
                    ignore: "",
                    rules: {
                        jenis: {
                            required: true
                        },
                        jumlah: {
                            required: true
                        },
                        lokasi: {
                            required: true
                        },
                    },

                    messages: {
                        jenis: {
                            required: "Jenis harap di isi!"
                        },
                        jumlah: {
                            required: "Jumlah harap di isi!"
                        },
                        lokasi: {
                            required: "Lokasi harap di isi!"
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/sarana/agama/index.blade.php ENDPATH**/ ?>