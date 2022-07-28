<?php $__env->startSection('title', 'Data Wilayah Administratif'); ?>

<?php $__env->startSection('page_content'); ?>

<div id="printableArea">

    <div class="single_page_area" style="margin-bottom:10px;">
        <h2 class="post_title" style="font-family: Oswald"><?php echo $__env->yieldContent('title'); ?></h2>

        <div class="table-responsive">
            <table class="table table-bordered" id="tablePenduduk">
                <thead>
                    <tr>
                        <th>Dusun</th>
                        <th>Laki-Laki</th>
                        <th>Perempuan</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $dataDusun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo $data->dusun; ?></td>
                            <td></td>
                            <td></td>
                            <td><?php echo $data->getCountPenduduk->count(); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="4" class="text-center">
                                <i>
                                    <b>Data Tidak Ada</b>
                                </i>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('pengunjung/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/pengunjung/page/data_desa/wilayah-administratif.blade.php ENDPATH**/ ?>