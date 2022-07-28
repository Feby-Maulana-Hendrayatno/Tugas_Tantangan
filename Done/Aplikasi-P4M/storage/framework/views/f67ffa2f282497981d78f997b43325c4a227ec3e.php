<?php
    use App\Models\Model\PermohonanSurat;
?>
<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo e(url('/page/admin/dashboard')); ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b><?php echo e($profil ? $profil->nama_desa : 'Anonymous'); ?></b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b><?php echo e($profil ? $profil->nama_desa : 'Anonymous'); ?></b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">
                            <?php
                                echo $jumlah = PermohonanSurat::count();
                            ?>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have <?php echo e($jumlah); ?> messages</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <?php
                                    $data_penduduk = PermohonanSurat::paginate(3);
                                ?>
                                <?php $__empty_1 = true; $__currentLoopData = $data_penduduk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penduduk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="<?php echo e(url('/gambar/gambar_user.png')); ?>" class="img-circle" alt="User Image">
                                        </div>
                                        <h4>
                                            <?php echo e($penduduk->nik); ?>

                                            <small>
                                                <i class="fa fa-clock-o"></i> <?php echo e($penduduk->created_at->diffForHumans()); ?>

                                            </small>
                                        </h4>
                                        <p><?php echo e($penduduk->kebutuhan); ?></p>
                                    </a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <li>
                                    <a href="#" style="margin-left: 10%;">
                                        <h4>
                                            <i>
                                                <b>Belum Ada Data</b>
                                            </i>
                                        </h4>
                                    </a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="<?php echo e(url('/page/admin/surat/permohonan')); ?>">
                                <i class="fa fa-arrow-circle-right"></i> Lihat Selengkapnya
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <?php if(empty(auth()->user()->gambar)): ?>
                        <img src="<?php echo e(url('gambar/gambar_user.png')); ?>" class="user-image" alt="User Image">
                        <?php else: ?>
                        <img src="<?php echo e(url('storage/'.auth()->user()->gambar)); ?>" class="user-image" alt="User Image">
                        <?php endif; ?>
                        <span class="hidden-xs"><?php echo e(auth()->user() ? auth()->user()->name : ''); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <?php if(empty(auth()->user()->gambar)): ?>
                            <img src="<?php echo e(url('gambar/gambar_user.png')); ?>" class="img-circle" alt="User Image">
                            <?php else: ?>
                            <img src="<?php echo e(url('storage/'.auth()->user()->gambar)); ?>" class="img-circle" alt="User Image">
                            <?php endif; ?>
                            <p>
                                <?php echo e(auth()->user() ? auth()->user()->name : ''); ?> - <?php echo e(auth()->user() ? auth()->user()->getHakAkses->nama_hak_akses : ''); ?>

                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="">
                                <a href="<?php echo e(url('/page/admin/logout')); ?>" class="btn btn-danger btn-flat btn-block">
                                    <i class="fa fa-sign-out"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Aplikasi-P4M\resources\views/admin/layouts/partials/navbar/nav_header.blade.php ENDPATH**/ ?>