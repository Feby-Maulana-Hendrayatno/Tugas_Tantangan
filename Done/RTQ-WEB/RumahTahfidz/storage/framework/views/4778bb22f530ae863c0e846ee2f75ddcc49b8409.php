<nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
    <a href="index.html" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
        <h2 class="mb-2 text-white">
            <?php
                use App\Models\Profil;

                $data = Profil::select("singkatan")->first();
            ?>
            <?php if(empty($data)): ?>

            <?php else: ?>
                <?php echo e($data->singkatan); ?>

            <?php endif; ?>
        </h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="<?php echo e(url('/home')); ?>" class="nav-item nav-link <?php echo e(Request::segment(1)=="home" ? "active" : ""); ?> ">Home</a>
            <a href="<?php echo e(url('/tentang_kami')); ?>" class="nav-item nav-link <?php echo e(Request::segment(1)=="tentang_kami" ? "active" : ""); ?> ">Tentang Kami</a>
            <a href="service.html" class="nav-item nav-link">Jasa</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="price.html" class="dropdown-item">Pricing Plan</a>
                    <a href="feature.html" class="dropdown-item">Features</a>
                    <a href="quote.html" class="dropdown-item">Free Quote</a>
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="<?php echo e(url('/kontak')); ?>" class="nav-item nav-link <?php echo e(Request::segment(1)=="kontak" ? "active" : ""); ?>">Kontak</a>

            <?php if(Auth::user()): ?>
            <a href="<?php echo e(url('/app/admin/home')); ?>" class="nav-item nav-link">
                Dashboard
            </a>
            <?php endif; ?>
        </div>
        <h4 class="m-0 pe-lg-5 d-none d-lg-block">
            <i class="fa fa-headphones text-primary me-3"></i>
            <?php
                $data = Profil::select("no_hp")->first();
            ?>
            <?php if(empty($data->no_hp)): ?>
                12345
            <?php else: ?>
                <?php echo e($data->no_hp); ?>

            <?php endif; ?>
        </h4>
    </div>
</nav>
<?php /**PATH E:\FILE KULIAH\SEMESTER 4\TUGAS KULIAH TAHUN AJARAN 2021 - 2022\PROYEK 3\RTQ-WEB\RumahTahfidz\resources\views/app/landing/layouts/partials/navbar/v_navbar.blade.php ENDPATH**/ ?>