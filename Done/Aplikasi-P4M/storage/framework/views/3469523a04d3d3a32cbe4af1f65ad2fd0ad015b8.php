<?php $__env->startSection('title', 'Data Rukun Warga'); ?>

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

<?php if($data_dusun->count()): ?>
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-body">
                    <div id="piechart"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-bars"></i> Rukun Warga
                    </h3>
                    <button class="btn btn-social btn-primary btn-flat btn-sm pull-right" data-toggle="modal" data-target="#modal-default" title="Tambah Data">
                        <i class="fa fa-plus"></i> Tambah Data
                    </button>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-hover" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Dusun</th>
                                    <th>RW</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data_rw; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($loop->iteration); ?>.</td>
                                    <td>
                                        <?php if(empty($data->getDusun->dusun)): ?>
                                        <i>
                                            <b>NULL</b>
                                        </i>
                                        <?php else: ?>
                                        <?php echo e($data->getDusun->dusun); ?>

                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($data->rw); ?></td>
                                    <td class="text-center">
                                        <button onclick="editRw(<?php echo e($data->id); ?>)" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default-edit" title="Ubah Data">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <form action="<?php echo e(url('/page/admin/data/rw/'.$data->id)); ?>" method="POST" style="display: inline;">
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
                            Karena <b> Data Dusun </b> Masih Kosong. <a href="<?php echo e(url('/page/admin/data/dusun')); ?>">Silahkan Inputkan Data Dusun Terlebih Dahulu</a>
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
            <form action="<?php echo e(url('/page/admin/data/rw')); ?>" method="POST" id="formTambahRW">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id_dusun">Dusun</label>
                        <select name="id_dusun" id="id_dusun" class="form-control input-sm select2" style="width: 100%">
                            <option value="">- Pilih -</option>
                            <?php $__currentLoopData = $data_dusun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dusun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($dusun->id); ?>">
                                <?php echo e($dusun->dusun); ?>

                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="rw"> RW </label>
                        <input type="text" class="form-control" name="rw" id="rw" placeholder="Masukkan RW">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-social btn-danger btn-flat btn-sm pull-left">
                        <i class="fa fa-times"></i> Batal
                    </button>
                    <button type="submit" class="btn btn-social btn-primary btn-flat btn-sm">
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
                    <i class="fa fa-edit"></i> Edit Data
                </h4>
            </div>
            <form action="<?php echo e(url('/page/admin/data/rw/simpan')); ?>" method="POST" id="formEditRW">
                <?php echo method_field("PUT"); ?>
                <?php echo csrf_field(); ?>
                <div class="modal-body" id="modal-content-edit">

                </div>
                <div class="modal-footer">
                    <button type="times" class="btn btn-social btn-danger btn-flat btn-sm pull-left">
                        <i class="fa fa-refresh"></i> Batal
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
    (function($,W,D) {
        var JQUERY4U = {};
        JQUERY4U.UTIL =
        {
            setupFormValidation: function()
            {
                $("#formTambahRW").validate({
                    ignore: "",
                    rules: {
                        rw: {
                            required: true
                        }
                    },

                    messages: {
                        rw: {
                            required: "RW harap di isi!"
                        }
                    },

                    submitHandler: function(form) {
                        form.submit();
                    }
                });
                $("#formEditRW").validate({
                    ignore: "",
                    rules: {
                        rw: {
                            required: true
                        }
                    },

                    messages: {
                        rw: {
                            required: "RW harap di isi!"
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

    function editRw(id)
    {
        $.ajax({
            url : "<?php echo e(url('/page/admin/data/rw/edit')); ?>",
            type : "GET",
            data : { id : id },
            success : function(data) {
                $("#modal-content-edit").html(data);
                return true;
            }
        })
    }
</script>

<script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Month'],
        <?php foreach ($data_rw as $data): ?>
        ["<?php echo e($data->rw); ?>", <?php echo e($data->getCountPenduduk->count()); ?>],
        <?php endforeach; ?>
        ]);

        var options = {'title' : "<?php echo $__env->yieldContent('title'); ?>", 'width':550, 'height':400};

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/penduduk/rw/data_rw.blade.php ENDPATH**/ ?>