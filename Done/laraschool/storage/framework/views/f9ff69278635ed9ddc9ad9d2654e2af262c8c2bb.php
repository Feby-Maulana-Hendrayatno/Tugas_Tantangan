<div class="clever-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <!-- Menu -->
        <nav class="classy-navbar justify-content-between" id="cleverNav">

            <!-- Logo -->
            <a class="nav-brand" href="/"><img src="<?php echo e(asset('img/icons')); ?>/laravel.jpg" width="50" alt=""> LARASCHOOL</a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">

                <!-- Close Button -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>

                <!-- Nav Start -->
                <div class="classynav">
                    <ul>
                        <li><a href="/" class="<?php echo e(Request::is('/') || Request::is('home') ? 'text-primary' : ''); ?>">Home</a></li>
                        <li><a href="<?php echo e(route('about')); ?>" class="<?php echo e(Request::is('about') ? 'text-primary' : ''); ?>">Tentang</a></li>
                        <li><a href="<?php echo e(route('contact')); ?>" class="<?php echo e(Request::is('contact') ? 'text-primary' : ''); ?>">Kontak</a></li>
                        <li><a href="<?php echo e(route('artikel')); ?>" class="<?php echo e(Request::segment(1) == 'artikel' ? 'text-primary' : ''); ?>">Artikel</a></li>
                        <li><a href="<?php echo e(route('pengumuman')); ?>" class="<?php echo e(Request::segment(1) == 'pengumuman' ? 'text-primary' : ''); ?>">Pengumuman</a></li>
                        <li><a href="" class="<?php echo e(Request::is('agenda') ? 'text-primary' : ''); ?>">Agenda</a></li>
                    </ul>

                    <!-- Search Button -->
                    <div class="search-area">
                        <form action="<?php echo e(route('artikel.search')); ?>" method="GET">
                            <input name="keyword" id="search" placeholder="Search">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>

                    <?php if(auth()->guard()->check()): ?>
                    <div class="login-state d-flex align-items-center">
                        <div class="user-name mr-30">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(auth()->user()->name); ?></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                    <a class="dropdown-item" href="<?php echo e(route('admin.index')); ?>">Dashboard</a>
                                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php endif; ?>

                </div>
                <!-- Nav End -->
            </div>
        </nav>
    </div>
</div><?php /**PATH D:\Tugas_Pa_Anis\laravel8\laraschool\resources\views/layouts/frontend/navbar.blade.php ENDPATH**/ ?>