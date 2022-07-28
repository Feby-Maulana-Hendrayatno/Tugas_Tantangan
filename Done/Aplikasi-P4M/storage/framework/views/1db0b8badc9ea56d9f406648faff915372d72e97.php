<div id="main">
    <div class="main">
        <div class="main_title">Galeri</div>
        <div class="main_body">
            <div class="row gallery clearfix">
                <?php $__currentLoopData = $data_galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galeri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div style="margin-bottom:20px;">
                        <a href="" title="<?php echo e($galeri->judul); ?>">
                            <img src="<?php echo e(url('storage/'.$galeri->gambar)); ?>" alt="<?php echo e($galeri->judul); ?>" width="100%" style="height:150px">
                            <p><?php echo e($galeri->judul); ?></p>
                        </a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/pengunjung/widget/widget_galeri_terbaru.blade.php ENDPATH**/ ?>