<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(url('/layouts')); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo e(url('/layouts')); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(url('/layouts')); ?>/dist/css/adminlte.min.css">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="hold-transition register-page">

  <?php if(session("gagal")): ?>
  <script type="text/javascript">
    swal({
      title: "Gagal",
      text: "<?php echo e(session('gagal')); ?>",
      icon: "error",
      button: "OK",
    });
  </script>
  <?php elseif(session("sukses")): ?>
  <script type="text/javascript">
    swal({
      title: "Berhasil",
      text: "<?php echo e(session('sukses')); ?>",
      icon: "success",
      button: "OK",
    });
  </script>
  <?php endif; ?>

  <div class="register-box">
    <div class="register-logo">
      <a href="<?php echo e(url('/register')); ?>">
        Register Akun
      </a>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Silahkan Buat Akun Terlebih Dahulu</p>
        <form action="<?php echo e(url('/cek_register')); ?>" method="POST">
          <?php echo e(csrf_field()); ?>

          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Full name" name="nama">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Retype password" name="retype_password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">
                Register
              </button>
              
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="<?php echo e(url('/layouts')); ?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo e(url('/layouts')); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo e(url('/layouts')); ?>/dist/js/adminlte.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\USER\Desktop\Proyek-MPM-POLINDRA\Contoh\resources\views/page/user/register.blade.php ENDPATH**/ ?>