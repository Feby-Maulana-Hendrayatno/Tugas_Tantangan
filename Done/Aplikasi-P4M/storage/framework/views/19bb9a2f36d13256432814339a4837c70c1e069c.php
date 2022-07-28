

<?php $__env->startSection('title', 'Statistik Pengunjung Website'); ?>

<?php $__env->startSection('page_content'); ?>

<?php
use Carbon\Carbon;
use App\Models\Model\Counter;
?>

<section class="content-header">
    <h1><?php echo $__env->yieldContent('title'); ?></h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(url('page/admin')); ?>"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><?php echo $__env->yieldContent('title'); ?></li>
    </ol>
</section>
<section class="content" id="maincontent">
    <form id="mainform" name="mainform" method="post">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-2 col-xs-6">
                                <div class="small-box bg-red">
                                    <div class="inner">
                                        <h3><?php echo e($countToday->count()); ?><sup style="font-size: 20px"></sup></h3>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <p class="small-box-footer">Hari Ini</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-xs-6">
                                <div class="small-box bg-purple">
                                    <div class="inner">
                                        <h3><?php echo e($countYesterday->count()); ?><sup style="font-size: 20px"></sup></h3>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <p class="small-box-footer">Kemarin</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-xs-6">
                                <div class="small-box bg-green">
                                    <div class="inner">
                                        <h3><?php echo e($countWeek->count()); ?><sup style="font-size: 20px"></sup></h3>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <p class="small-box-footer">Minggu Ini</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-xs-6">
                                <div class="small-box bg-yellow">
                                    <div class="inner">
                                        <h3><?php echo e($countMonth->count()); ?><sup style="font-size: 20px"></sup></h3>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <p class="small-box-footer">Bulan Ini</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-xs-6">
                                <div class="small-box bg-gray">
                                    <div class="inner">
                                        <h3><?php echo e($countYear->count()); ?><sup style="font-size: 20px"></sup></h3>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <p class="small-box-footer">Tahun Ini</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-xs-6">
                                <div class="small-box bg-blue">
                                    <div class="inner">
                                        <h3><?php echo e($countAll->count()); ?><sup style="font-size: 20px"></sup></h3>
                                        <p></p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <p class="small-box-footer">Jumlah</p>
                                </div>
                            </div>
                        </div>
                        <div class="box-header">
                            <hr>
                            <h4 class="text-center"><strong><?php echo $__env->yieldContent('title'); ?> Setiap Tahun<strong></h4>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="box box-info">
                                                <!-- Ini Grafik -->
                                                <br>
                                                <div id="chart"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="box box-info">
                                                <!-- Tabel Data -->
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-hover nowrap" id="example3">
                                                        <thead class="bg-gray">
                                                            <tr>
                                                                <th class="text-center" width='5%'>No</th>
                                                                <th class="text-center">Tahun</th>
                                                                <th class="text-center">Pengunjung (Orang)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $jumlah = 0;
                                                            ?>
                                                            <?php $__currentLoopData = $counter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php
                                                            $count = Counter::whereYear('created_at', $c->tahun)->get();
                                                            $jumlah += $count->count();
                                                            ?>
                                                            <tr>
                                                                <th class="text-center"><?php echo e($loop->iteration); ?></th>
                                                                <td class="text-center"><?php echo e($c->tahun); ?></td>
                                                                <td class="text-center"><?php echo e($count->count()); ?></td>
                                                            </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </tbody>
                                                        <tfoot class="bg-gray disabled color-palette">
                                                            <tr>
                                                                <th colspan="2" class="text-center">Total</th>
                                                                <th class="text-center"><?php echo e($jumlah); ?></th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('page_scripts'); ?>

    <script type="text/javascript">
        var chart;
        $(document).ready(function()
        {
            chart = new Highcharts.Chart(
            {
                chart:
                {
                    renderTo: 'chart',
                    defaultSeriesType: 'column'
                },
                title:
                {
                    text: ''
                },
                xAxis:
                {
                    title:
                    {
                        text: 'Tahun'
                    },
                    categories: [
                    <?php $__currentLoopData = $counter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    ['  <?php echo e($c->tahun); ?> ', ],
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ]
                },
                yAxis:
                {
                    title:
                    {
                        text: 'Pengunjung (Orang)'
                    }
                },
                legend:
                {
                    layout: 'vertical',
                    enabled:false
                },
                plotOptions:
                {
                    series:
                    {
                        colorByPoint: true
                    },
                    column:
                    {
                        pointPadding: 0,
                        borderWidth: 0
                    }
                },
                series: [
                {
                    shadow:1,
                    border:1,
                    data: [
                    <?php $__currentLoopData = $counter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $count = Counter::whereYear('created_at', $c->tahun)->get();
                    ?>
                    ['  <?php echo e($c->tahun); ?> ', <?php echo e($count->count()); ?>],
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ]
                }]
            });
        });
    </script>

    <?php if(session("success")): ?>

    <script type="text/javascript">

        swal({
            title: "Berhasil!",
            text: "<?php echo e(session('success')); ?>",
            icon: "success",
            button: "OK",
        });

    </script>

    <?php endif; ?>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/web/pengunjung/home.blade.php ENDPATH**/ ?>