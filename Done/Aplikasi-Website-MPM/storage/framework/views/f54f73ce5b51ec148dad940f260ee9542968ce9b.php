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

  <link rel="icon" href="<?php echo e(url('/gambar/MPM .jpg')); ?>">
  <title>.: MPM POLINDRA :.</title>

  <!-- Favicons -->
  <?php echo $__env->make("page.layouts.partials.css.style_user", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>MPM POLINDRA</h3>
            <p>
              Jln. Lohbener lama No.06 Kec. Lohbener Kab. Indramayu 45252
              <br><br>
              <strong>Telepon : </strong> 0853-1463-0396 <br>
              <strong>Email :</strong> mpmpolindra@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Social Media</h4>
            <p>Apabila ada yang ingin dipertanyakan. Silahkan hubungi sosial media kami.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
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
<?php /**PATH C:\Users\USER\Desktop\Proyek-MPM-POLINDRA\Contoh\resources\views/page/layouts/template_user.blade.php ENDPATH**/ ?>