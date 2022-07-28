<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div id="app-2">

        <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <div class="main flex flex-wrap justify-end mt-16">
            
            <div class="content w-full">
                <div class="container mx-auto p-4 sm:p-6">

                    <?php echo $__env->yieldContent('content'); ?>
                    
                </div>
            </div>
        </div>
    </div>

</body>
</html><?php /**PATH C:\Users\Adones\Downloads\laravel-school-management-system-master\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>