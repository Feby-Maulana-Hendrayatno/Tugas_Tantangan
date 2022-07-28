<?php
use App\Models\Model\Artikel;
$artikel = Artikel::latest()->paginate(6);
?>

<style type="text/css">
    .slick_slider img {
        width: 100%;
    }
    .slick_slider, .cycle-slideshow {
        max-height: 350px;
        border: 5px solid #e5e5e500;
        display: block;
        position: relative;
        /*margin: 0px auto;*/
        overflow: hidden;
    }
    .textgambar{
        position: absolute;
        left: 20px;
        top: 280px;
        color: black;
        font-weight: bold;
        font-family: Oswald;

        background-color: #ffffff;
        border: 1px solid black;
        border-radius: 3px;
        padding: 5px;
        opacity: 0.6;
        filter: alpha(opacity=60); /* For IE8 and earlier */
    }
</style>
<div class="slick_slider" style="margin-bottom:5px;">
    <?php $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="single_iteam" data-artikel="168"  onclick="location.href='<?php echo e(url('artikel/'.$a->slug)); ?>'" >
        <img class="tlClogo" src="<?php echo e(url('/storage/'.$a->image)); ?>">
        <div class="textgambar hidden-xs"><?php echo e($a->judul); ?> </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Aplikasi-P4M\resources\views/pengunjung/layouts/sliders.blade.php ENDPATH**/ ?>