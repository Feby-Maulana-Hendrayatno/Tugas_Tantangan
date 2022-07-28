<!DOCTYPE html>
<html>

        <?php echo $__env->make('site.includes._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <title> 
        <?php echo $__env->yieldContent('title'); ?> Real State
    </title>
    </head>
<body id="top">




    <?php echo $__env->make('site.includes._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    

    <?php echo $__env->make('site.includes._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('site.includes._scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('site.includes._notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



</body>

</html><?php /**PATH D:\Tugas_Pa_Anis\DONE\laravel7\Property-Listing-Platform-Laravel\resources\views/site/base.blade.php ENDPATH**/ ?>