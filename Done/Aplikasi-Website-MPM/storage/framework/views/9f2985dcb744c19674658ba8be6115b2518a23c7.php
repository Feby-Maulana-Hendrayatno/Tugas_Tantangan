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
                   <a class="nav-link scrollto" href="<?php echo e(url('/aspirasi')); ?>">
                       Aspirasi
                   </a> 
                </li>
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
                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li>
                    <a class="getstarted" href="<?php echo e(url('/login')); ?>">
                    Login
                    </a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header>
<?php /**PATH C:\Users\USER\Desktop\Proyek-MPM-POLINDRA\Contoh\resources\views/page/layouts/partials/navbar/v_nav_header_user.blade.php ENDPATH**/ ?>