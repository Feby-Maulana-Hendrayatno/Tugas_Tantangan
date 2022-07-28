

<?php $__env->startSection('title', 'Pemerintahan Desa'); ?>

<?php $__env->startSection('page_content'); ?>

<div class="row mt-5">
    <div class="col-md-8">
        <div id="main">
            <div class="main">
                <div class="main_body">
                    
                </div>
            </div>
        </div>
        <hr/>
    </div>
    
    <?php echo $__env->make('pengunjung/page/pemerintahan_desa/submenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('pengunjung/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/pengunjung/page/pemerintahan_desa/index.blade.php ENDPATH**/ ?>