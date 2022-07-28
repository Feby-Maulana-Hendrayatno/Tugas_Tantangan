

<?php $__env->startSection('title', 'Peta Desa'); ?>

<?php $__env->startSection('page_content'); ?>

<style>
    #petaDesa iframe {
        width: 100%;
        height: 400px;
    }
</style>

<div id="printableArea">
    <h4 class="catg_titile" style="font-family: Oswald"><font color="#FFFFFF"><?php echo $__env->yieldContent('title'); ?></font></h4>
    <div class="post_commentbox">
        <span class="meta_date">
            <i class="fa fa-user"></i>Administrator&nbsp;
            <i class="fa fa-eye"></i>0 Kali Dibaca&nbsp;
        </span>
    </div>
    <div class="single_page_content" style="margin-bottom:10px;">
        <div class="form-group">
            <h2><i class="fa fa-map-marker"></i> Wilayah Desa</h2>
            <div id="petaDesa">
                <?php if(!empty($peta)): ?>
                <?php echo $peta->wilayah_desa; ?>

                <?php else: ?>
                <h5>Peta belum diupload</h5>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group">
            <h2><i class="fa fa-map-marker"></i> Lokasi Kantor Desa</h2>
            <div id="petaDesa">
                <?php if(!empty($peta)): ?>
                <?php echo $peta->lokasi_kantor; ?>

                <?php else: ?>
                <h5>Peta belum diupload</h5>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('pengunjung/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/pengunjung/page/peta/index.blade.php ENDPATH**/ ?>