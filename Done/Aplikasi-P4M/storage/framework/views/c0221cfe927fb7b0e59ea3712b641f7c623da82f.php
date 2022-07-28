<?php $__env->startSection('title', 'Data Sakit Menahun'); ?>

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
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-pencil"></i> Grafik Data Sakit Menahun
                    </h3>
                </div>
                <div class="box-body">
                    <div id="piechart"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-bars"></i> Sakit Menahun
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
                                    <th>Sakit Menahun</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data_sakit_menahun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($loop->iteration); ?>.</td>
                                    <td><?php echo e($data->nama); ?></td>
                                    <td class="text-center">
                                        <button onclick="editDataSakitMenahun(<?php echo e($data->id); ?>)" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default-edit" title="Ubah Datas">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <form action="<?php echo e(url('/page/admin/data/sakit-menahun/'.$data->id)); ?>" method="POST" style="display: inline;">
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
            <form action="<?php echo e(url('/page/admin/data/sakit-menahun')); ?>" method="POST" id="formTambahGoldar">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama"> Sakit Menahun </label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Data Sakit Menahun">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-social btn-warning btn-flat btn-sm pull-left" title="Reset">
                        <i class="fa fa-refresh"></i> Reset
                    </button>
                    <button type="submit" class="btn btn-social btn-success btn-flat btn-sm pull-right" title="Simpan">
                        <i class="fa fa-edit"></i> Simpan
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
            <form action="<?php echo e(url('/page/admin/data/sakit-menahun/simpan')); ?>" method="POST" id="formEditGoldar">
                <?php echo method_field("PUT"); ?>
                <?php echo csrf_field(); ?>
                <div class="modal-body" id="modal-content-edit">

                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-social btn-warning btn-flat btn-sm pull-left" title="Reset">
                        <i class="fa fa-refresh"></i> Reset
                    </button>
                    <button type="submit" class="btn btn-social btn-success btn-flat btn-sm pull-right" title="Simpan">
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
                $("#formTambahGoldar").validate({
                    ignore: "",
                    rules: {
                        nama: {
                            required: true
                        }
                    },

                    messages: {
                        nama: {
                            required: "Nama harap di isi!"
                        }
                    },

                    submitHandler: function(form) {
                        form.submit();
                    }
                });
                $("#formEditGoldar").validate({
                    ignore: "",
                    rules: {
                        nama: {
                            required: true
                        }
                    },

                    messages: {
                        nama: {
                            required: "Nama harap di isi!"
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

    function editDataSakitMenahun(id)
    {
        $.ajax({
            url : "<?php echo e(url('/page/admin/data/sakit-menahun/edit')); ?>",
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
    var chart = new Highcharts.Chart({
        chart: {
            renderTo: 'piechart',
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: 0,
        plotOptions: {
            index: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels:
                {
                    enabled: true
                },
                showInLegend: true
            }
        },
        legend: {
            layout: 'vertical',
            backgroundColor: '#FFFFFF',
            align: 'right',
            verticalAlign: 'top',
            x: -30,
            y: 0,
            floating: true,
            shadow: true,
            enabled:true
        },
        series: [{
            type: 'pie',
            name: 'Populasi',
            data: [
            <?php $__currentLoopData = $data_sakit_menahun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            ["<?php echo e($data->nama); ?>", <?php echo e($data->getCountPenduduk->count()); ?>],
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ]
        }]
    });

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/penduduk/sakit_menahun/data_sakit_menahun.blade.php ENDPATH**/ ?>