<?php $__env->startSection("page_title", "404"); ?>

<?php $__env->startSection("page_header", "Oops! Halaman Tidak Ditemukan."); ?>
<?php $__env->startSection("page_content"); ?>
Sistem ini tidak menemukan halaman yang anda cari.
Sementara itu, akan di alihkan ke halaman <a href="<?php echo e(url('/page/dashboard')); ?>"> dashboard</a>.
<?php $__env->stopSection(); ?>

<?php echo $__env->make('errors::minimal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Aplikasi-Absensi\resources\views/errors/404.blade.php ENDPATH**/ ?>