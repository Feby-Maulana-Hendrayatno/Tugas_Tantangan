<?php $__env->startSection('title', 'Profil Wilayah Desa'); ?>

<?php $__env->startSection('page_content'); ?>

<div id="printableArea">
    <h4 class="catg_titile" style="font-family: Oswald"><font color="#FFFFFF"><?php echo $__env->yieldContent('title'); ?></font></h4>
    <div class="post_commentbox">
        <span class="meta_date">
            <i class="fa fa-user"></i>Administrator&nbsp;
            <i class="fa fa-eye"></i>0 Kali Dibaca&nbsp;
        </span>
    </div>
    <div class="single_page_content" style="margin-bottom:10px;">
        <?php $__currentLoopData = $data_geografis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $geografis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $geografis->deskripsi; ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Batas</th>
                        <th>Desa/Kelurahan</th>
                        <th>Kecamatan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $data_wgeografis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wilayah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($wilayah->batas); ?></td>
                        <td><?php echo e($wilayah->desa); ?></td>
                        <td><?php echo e($wilayah->kecamatan); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="3" class="text-center">
                            <i>
                                <b>Data Saat Ini Masih Kosong</b>
                            </i>
                        </td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <?php if(!empty($peta)): ?>
        <style>
            #mapWilDesa iframe {
                width: 100%;
                height: 400px;
            }
        </style>
        <div id="mapWilDesa">
            <?php echo $peta->wilayah_desa; ?>

        </div>
        <?php endif; ?>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('pengunjung/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/pengunjung/page/profil/wilayah.blade.php ENDPATH**/ ?>