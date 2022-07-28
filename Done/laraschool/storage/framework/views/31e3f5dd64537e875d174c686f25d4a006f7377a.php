<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Laraschool | <?php echo e($title ?? ''); ?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(asset('templates/frontend/clever')); ?>/img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo e(asset('templates/frontend/clever')); ?>/style.css">
    <?php echo $__env->yieldPushContent('css'); ?>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +1 123 321 456 654</a>
                <a href="#"><span>Email:</span> laraschool@example.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Navbar Area -->
        <?php echo $__env->make('layouts.frontend.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>
    <!-- ##### Header Area End ##### -->

    <?php echo $__env->yieldContent('content'); ?>

    <!-- ##### Footer Area Start ##### -->
    <?php echo $__env->make('layouts.frontend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?php echo e(asset('templates/frontend/clever')); ?>/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo e(asset('templates/frontend/clever')); ?>/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo e(asset('templates/frontend/clever')); ?>/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?php echo e(asset('templates/frontend/clever')); ?>/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo e(asset('templates/frontend/clever')); ?>/js/active.js"></script>
    <?php echo $__env->yieldPushContent('js'); ?>
</body>
</html><?php /**PATH D:\Tugas_Pa_Anis\laraschool\resources\views/layouts/frontend/app.blade.php ENDPATH**/ ?>