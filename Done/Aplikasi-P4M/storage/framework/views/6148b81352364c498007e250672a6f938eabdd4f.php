<header id="header">

    <div class="row" style="margin-bottom:3px; margin-top:5px;">
        <div class="col-lg-12 col-md-12">
            <div class="header_top">
                <div class="header_top_left"style="margin-bottom:0px;">
                    <ul class="top_nav">
                        <li>
                            <table>
                                <tr>
                                    <td class="hidden-xs">
                                        <img class="" src="<?php echo e($profil ? url('/storage/'.$profil->gambar) : url('/frontend/img/logo-desa.png')); ?>" width="30" valign="top" alt="Arahan Lor"/>
                                    </td>
                                    <td>
                                        <a href="">
                                            <font size="4"><?php echo e($profil ? 'Desa '.$profil->nama_desa : 'Anonymous'); ?></font><br />
                                            <font size="2"><?php echo e($profil ? 'Kec. '.$profil->kecamatan : 'Anonymous'); ?> <?php echo e($profil ? 'Kab. '.$profil->kabupaten : 'Anonymous'); ?> <?php echo e($profil ? 'Prov. '.$profil->provinsi : 'Anonymous'); ?></font>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </li>
                    </ul>
                </div>
                <div class="navbar-right" style="margin-right: 0px; margin-top: 15px; margin-bottom: 3px;">
                    <form method="post" action="<?php echo e(url('/artikel/cari')); ?>" class="form-inline">
                        <?php echo csrf_field(); ?>
                        <table align="center">
                            <tr>
                                <td>
                                    <?php if(Request::is('artikel')): ?>
                                    <input type="text" name="cari" maxlength="50" class="form-control" value="" placeholder="Cari Artikel" onkeyup="search()" id="cari">
                                    <?php else: ?>
                                    <input type="text" name="cari" maxlength="50" class="form-control" value="" placeholder="Cari Artikel" id="cari">
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-primary">Cari</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Aplikasi-P4M\resources\views/pengunjung/layouts/head.blade.php ENDPATH**/ ?>