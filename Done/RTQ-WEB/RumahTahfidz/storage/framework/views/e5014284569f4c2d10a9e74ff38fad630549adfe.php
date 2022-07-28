<?php
    use Carbon\Carbon;
?>


<?php $__env->startSection("app_title", "Data Informasi Login"); ?>

<?php $__env->startSection("app_content"); ?>

<section class="section">
    <div class="section-header">
        <h1>Informasi Login</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active">
                <a href="<?php echo e(url('/app/admin/home')); ?>">Dashboard</a>
            </div>
            <div class="breadcrumb-item">Data Informasi Login</div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <i class="fa fa-book"></i> Data Informasi Login
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Nama</th>
                                    <th>Login Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 0
                                ?>
                                <?php $__currentLoopData = $data_informasi_login; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e(++$no); ?>.</td>
                                    <td><?php echo e($data->nama); ?></td>
                                    <td><?php echo e(Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->isoFormat('dddd, D MMMM Y H:mm:s')); ?></td>
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

<?php $__env->startSection("app_scripts"); ?>

<script>
    $(document).ready(function() {
        $("#table-1").dataTable();
    })
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(".app.layouts.template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\FILE KULIAH\SEMESTER 4\TUGAS KULIAH TAHUN AJARAN 2021 - 2022\PROYEK 3\RTQ-WEB\RumahTahfidz\resources\views/app/administrator/informasi_login/v_index.blade.php ENDPATH**/ ?>