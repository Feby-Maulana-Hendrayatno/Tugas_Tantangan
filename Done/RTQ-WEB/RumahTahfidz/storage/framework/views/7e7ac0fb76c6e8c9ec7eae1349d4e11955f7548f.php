

<?php $__env->startSection("app_title", "Home"); ?>

<?php $__env->startSection("app_content"); ?>

<section class="section">
    <div class="section-header">
        <h1>
            <?php echo $__env->yieldContent("app_title"); ?>
        </h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">Home</div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Admin</h4>
                    </div>
                    <div class="card-body">
                        10
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>News</h4>
                    </div>
                    <div class="card-body">
                        42
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Reports</h4>
                    </div>
                    <div class="card-body">
                        1,201
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Online Users</h4>
                    </div>
                    <div class="card-body">
                        47
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Statistics</h4>
                    <div class="card-header-action">
                        <div class="btn-group">
                            <a href="#" class="btn btn-primary">Week</a>
                            <a href="#" class="btn">Month</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="myChart" height="158"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Informasi Login</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled list-unstyled-border">
                        <?php
                        use Carbon\Carbon;
                        ?>
                        <?php $__currentLoopData = $user_login; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $login): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        $dataTime = Carbon::createFromFormat('Y-m-d H:i:s', $login->created_at);
                        ?>
                        <li class="media">
                            <img class="mr-3 rounded-circle" width="50" src="<?php echo e(url('/template')); ?>/dist/assets/img/avatar/avatar-1.png" alt="avatar">
                            <div class="media-body">
                                <div class="float-right text-primary"><?php echo e($dataTime->diffForHumans()); ?></div>
                                <div class="media-title"><?php echo e($login->nama); ?></div>
                                <span class="text-small text-muted"></span>
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <div class="text-center pt-1 pb-1">
                        <a href="<?php echo e(url('/app/sistem/informasi_login')); ?>" class="btn btn-primary btn-lg btn-round">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app.layouts.template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\FILE KULIAH\SEMESTER 4\TUGAS KULIAH TAHUN AJARAN 2021 - 2022\PROYEK 3\RTQ-WEB\RumahTahfidz\resources\views/app/administrator/v_home.blade.php ENDPATH**/ ?>