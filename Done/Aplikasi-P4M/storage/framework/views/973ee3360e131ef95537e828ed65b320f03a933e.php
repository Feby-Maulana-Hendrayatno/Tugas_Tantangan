<?php
    use App\Models\Model\Artikel;
    use Carbon\Carbon;
    $artikel = Artikel::latest()->paginate(6);
?>
<div class="single_bottom_rightbar">
    <h2>
        <i class="fa fa-archive"></i>
        Artikel Terbaru
    </h2>
    <div class="tab-content" style="padding-top: 0;">
        <div id="" class="active" role="">
            <?php if($artikel->count()): ?>
            <?php $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <table id="ul-menu">
                <tr>
                    <td colspan="2">
                        <span class="meta_date"><?php echo Carbon::createFromFormat('Y-m-d H:i:s', $a->created_at)->isoFormat('D MMMM Y'); ?> | <i class="fa fa-eye"></i> <?php echo e($a->getCount->count()); ?> Kali</span>
                    </td>
                </tr>
                <tr>
                    <td valign="top" align="justify">
                        <a href="<?php echo e(url('')); ?>/artikel/<?php echo e($a->slug); ?>">
                            <img width="25%" style="float:left; margin:0 8px 4px 0;" class="img-fluid img-thumbnail" src="<?php echo e(url('storage/'.$a->image)); ?>" onerror="this.onerror=null; this.src='<?php echo e(url('/frontend/img/no-images.png')); ?>'"/>
                            <small><font color="green"><?php echo e($a->judul); ?></font></small>
                        </a>
                    </td>
                </tr>
            </table>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <h4>
                Belum Ada Komentar
            </h4>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/pengunjung/widget/widget_berita_terbaru.blade.php ENDPATH**/ ?>