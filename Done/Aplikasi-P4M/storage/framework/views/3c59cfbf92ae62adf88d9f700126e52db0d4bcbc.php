<?php $__env->startSection('title', 'Visi Misi Desa'); ?>

<?php $__env->startSection('page_content'); ?>

<div id="printableArea">
    <h4 class="catg_titile" style="font-family: Oswald"><font color="#FFFFFF"><?php echo $__env->yieldContent('title'); ?></font></h4>
    <div class="post_commentbox">
        <span class="meta_date">
            <i class="fa fa-user"></i>Administrator&nbsp;
            <i class="fa fa-eye"></i>0 Kali Dibaca&nbsp;
        </span>
    </div>
    <div class="single_page_content" style="margin-bottom:10px;">

        <?php if($data_visimisi->count()): ?>
        <?php $__currentLoopData = $data_visimisi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $vm->visi; ?>

        <br>
        <?php echo $vm->misi; ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <strong>Maaf,</strong> Data Visi Misi Belum Tersedia
        </div>
        <?php endif; ?>

    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('pengunjung/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/pengunjung/page/pemerintahan_desa/visi_misi.blade.php ENDPATH**/ ?>