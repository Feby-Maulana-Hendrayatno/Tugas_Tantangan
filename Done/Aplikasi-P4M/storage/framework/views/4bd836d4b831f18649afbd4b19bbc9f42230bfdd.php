<footer id="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single_footer_top wow fadeInRight">
                        <h2><?php echo e($profil ? 'Desa '.$profil->nama_desa : 'Anonymous'); ?></h2>
                        <p><?php echo e($profil ? ''.$profil->nama_desa : 'Anonymous'); ?>, <?php echo e($profil ? 'Kec. '.$profil->kecamatan : 'Anonymous'); ?>, <?php echo e($profil ? 'Kab. '.$profil->kabupaten : 'Anonymous'); ?>, <?php echo e($profil ? 'Prov. '.$profil->provinsi : 'Anonymous'); ?>, <?php echo e($profil ? ''.$profil->negara : 'Anonymous'); ?>.</p>
                        <p><br /></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Aplikasi-P4M\resources\views/pengunjung/layouts/foot.blade.php ENDPATH**/ ?>