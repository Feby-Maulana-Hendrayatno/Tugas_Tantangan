<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta name="title" content="Sistem MPM POLINDRA">
  <meta name="description" content="Sistem MPM POLINDRA - Sistem MPM POLINDRA">
  <meta name="keywords" content="Sistem MPM POLINDRA">
  <meta name="copyright" content="M Ilham Teguhriyadi"> 
  <meta name="author" content="M Ilham Teguhriyadi">

  <link rel="icon" href="<?php echo e(url('/gambar/logo_fix_mpm.png')); ?>">
  <title>.: MPM POLINDRA :.</title>

  <!-- Favicons -->
  <?php echo $__env->make("page.layouts.partials.css.style_user", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body>

  <!-- ======= Header ======= -->
  <?php echo $__env->make("page.layouts.partials.navbar.v_nav_header_user", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <?php echo $__env->yieldContent("page_content"); ?>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>MPM POLINDRA</h3>
            <p>
              Jln. Lohbener lama No.06 Kec. Lohbener Kab. Indramayu 45252
              <br><br>
              <strong>Telepon : </strong> 0853-1463-0396 <br>
              <strong>Email :</strong> mpmpolindra@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Kategori</h4>
            <ul>
              <?php
                $data_kategori = DB::table("tb_kategori")
                            ->orderBy("id_kategori", "DESC")
                            ->paginate(5);
              ?>
              <?php $__currentLoopData = $data_kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li>
                  <i class="bx bx-chevron-right"></i> 
                  <a href="#">
                    <?php echo e($kategori->nama_kategori); ?>

                  </a>
              </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Social Media</h4>
            <p>Apabila ada yang ingin dipertanyakan. Silahkan hubungi sosial media kami.</p>
            <div class="social-links mt-3">
              <a target="_blank" href="https://twitter.com/" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a target="_blank" href="https://www.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a target="_blank" href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>MPM POLINDRA</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Desain Oleh : <b>KELOMPOK - 10</b>
      </div>



    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <?php echo $__env->make("page.layouts.partials.js.style_user", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->yieldContent("page_scripts"); ?>

</body>

</html>
<?php /**PATH C:\Users\ASUS\Desktop\Proyek-Terbaru-MPM\Contoh\resources\views/page/layouts/template_user.blade.php ENDPATH**/ ?>