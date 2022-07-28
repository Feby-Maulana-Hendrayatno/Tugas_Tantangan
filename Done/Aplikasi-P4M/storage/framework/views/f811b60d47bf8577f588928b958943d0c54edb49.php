<?php $__env->startSection('title', 'Sumber Daya Kelembagaan'); ?>

<?php $__env->startSection('page_content'); ?>

<section class="content-header">
    <h1>
        <?php echo $__env->yieldContent('title'); ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/page/admin">Dashboard</a></li>
        <li class="active"><?php echo $__env->yieldContent('title'); ?></li>
    </ol>
</section>

Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quod a neque inventore laudantium sapiente optio eius, magnam architecto voluptatem sit quos incidunt cupiditate velit officiis minus quisquam itaque autem.

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/sumber_daya/kelembagaan/index.blade.php ENDPATH**/ ?>