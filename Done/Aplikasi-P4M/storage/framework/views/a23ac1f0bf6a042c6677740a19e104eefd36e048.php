<?php
use App\Models\Model\Artikel;
use App\Models\Model\Penduduk;
use App\Models\Model\PendudukSex;

$kelamin = PendudukSex::all();
$penduduk = Penduduk::all();

setlocale(LC_ALL, 'id_ID', 'id', 'ID');
$artikel = Artikel::latest()->paginate(6);
?>

<script src="<?php echo e(url('/frontend/highcharts/highcharts.js')); ?>"></script>
<script src="<?php echo e(url('/frontend/highcharts/highcharts-3d.js')); ?>"></script>
<script src="<?php echo e(url('/frontend/highcharts/exporting.js')); ?>"></script>
<script src="<?php echo e(url('/frontend/highcharts/highcharts-more.js')); ?>"></script>
<script src="<?php echo e(url('/frontend/highcharts/sankey.js')); ?>"></script>
<script src="<?php echo e(url('/frontend/highcharts/organization.js')); ?>"></script>
<script src="<?php echo e(url('/frontend/highcharts/accessibility.js')); ?>"></script>

<div class="single_bottom_rightbar">
    <h2><i class="fa fa-bar-chart"></i> Statistik Penduduk</h2>
    <div class="tab-content" style="padding-top: 0;">
        <script type="text/javascript">
            $(function () {
                var chart_widget;
                $(document).ready(function () {
                    chart_widget = new Highcharts.Chart({
                        chart: {
                            renderTo: 'container_widget',
                            plotBackgroundColor: null,
                            plotBorderWidth: null,
                            plotShadow: false
                        },
                        title: {
                            text: 'Jumlah Penduduk'
                        },
                        yAxis: {
                            title: {
                                text: 'Jumlah'
                            }
                        },
                        xAxis: {
                            categories:
                            [
                            <?php $__currentLoopData = $kelamin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            ['<?php echo e($k->getCountPenduduk->count()); ?> <br> <?php echo e($k->nama); ?>'],
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            ['<?php echo e($penduduk->count()); ?> <br> <?php echo e("Total"); ?>'],
                            ]
                        },
                        legend: {
                            enabled:false
                        },
                        plotOptions: {
                            series: {
                                colorByPoint: true
                            },
                            column: {
                                pointPadding: 0,
                                borderWidth: 0
                            }
                        },
                        series: [{
                            type: 'column',
                            name: 'Populasi',
                            data: [
                            <?php $__currentLoopData = $kelamin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            ['<?php echo e($k->nama); ?>', <?php echo e($k->getCountPenduduk->count()); ?>],
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            ['<?php echo e("Total"); ?>',<?php echo e($penduduk->count()); ?>],
                            ]
                        }]
                    });
                });

            });
        </script>
        <div id="container_widget" style="width: 100%; height: 300px; margin: 0 auto"></div>
    </div>
</div>
<?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Aplikasi-P4M\resources\views/pengunjung/widget/widget_statistik_penduduk.blade.php ENDPATH**/ ?>