
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        <?php
            use App\Models\Profil;

            $data = Profil::select("nama")->first();
        ?>
        <?php if(empty($data->nama)): ?>
            Anonymus
        <?php else: ?>
            <?php echo e($data->nama); ?>

        <?php endif; ?>

        - <?php echo $__env->yieldContent("lp_title"); ?>
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php echo $__env->make("app.landing.layouts.partials.css.style", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <?php echo $__env->make("app.landing.layouts.partials.navbar.v_navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent("lp_content"); ?>

    <?php echo $__env->make("app.landing.layouts.partials.footer.v_footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <?php echo $__env->make("app.landing.layouts.partials.js.style", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH E:\FILE KULIAH\SEMESTER 4\TUGAS KULIAH TAHUN AJARAN 2021 - 2022\PROYEK 3\RTQ-WEB\RumahTahfidz\resources\views/app/landing/layouts/template.blade.php ENDPATH**/ ?>