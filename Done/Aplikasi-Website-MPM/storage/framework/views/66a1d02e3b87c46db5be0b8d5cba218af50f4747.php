<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="title" content="Sistem MPM POLINDRA">
  <meta name="description" content="Sistem MPM POLINDRA - Sistem MPM POLINDRA">
  <meta name="keywords" content="Sistem MPM POLINDRA">
  <meta name="copyright" content="M Ilham Teguhriyadi"> 
  <meta name="author" content="M Ilham Teguhriyadi">

  <link rel="icon" href="<?php echo e(url('/gambar/logo_mpm.jpg')); ?>">

  <title> MPM POLINDRA | <?php echo $__env->yieldContent("title"); ?> </title>

  <?php echo $__env->make("page.user.layouts.partials.css.style", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body>

  <!-- Navigation -->
  <?php echo $__env->make("page.user.layouts.partials.navbar.v_nav", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->yieldContent("page_content"); ?>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <?php echo $__env->make("page.user.layouts.partials.js.style", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->yieldContent("page_scripts"); ?>

</body>

</html>
<?php /**PATH C:\Users\USER\Desktop\Proyek-MPM-POLINDRA\Contoh\resources\views/page/user/layouts/template_user.blade.php ENDPATH**/ ?>