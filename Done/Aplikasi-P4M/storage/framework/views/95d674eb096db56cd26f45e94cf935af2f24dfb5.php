

<?php $__env->startSection('title', 'Artikel'); ?>

<?php $__env->startSection('page_content'); ?>

<div class="single_category wow fadeInDown">
    <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <span class="title_text"><?php echo $__env->yieldContent('title'); ?></span> </h2>
</div>
<div class="single_category wow fadeInDown">
    <div class="archive_style_1">
        <?php $__currentLoopData = $data_berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="business_category_left wow fadeInDown">
            <ul class="fashion_catgnav">
                <li>
                    <div class="catgimg2_container2">
                        <h5 class="catg_titile">
                            <a href="/berita/<?php echo $berita->slug; ?>" title="Baca Selengkapnya"><?php echo $berita->judul; ?></a>
                        </h5>
                        <div class="post_commentbox">
                            <span class="meta_date">26 Agustus 2016&nbsp;
                                <i class="fa fa-user"></i>Administrator&nbsp;
                                <i class="fa fa-eye"></i>0 Kali&nbsp;
                                <i class="fa fa-comments"></i>0&nbsp;
                            </span>
                        </div>
                        <a href="/berita/<?php echo $berita->slug; ?>" title="Baca Selengkapnya" style="font-weight:bold">
                            <img src="/storage/<?php echo $berita->image; ?>" height="200" width="300px" class="img-fluid img-thumbnail hidden-sm hidden-xs" style="float:left; margin:0 8px 4px 0;" alt="<?php echo $berita->judul; ?>" />
                            <img src="/storage/<?php echo $berita->image; ?>" width="100%" class="img-fluid img-thumbnail hidden-lg hidden-md" style="float:left; margin:0 8px 4px 0;" alt="<?php echo $berita->judul; ?>" />
                        </a>
                        <div style="text-align: justify;" class="hidden-sm hidden-xs">
                            <?php echo $berita->kutipan; ?>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="d-flex justify-content-end">
            <?php echo e($data_berita->links()); ?>

        </div>
    </div>
</div>  

<?php $__env->stopSection(); ?>

<?php echo $__env->make('pengunjung/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//pengunjung/page/berita/index.blade.php ENDPATH**/ ?>