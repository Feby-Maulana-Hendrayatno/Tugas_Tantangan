

<?php $__env->startSection('title', 'Sejarah Desa'); ?>

<?php $__env->startSection('page_content'); ?>

<div id="printableArea">
    <h4 class="catg_titile" style="font-family: Oswald"><font color="#FFFFFF"><?php echo $__env->yieldContent('title'); ?></font></h4>
    <div class="post_commentbox">
        <span class="meta_date">
            <i class="fa fa-user"></i>Administrator&nbsp;
            <i class="fa fa-eye"></i>0 Kali Dibaca&nbsp;
        </span>
    </div>
    <div class="single_category wow fadeInDown">
        <div class="archive_style_1">
            <div class="business_category_left wow fadeInDown">
                <ul class="fashion_catgnav">
                    <li style="border-bottom: none">
                        <div class="catgimg2_container2">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php if($sejarah): ?>
                                    <img src="<?php echo e($sejarah->gambar ? '/storage/'.$sejarah->gambar : '/frontend/img/no-images.png'); ?>" width="300" onerror="this.onerror=null; this.src='/frontend/img/no-images.png'" class="img-fluid img-thumbnail" style="float:left; margin:5px 20px 20px 0;" />
                                    <div style="text-align: justify; margin-bottom: 2rem;">
                                        <?php echo $sejarah->sejarah; ?>

                                    </div>
                                    <?php else: ?>
                                    <img src="/frontend/img/no-images.png" width="300" class="img-fluid img-thumbnail" style="float:left; margin:5px 20px 20px 0;" />
                                    <div style="text-align: justify; margin-bottom: 2rem;">
                                        Belum ada sejarah
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
</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('pengunjung/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/pengunjung/page/profil/sejarah.blade.php ENDPATH**/ ?>