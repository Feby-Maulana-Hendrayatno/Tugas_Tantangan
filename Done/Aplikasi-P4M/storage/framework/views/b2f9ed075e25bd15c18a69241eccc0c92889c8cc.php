

<?php $__env->startSection('title', $data_title); ?>

<?php $__env->startSection('page_content'); ?>

<?php
    use Illuminate\Support\Str;
    use Carbon\Carbon;
?>

<div class="single_category wow fadeInDown">
    <h2>
        <span class="bold_line">
            <span></span>
        </span>
        <span class="solid_line"></span>
        <span class="title_text"><?php echo $__env->yieldContent('title'); ?></span>
    </h2>
</div>
<div class="single_category wow fadeInDown">
    <div class="archive_style_1">
        <?php if($data_artikel->count()): ?>
        <?php $__currentLoopData = $data_artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="business_category_left wow fadeInDown">
            <ul class="fashion_catgnav">
                <li>
                    <div class="">
                        <h5 class="catg_titile">
                            <a href="<?php echo e(url('')); ?>/artikel/<?php echo $artikel->slug; ?>" title="Baca Selengkapnya"><?php echo $artikel->judul; ?></a>
                        </h5>
                        <div class="post_commentbox">
                            <span class="meta_date"><?php echo Carbon::createFromFormat('Y-m-d H:i:s', $artikel->created_at)->isoFormat('D MMMM Y'); ?>&nbsp;
                                <i class="fa fa-user"></i>Administrator&nbsp;
                                <i class="fa fa-eye"></i><?php echo e($artikel->getCount->count()); ?> Kali&nbsp;
                                <i class="fa fa-comments"></i><?php echo e($artikel->getKomentar->count()); ?>&nbsp;
                            </span>
                        </div>
                        <a href="<?php echo e(url('')); ?>/artikel/<?php echo $artikel->slug; ?>" title="Baca Selengkapnya" style="font-weight:bold">
                            <img src="<?php echo $artikel->image ? url('').'/storage/'.$artikel->image : url('').'/frontend/img/no-images.png'; ?>" onerror="this.onerror=null; this.src='<?php echo e(url('')); ?>/frontend/img/no-images.png'" class="img-fluid img-thumbnail hidden-sm hidden-xs" style="float:left; margin:0 8px 4px 0; height: 200px; width: 300px" alt="<?php echo $artikel->judul; ?>" />
                            <img src="<?php echo $artikel->image ? url('').'/storage/'.$artikel->image : url('').'/frontend/img/no-images.png'; ?>" onerror="this.onerror=null; this.src='<?php echo e(url('')); ?>/frontend/img/no-images.png'" class="img-fluid img-thumbnail hidden-lg hidden-md" style="float:left; margin:0 8px 4px 0; height: 200px; width: 100%" alt="<?php echo $artikel->judul; ?>" />
                        </a>
                        <div style="text-align: justify;" class="hidden-sm hidden-xs">
                            <?php echo Str::limit($artikel->body, 525); ?>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="d-flex justify-content-end">
            <?php echo e($data_artikel->links()); ?>

        </div>
        <?php else: ?>
        <br>
        <div class="alert alert-danger" role="alert">
            <strong>Maaf, </strong> Belum Ada Artikel yang Tersedia
        </div>
        <?php endif; ?>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('pengunjung/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//pengunjung/page/artikel/index.blade.php ENDPATH**/ ?>