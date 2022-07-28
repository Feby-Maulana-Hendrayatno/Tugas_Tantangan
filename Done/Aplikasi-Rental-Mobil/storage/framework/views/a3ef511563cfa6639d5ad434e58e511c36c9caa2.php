<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

  <title>Aplikasi Rental Mobil</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo e(url('/theme')); ?>/assets/css/bootstrap.css" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo e(url('/theme')); ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo e(url('/theme')); ?>/assets/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="<?php echo e(url('/theme')); ?>/assets/js/gritter/css/jquery.gritter.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo e(url('/theme')); ?>/assets/lineicons/style.css">

  <!-- Custom styles for this template -->
  <link href="<?php echo e(url('/theme')); ?>/assets/css/style.css" rel="stylesheet">
  <link href="<?php echo e(url('/theme')); ?>/assets/css/style-responsive.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo e(url('/css/style.css')); ?>">

  <script src="<?php echo e(url('/theme')); ?>/assets/js/chart-master/Chart.js"></script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body>

      <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
        <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo"><b> Rental </b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
          <!--  notification start -->
          <ul class="nav top-menu">
            <!-- inbox dropdown end -->
          </ul>
          <!--  notification end -->
        </div>
        <div class="top-menu">
         <ul class="nav pull-right top-menu">
          <li><a class="logout" href="<?php echo e(url('/logout')); ?>">Logout</a></li>
        </ul>
      </div>
    </header>

    <aside>
      <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

         <p class="centered"><a href="profile.html"><img src="<?php echo e(url('/icon')); ?>/default.jpg" class="img-circle" width="60"></a></p>
         <h5 class="centered"><?php echo e(Auth::user()->username); ?></h5>

         <li class="mt">
           <a href="<?php echo e(url('/dashboard')); ?>">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <?php if(Auth::user()->role == 1): ?>
        <li>
          <a href="<?php echo e(url('/petugas')); ?>">
            <i class="fa fa-user"></i>
            <span>Petugas</span>
          </a>
        </li>
        <?php elseif(Auth::user()->role == 2): ?>
        <li>
          <a href="<?php echo e(url('/merk')); ?>">
            <i class="fa fa-image fa-fw"></i>
            <span>Merk</span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(url('/type')); ?>">
            <i class="fa fa-bars fa-fw"></i>
            <span>Type</span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(url('/pemilik')); ?>">
            <i class="fa fa-user fa-fw"></i>
            <span>Pemilik</span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(url('/kendaraan')); ?>">
            <i class="fa fa-car fa-fw"></i>
            <span>Kendaraan</span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(url('/pelanggan')); ?>">
            <i class="fa fa-user fa-fw"></i>
            <span>Pelanggan</span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(url('/sopir')); ?>">
            <i class="fa fa-users fa-fw"></i>
            <span>Sopir</span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(url('/setoran')); ?>">
            <i class="fa fa-money fa-fw"></i>
            <span>Setoran</span>
          </a>
        </li>
        <?php endif; ?>
        <li>
          <a href="<?php echo e(url('/pemilik')); ?>">
            <i class="fa fa-user fa-fw"></i>
            <span>Pemilik</span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(url('/kendaraan')); ?>">
            <i class="fa fa-car fa-fw"></i>
            <span>Kendaraan</span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(url('/pelanggan')); ?>">
            <i class="fa fa-user fa-fw"></i>
            <span>Pelanggan</span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(url('/sopir')); ?>">
            <i class="fa fa-users fa-fw"></i>
            <span>Sopir</span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(url('/transaksi')); ?>">
            <i class="fa fa-money fa-fw"></i>
            <span>Transaksi</span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(url('/pengembalian')); ?>">
            <i class="fa fa-sign-out fa-fw"></i>
            <span>Pengembalian</span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(url('/setoran')); ?>">
            <i class="fa fa-money fa-fw"></i>
            <span>Setoran</span>
          </a>
        </li>
        <?php if(Auth::user()->role == 1): ?>
        <li>
          <a href="<?php echo e(url('/users')); ?>">
            <i class="fa fa-users"></i>
            <span>Users</span>
          </a>
        </li>
        <?php endif; ?>
      </ul>
      <!-- sidebar menu end-->
    </div>
  </aside>

  <section id="main-content">
    <section class="wrapper">
      <?php echo $__env->yieldContent("page_content"); ?>
    </section>
  </section>
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="<?php echo e(url('/theme')); ?>/assets/js/jquery.js"></script>
<script src="<?php echo e(url('/theme')); ?>/assets/js/jquery-1.8.3.min.js"></script>
<script src="<?php echo e(url('/theme')); ?>/assets/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="<?php echo e(url('/theme')); ?>/assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo e(url('/theme')); ?>/assets/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo e(url('/theme')); ?>/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="<?php echo e(url('/theme')); ?>/assets/js/jquery.sparkline.js"></script>


<!--common script for all pages-->
<script src="<?php echo e(url('/theme')); ?>/assets/js/common-scripts.js"></script>

<script type="text/javascript" src="<?php echo e(url('/theme')); ?>/assets/js/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="<?php echo e(url('/theme')); ?>/assets/js/gritter-conf.js"></script>

<!--script for this page-->
<script src="<?php echo e(url('/theme')); ?>/assets/js/sparkline-chart.js"></script>
<script src="<?php echo e(url('/theme')); ?>/assets/js/zabuto_calendar.js"></script>
<script type="text/javascript" src="<?php echo e(url('/js/style.js')); ?>"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#data').DataTable();
  });
</script>

<?php echo $__env->yieldContent("page_scripts"); ?>

</body>
</html>
<?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Aplikasi-Rental-Mobil\resources\views/content/layouts/app.blade.php ENDPATH**/ ?>