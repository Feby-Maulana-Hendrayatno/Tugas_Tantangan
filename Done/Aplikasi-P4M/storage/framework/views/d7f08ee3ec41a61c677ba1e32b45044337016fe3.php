<?php $__env->startSection('title', 'Data Wilayah Geografis'); ?>

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

<?php if($data_geografis): ?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-map-marker"></i> Wilayah Geografis
                    </h3>
                    <div class="pull-right">
                        <a href="<?php echo e(url('/page/admin/profil/wilayah-desa')); ?>" target="_blank" class="btn btn-social btn-info btn-flat btn-sm pull-right" style="margin-left: 5px" title="Lihat">
                            <i class="fa fa-eye"></i> Preview
                        </a>
                        <button type="button" class="btn btn-social btn-primary btn-flat btn-sm" data-toggle="modal" data-target="#modal-default" title="Tambah Data">
                            <i class="fa fa-plus"></i> Tambah Data
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Batas</th>
                                    <th>Desa</th>
                                    <th>Kecamatan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data_wilayah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($loop->iteration); ?>.</td>
                                    <td class="text-center"><?php echo e($data->batas); ?></td>
                                    <td><?php echo e($data->desa); ?></td>
                                    <td><?php echo e($data->kecamatan); ?></td>
                                    <td class="text-center">
                                        <button onclick="editDataWilayah(<?php echo e($data->id); ?>)" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default-edit" title="Ubah Data">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <form action="<?php echo e(url('/page/admin/info/wilayah_geografis/'.$data->id)); ?>" method="POST" style="display: inline;">
                                            <?php echo method_field("DELETE"); ?>
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-danger btn-sm btn-delete" title="Hapus Data">
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
<?php else: ?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header">
                    <i class="fa fa-bullhorn"></i>
                    <h3 class="box-title">Perhatian</h3>
                </div>
                <div class="box-body">
                    <div class="callout callout-danger">
                        <h4>Tidak Bisa Menginputkan Data</h4>

                        <p>
                            Karena <b> Data Geografis </b> Masih Kosong.
                            <a href="<?php echo e(url('/page/admin/info/geografis')); ?>"> Silahkan Inputkan Data Geografis Terlebih Dahulu</a>
                        </p>
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

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
            <form action="<?php echo e(url('/page/admin/info/wilayah_geografis')); ?>" method="POST" id="formTambahWilayah">
                <?php echo csrf_field(); ?>
                <?php if(empty($data_geografis)): ?>
                <input type="hidden" name="geografis_id" value="1">
                <?php else: ?>
                <input type="hidden" name="geografis_id" value="<?php echo e($data_geografis->id); ?>">
                <?php endif; ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="batas"> Batas </label>
                        <input type="text" class="form-control input-sm" name="batas" id="batas" placeholder="Masukkan Batas">
                    </div>
                    <div class="form-group">
                        <label for="desa"> Desa </label>
                        <input type="text" class="form-control input-sm" name="desa" id="desa" placeholder="Masukkan Nama Desa">
                    </div>
                    <div class="form-group">
                        <label for="kecamatan"> Kecamatan </label>
                        <input type="text" class="form-control input-sm" name="kecamatan" id="kecamatan" placeholder="Masukkan Nama Kecamatan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-social btn-warning btn-flat btn-sm pull-left" title="Reset">
                        <i class="fa fa-refresh"></i> Reset
                    </button>
                    <button type="submit" class="btn btn-social btn-primary btn-flat btn-sm pull-right">
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
            <form action="<?php echo e(url('/page/admin/info/wilayah_geografis/simpan')); ?>" method="POST" id="formEditWilayah">
                <?php echo method_field("PUT"); ?>
                <?php echo csrf_field(); ?>
                <?php if(empty($data_geografis)): ?>
                <input type="hidden" name="geografis_id" value="1">
                <?php else: ?>
                <input type="hidden" name="geografis_id" value="<?php echo e($data_geografis->id); ?>">
                <?php endif; ?>
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
<!-- END -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>

<script type="text/javascript">
    (function($,W,D){var JQUERY4U={};JQUERY4U.UTIL={setupFormValidation:function(){$("#formTambahWilayah").validate({ignore:"",rules:{batas:{required:!0},desa:{required:!0},kecamatan:{required:!0},},messages:{batas:{required:"Batas harap di isi!"},desa:{required:"Desa harap di isi!"},kecamatan:{required:"Kecamatan harap di isi!"},},submitHandler:function(form){form.submit()}});$("#formEditWilayah").validate({ignore:"",rules:{batas:{required:!0},desa:{required:!0},kecamatan:{required:!0},},messages:{batas:{required:"Batas harap di isi!"},desa:{required:"Desa harap di isi!"},kecamatan:{required:"Kecamatan harap di isi!"},},submitHandler:function(form){form.submit()}})}}
    $(D).ready(function($){JQUERY4U.UTIL.setupFormValidation()})})(jQuery,window,document)

    function editDataWilayah(id)
    {
        $.ajax({
            url : "<?php echo e(url('/page/admin/info/wilayah_geografis/edit')); ?>",
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/info/wilayah_geografis/data_wilayah_geografis.blade.php ENDPATH**/ ?>