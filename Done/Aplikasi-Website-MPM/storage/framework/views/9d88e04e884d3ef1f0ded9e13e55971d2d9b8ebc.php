

<?php $__env->startSection("title", "Dashboard"); ?>

<?php $__env->startSection("page_scripts"); ?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php if(session("sukses")): ?>
<script type="text/javascript">
    swal({
        title: "Berhasil",
        text: "<?php echo e(session('sukses')); ?>",
        icon: "success",
        button: "OK",
    });
</script>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_content"); ?>

<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1>SISTEM MPM POLINDRA</h1>
                <h2>Aplikasi berbasis Web yang ditunjukkan untuk MPM POLINDRA.</h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#tentang_kami" class="btn-get-started scrollto">Selengkapnya</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="<?php echo e(url('/template_user/template')); ?>/assets/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">
    <!-- ======= About Us Section ======= -->
    <section id="tentang_kami" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Tentang Kami</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <a href="<?php echo e(url('/tentang_kami')); ?>" class="btn-learn-more">
                        Selengkapnya
                    </a>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content">
                        <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <li>
                                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                    <p>
                                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("<?php echo e(url('/template_user/template')); ?>/assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Contact Section ======= -->
    <section id="kontak" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Kontak</h2>
                <p>
                    Apabila ada yang ingin ditanyakan seputar <b>MPM POLINDRA</b>. Bisa menghubungi kontak di bawah ini.
                </p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Lokasi:</h4>
                            <p>
                                Jln. Lohbener lama No. 08 Kec. Lohbener Kab. Indramayu 45252
                            </p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>mpmpolindra@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Telepon:</h4>
                            <p>0853-1463-0396</p>
                        </div>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="<?php echo e(url('/tambah')); ?>" method="post" role="form" class="php-email-form">
                        <?php echo e(csrf_field()); ?>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="nama"> Nama </label>
                                <input type="text" name="nama" class="form-control" id="nama" required placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email"> Emai </label>
                                <input type="email" class="form-control" name="email" id="email" required placeholder="Masukkan Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="judul"> Judul </label>
                            <input type="text" class="form-control" name="judul" id="judul" required placeholder="Masukkan Judul">
                        </div>
                        <div class="form-group">
                            <label for="pesan"> Pesan </label>
                            <textarea class="form-control" name="pesan" rows="10" required placeholder="Masukkan Pesan"></textarea>
                        </div>
                        <div class="text-center"><button type="submit">
                            Kirim Pesan
                        </button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make("page.layouts.template_user", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Proyek-MPM-POLINDRA\Contoh\resources\views/page/user/dashboard.blade.php ENDPATH**/ ?>