<?php $__env->startSection('title', 'Sarana Prasarana Tempat Usaha'); ?>

<?php $__env->startSection('page_content'); ?>

<div id="printableArea">

    <div class="single_page_area" style="margin-bottom:10px;">
        <h2 class="post_title" style="font-family: Oswald; margin-bottom: 5rem;"><?php echo $__env->yieldContent('title'); ?></h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th>Jenis</th>
                        <th class="text-center">Jumlah</th>
                        <th>Lokasi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $tempatUsaha; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="text-center"><?php echo $loop->iteration; ?></td>
                        <td><?php echo $tu->jenis; ?></td>
                        <td class="text-center"><?php echo $tu->jumlah; ?></td>
                        <td><?php echo $tu->lokasi; ?></td>
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
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('pengunjung/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/pengunjung/page/sarpras/tempat-usaha.blade.php ENDPATH**/ ?>