

<?php $__env->startSection('page_content'); ?>
<div class="single_category wow fadeInDown">
    <div class="archive_style_1">
        <div class="business_category_left wow fadeInDown">
            <ul class="fashion_catgnav">
                <li style="border-bottom: none">
                    <div class="catgimg2_container2">
                        <div class="row">
                            <div class="col-md-12">
                                <?php if($data_profil): ?>
                                <img src="<?php echo e($data_profil ? url('/storage/'.$data_profil->gambar) : url('/frontend/img/logo-desa.png')); ?>" width="300" class="img-fluid img-thumbnail" style="float:left; margin:5px 20px 20px 0;" />
                                <div style="text-align: justify; margin-bottom: 2rem;">
                                    <?php echo $data_profil->deskripsi; ?>

                                </div>
                                <?php else: ?>
                                <img src="<?php echo e(url('/frontend/img/no-images.png')); ?>" width="300" class="img-fluid img-thumbnail" style="float:left; margin:5px 20px 20px 0;" />
                                <div style="text-align: justify; margin-bottom: 2rem;">
                                    Belum ada deskripsi
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('pengunjung/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/pengunjung/page/home.blade.php ENDPATH**/ ?>