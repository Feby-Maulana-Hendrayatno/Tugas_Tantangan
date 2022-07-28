<?php $__env->startSection('title', __('Forbidden')); ?>
<?php $__env->startSection('code', '403'); ?>
<?php $__env->startSection('message', __($exception->getMessage() ?: 'Forbidden')); ?>

<?php echo $__env->make('errors.layoutme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/errors/403.blade.php ENDPATH**/ ?>