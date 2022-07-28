<?php $__env->startSection('title', 'Data Agama'); ?>

<?php $__env->startSection('page_content'); ?>

<div id="printableArea">

    <div class="single_page_area" style="margin-bottom:10px;">
        <h2 class="post_title" style="font-family: Oswald; margin-bottom: 5rem;"><?php echo $__env->yieldContent('title'); ?></h2>
        <?php if($agama->count()): ?>
        <center><div id="piechart"></div></center>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th>Agama</th>
                        <th class="text-center">Jumlah</th>
                        <th class="text-center">Persentase</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $agama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <th><?php echo $loop->iteration; ?></th>
                        <td><?php echo $a->nama; ?></td>
                        <td><?php echo $a->getCountPenduduk->count(); ?> Orang</td>
                        <td>
                            <?php if($a->getCountPenduduk->count() == 0): ?>
                            0
                            <?php else: ?>
                            <?php echo round($a->getCountPenduduk->count() / $penduduk * 100, 2); ?>

                            <?php endif; ?>
                            %
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="4" class="text-center">
                            <i>
                                <b>Daat Saat Ini Masih Kosong</b>
                            </i>
                        </td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <?php else: ?>
        <div class="alert alert-danger" role="alert">
            <strong>Maaf, </strong> Data Agama Belum Tersedia
        </div>
        <?php endif; ?>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>
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
            <?php $__currentLoopData = $agama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            ["<?php echo e($data->nama); ?>", <?php echo e($data->getCountPenduduk->count()); ?>],
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ]
        }]
    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('pengunjung/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/pengunjung/page/data_desa/agama.blade.php ENDPATH**/ ?>