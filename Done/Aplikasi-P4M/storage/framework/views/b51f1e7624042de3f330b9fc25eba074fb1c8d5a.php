<?php
use Carbon\Carbon;
use App\Models\Model\Komentar;
$komentar = Komentar::latest()->paginate(6);
?>

<div class="single_bottom_rightbar">
    <h2><i class="fa fa-comments"></i> Komentar Terbaru</h2>
    <div id="mostPopular2" class="tab-pane fade in active" role="tabpanel">
        <ul id="ul-menu">
            <div class="box-body">
                <?php if($komentar->count()): ?>
                <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3" direction="up" width="100%" height="250" align="center" behavior=”alternate”>
                    <ul class="sidebar-latest" id="li-komentar">
                        <?php $__currentLoopData = $komentar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <table class="table table-bordered table-striped dataTable table-hover">
                                <thead class="bg-gray disabled color-palette">
                                    <tr>
                                        <th><a href="/artikel/<?php echo e($k->getArtikel->slug); ?>" style="color: black"><i class="fa fa-comment"></i> Artikel <?php echo e($k->getArtikel->judul); ?></a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <font color='green'><small><?php echo e(Carbon::createFromFormat('Y-m-d H:i:s', $k->created_at)->isoFormat('D MMMM Y H:m:s')); ?></small></font><br/><?php echo e(Str::limit($k->pesan, 100, '...')); ?><a href="/artikel/<?php echo e($k->getArtikel->slug); ?>">selengkapnya</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </marquee>
                <?php else: ?>
                <h4>
                    Belum Ada Komentar
                </h4>
                <?php endif; ?>
            </div>
        </ul>
    </div>
</div>
<?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/pengunjung/widget/widget_komentar_terbaru.blade.php ENDPATH**/ ?>