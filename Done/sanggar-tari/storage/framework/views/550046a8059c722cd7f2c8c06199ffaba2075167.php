<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/')); ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/pengunjung/kategori/')); ?>">Kategori</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/pengunjung/form/store')); ?>">Form</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                
                <?php if(empty(auth()->user()->name)): ?>
                
                <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/admin/login')); ?>"> Login </a></li>
                <?php else: ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/pengunjung/full-calender/')); ?>">Events</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/admin/logout')); ?>"> Logout </a></li>
                <?php endif; ?>
                
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH D:\Tugas_Pa_Anis\DONE\sanggar-tari\resources\views/layouts/partials_pengunjung/navbar/navbar_header.blade.php ENDPATH**/ ?>