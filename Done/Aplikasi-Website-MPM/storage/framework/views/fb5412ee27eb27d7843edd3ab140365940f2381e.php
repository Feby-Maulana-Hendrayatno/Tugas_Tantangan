<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
      <i class="fa fa-home"></i>
      MPM POLINDRA
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('/')); ?>">
            <i class="fa fa-dashboard"></i> Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('/tentang_kami')); ?>">
            <i class="fa fa-edit"></i> Tentang Kami
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('/blog')); ?>">
            <i class="fa fa-pencil"></i> Blog
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('/kontak')); ?>">
            <i class="fa fa-phone"></i> Kontak 
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('/aspirasi')); ?>">
            <i class="fa fa-edit"></i> Aspirasi
          </a>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-primary btn-sm mt-1" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-sign-in"></i> Login
          </button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          <i class="fa fa-sign-in"></i> Login
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="<?php echo e(url('/cek_login')); ?>">
        <?php echo e(csrf_field()); ?>

        <div class="modal-body">
          <div class="form-group">
            <label for="username"> Email </label>
            <input type="text" class="form-control" name="email" placeholder="Masukkan Email">
          </div>
          <div class="form-group">
            <label for="password"> Password </label>
            <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
          </div>
        </div>
        <div class="modal-footer">
          <a href="<?php echo e(url('/register')); ?>" class="btn btn-secondary">
            <i class="fa fa-refresh"></i> Tidak Punya Akun ?
          </a>
          <button type="submit" class="btn btn-primary">
            <i class="fa fa-sign-in"></i> Login
          </button>
        </div>
      </form>
    </div>
  </div>
</div><?php /**PATH C:\Users\USER\Desktop\Proyek-MPM-POLINDRA\Contoh\resources\views/page/user/layouts/partials/navbar/v_nav.blade.php ENDPATH**/ ?>