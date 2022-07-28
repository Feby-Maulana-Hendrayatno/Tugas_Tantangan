<?php
    use App\Models\Model\Artikel;
    $teks = Artikel::paginate(6);
?>

<div style="margin-top:10px;">
    <marquee onmouseover="this.stop()" onmouseout="this.start()">
        <span class="teks" style="font-family: Oswald; padding-right: 50px;">
            <?php $__currentLoopData = $teks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(url('artikel/'.$t->slug)); ?>" rel="noopener noreferrer" title="Baca Selengkapnya"><?php echo $t->judul; ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </span>
    </marquee>
</div>
<?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/pengunjung/layouts/teks-berjalan.blade.php ENDPATH**/ ?>