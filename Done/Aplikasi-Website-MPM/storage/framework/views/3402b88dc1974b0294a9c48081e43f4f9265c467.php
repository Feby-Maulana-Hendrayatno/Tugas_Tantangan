<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="title" content="Sistem MPM POLINDRA">
  <meta name="description" content="Sistem MPM POLINDRA - Sistem MPM POLINDRA">
  <meta name="keywords" content="Sistem MPM POLINDRA">
  <meta name="copyright" content="M Ilham Teguhriyadi"> 
  <meta name="author" content="M Ilham Teguhriyadi">

  <link rel="icon" href="<?php echo e(url('/gambar/logo_fix_mpm.png')); ?>">
  <title> .: Administrator | <?php echo $__env->yieldContent("page_title"); ?> :. </title>

  <?php echo $__env->make("page.layouts.partials.css.style", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->yieldContent("page_css"); ?>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?php echo e(url('/page/admin/dashboard')); ?>" class="nav-link">SISTEM MPM POLINDRA</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li>
          <a onclick="return confirm('Yakin ? Anda Ingin Logout ?')" href="<?php echo e(url('/page/admin/logout')); ?>" class="nav-link">
            <i class="fa fa-sign-out"></i> Logout
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="<?php echo e(url('/gambar/logo_mpm.jpg')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">MPM POLINDRA</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo e(url('/gambar/gambar_user.png')); ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">
              <?php echo e(auth()->user()->nama); ?>

            </a>
          </div>
        </div>

        <!-- SidebarSearch Form -->

        <?php echo $__env->make("page.layouts.partials.navbar.v_navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      </div>
    </aside>

    <div class="content-wrapper">
      <div class="content-header">
        <?php echo $__env->yieldContent("breadcrumb"); ?>
      </div>

      <section class="content">
        <?php echo $__env->yieldContent("page_content"); ?>
      </section>

    </div>

    <footer class="main-footer">
      <strong>Copyright &copy; 2021 </strong>
      . All rights reserved. Design By <b>Kelompok - 10</b>
    </footer>

    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
  </div>
  
  <?php echo $__env->make("page.layouts.partials.js.style", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->yieldContent("page_scripts"); ?>  

</body>
</html>
<?php /**PATH C:\Users\ASUS\Desktop\Proyek-Terbaru-MPM\Contoh\resources\views/page/layouts/template.blade.php ENDPATH**/ ?>