<?php $__env->startSection('title', 'Data Kewarganegaraan'); ?>

<?php $__env->startSection('page_content'); ?>

<div id="printableArea">

    <div class="single_page_area" style="margin-bottom:10px;">
        <h2 class="post_title" style="font-family: Oswald; margin-bottom: 5rem;"><?php echo $__env->yieldContent('title'); ?></h2>
        <?php if($wargaNegara->count()): ?>
        <center><div id="piechart"></div></center>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th>Warga Negara</th>
                        <th class="text-center">Jumlah</th>
                        <th class="text-center">Persentase</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $wargaNegara; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="text-center"><?php echo $loop->iteration; ?></td>
                        <td><?php echo $wn->nama; ?></td>
                        <td class="text-center"><?php echo $wn->getCountPenduduk->count(); ?> Orang</td>
                        <td class="text-center">
                            <?php if($wn->getCountPenduduk->count() == 0): ?>
                            0
                            <?php else: ?>
                            <?php echo round($wn->getCountPenduduk->count() / $penduduk * 100, 2); ?>

                            <?php endif; ?>
                            %
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="4" class="text-center">
                            <i>
                                <b>Data Saat Ini Masih Kosong</b>
                            </i>
                        </td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <?php else: ?>
        <div class="alert alert-danger" role="alert">
            <strong>Maaf, </strong> Data Warga Negara Belum Tersedia
        </div>
        <?php endif; ?>
    </div>
</div>

<script>
    // Rumus jangan dihapus
    // let jumlah = (538 / 1994);
    // let hasil = jumlah * 100;
    // console.log(hasil.toFixed(2));
</script>

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
            <?php $__currentLoopData = $wargaNegara; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            ["<?php echo e($data->nama); ?>", <?php echo e($data->getCountPenduduk->count()); ?>],
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ]
        }]
    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('pengunjung/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/pengunjung/page/data_desa/warga-negara.blade.php ENDPATH**/ ?>