
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title> Rumah Tahfidz Quran &mdash; <?php echo $__env->yieldContent("app_title"); ?></title>

    <!-- General CSS Files -->
    <?php echo $__env->make("app.layouts.partials.css.style", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make("app.layouts.partials.js.style", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>


    <div id="app">
        <?php if(session("message")): ?>
        <?php echo session("message"); ?>

        <?php endif; ?>
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            <?php echo $__env->make("app.layouts.partials.navbar.main-navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make("app.layouts.partials.sidebar.main-sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Main Content -->
            <div class="main-content">
                <?php echo $__env->yieldContent("app_content"); ?>
            </div>

            <?php echo $__env->make("app.layouts.partials.footer.main-footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </div>

    <?php echo $__env->yieldContent("app_scripts"); ?>

    <script>
        function logout() {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Anda akan mengakhiri sesi login ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Logout'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '<?php echo e(url("app/logout")); ?>',
                        type: 'get',
                        success: function (response) {
                            if (response.status == true) {
                                Swal.fire({
                                    title: 'Selamat!',
                                    text: 'Anda berhasil logout',
                                    icon: 'success'
                                }).then((result) => {
                                    location.href = '<?php echo e(url("/app/login")); ?>'
                                })
                            }
                        }
                    })
                }
            })
        }
    </script>

</body>
</html>
<?php /**PATH E:\FILE KULIAH\SEMESTER 4\TUGAS KULIAH TAHUN AJARAN 2021 - 2022\PROYEK 3\RTQ-WEB\RumahTahfidz\resources\views/app/layouts/template.blade.php ENDPATH**/ ?>