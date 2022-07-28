<?php if(Request::is('/')): ?>
<section class="hero-area">
    <div class="hero-slides owl-carousel">
        <div class="single-hero-slide bg-img" style="background-image: url('<?php echo e(url('/frontend')); ?>/img/kantor-desa.jpeg');">
        </div>
    </div>
</section>
<?php else: ?>    
<div class="breadcumb-area bg-img" style="background-image:url('<?php echo e(url('/frontend')); ?>/img/kantor-desa.jpeg');">
    <div class="bradcumbContent">
        <h2><?php echo $__env->yieldContent('title'); ?></h2>
    </div>
</div>
<?php endif; ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/pengunjung/layouts/breadcumb.blade.php ENDPATH**/ ?>