<?php
    use App\Models\Model\Alamat;
    $alamat = Alamat::paginate(1)
?>
<div id="widget">
    <div class="widget">
        <div class="widget_title">Kontak</div>
        <div class="widget_body">
            <?php $__currentLoopData = $alamat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <b>Alamat :</b>
            <p><?php echo $a->alamat; ?></p>
            <b><i class="fa fa-phone"></i> Telepon :</b>
            <p><?php echo e($a->no_telepon); ?></p>
            <b><i class="fa fa-desktop"></i> Website :</b>
            <p><?php echo e($a->website); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/pengunjung/widget/widget_kontak.blade.php ENDPATH**/ ?>