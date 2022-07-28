

<?php $__env->startSection('title', 'Data Jenis Kelamin'); ?>

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
                        <i class="fa fa-book"></i> Grafik Data Jenis Kelamin
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
                        <i class="fa fa-bars"></i> Jenis Kelamin
                    </h3>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-hover" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Nama</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data_penduduk_sex; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($data->nama); ?></td>
                                    <td class="text-center">
                                        <button onclick="editDataSex(<?php echo e($data->id); ?>)" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default-edit" title="Ubah Data">
                                            <i class="fa fa-edit"></i>
                                        </button>
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
            <form action="<?php echo e(url('/page/admin/data/jenis-kelamin')); ?>" method="POST" id="formTambahSex">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama"> Nama </label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Pendidikan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">
                        <i class="fa fa-refresh"></i> Batal
                    </button>
                    <button type="submit" class="btn btn-primary">
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
            <form action="<?php echo e(url('/page/admin/data/jenis-kelamin/simpan')); ?>" method="POST" id="formEditSex">
                <?php echo method_field("PUT"); ?>
                <?php echo csrf_field(); ?>
                <div class="modal-body" id="modal-content-edit">

                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-social btn-danger btn-flat btn-sm pull-left" title="Reset">
                        <i class="fa fa-times"></i> Batal
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
                $("#formTambahSex").validate({
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
                $("#formEditSex").validate({
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
    function editDataSex(id)
    {
        $.ajax({
            url : "<?php echo e(url('/page/admin/data/jenis-kelamin/edit')); ?>",
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
            <?php $__currentLoopData = $data_penduduk_sex; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            ["<?php echo e($data->nama); ?>", <?php echo e($data->getCountPenduduk->count()); ?>],
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ]
        }]
    });

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/penduduk/sex/data_sex.blade.php ENDPATH**/ ?>