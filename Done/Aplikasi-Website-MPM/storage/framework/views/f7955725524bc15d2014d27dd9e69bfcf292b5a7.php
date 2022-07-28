<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="#dashboard">MPM POLINDRA</a></h1>
        
        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a class="nav-link scrollto" href="<?php echo e(url('/')); ?>"> Dashboard </a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="<?php echo e(url('/tentang_kami')); ?>">Tentang Kami</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="<?php echo e(url('/galeri')); ?>">
                        Galeri
                    </a>
                </li>
                <li>
                   <a href="<?php echo e(url('/blog')); ?>" class="nav-link">
                       Blog
                   </a> 
                </li>
                <?php if(empty(auth()->user()->nama)): ?>
                <li>
                    <a class="getstarted" href="<?php echo e(url('/login')); ?>">
                        Login
                    </a>
                </li>
                <?php elseif(auth()->user()->nama): ?>
                <li class="dropdown">
                    <a href="#">
                        <span>Aspirasi</span> 
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo e(url('/form_aspirasi')); ?>"> Form </a>
                        </li>
                        <li>
                            <a href="#"> Data Aspirasi </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="getstarted" href="<?php echo e(url('/logout')); ?>">
                        Logout
                    </a>
                </li>
                <?php endif; ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header>
<?php /**PATH C:\Users\ASUS\Desktop\Proyek-Terbaru-MPM\Contoh\resources\views/page/layouts/partials/navbar/v_nav_header_user.blade.php ENDPATH**/ ?>