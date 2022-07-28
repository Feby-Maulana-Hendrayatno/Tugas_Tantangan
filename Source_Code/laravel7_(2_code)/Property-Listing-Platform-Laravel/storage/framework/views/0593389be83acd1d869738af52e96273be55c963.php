<!DOCTYPE html>
<html>
<head>
    <?php echo $__env->make('admin.includes._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title> 
        <?php echo $__env->yieldContent('title'); ?> Real State
    </title>
</head>
<body>
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">        
        <?php echo $__env->make('admin.includes._loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('admin.includes._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
        <?php echo $__env->make('admin.includes._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="page-wrapper">    
        <?php echo $__env->make('admin.includes._notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->yieldContent('content'); ?>
        </div>    
        <?php echo $__env->make('admin.includes._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('admin.includes._scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</body>
</html><?php /**PATH D:\Tugas_Pa_Anis\DONE\laravel7\Property-Listing-Platform-Laravel\resources\views/admin/base.blade.php ENDPATH**/ ?>