<div id="main">
    <div class="main">
        <div class="main_title">Berita Terbaru</div>
        <div class="main_body">
            <div class="academy-blog-posts">
                <div class="row">
                    <?php $__currentLoopData = $data_berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="single-blog-post wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-post-thumb mb-15">
                                <a href="<?php echo e(url('/berita/'.$berita->slug)); ?>">
                                    <img src="<?php echo e(url('storage/'.$berita->image)); ?>" alt="" style="width: 100%; margin: 0 auto; height: 150px">
                                </a>
                            </div>
                            <div style="height:60px">
                                <h4><a href="<?php echo e(url('/berita/'.$berita->slug)); ?>"  class="post-title" style="font-size: 18px"><?php echo e($berita->judul); ?></a></h4>
                                <?php
                                    setlocale(LC_ALL, 'id_ID', 'id', 'ID');
                                ?>
                                <div class="post-meta"><p><i class="fa fa-calendar"></i> Posting: <?php echo e($berita->created_at->formatLocalized("%d %B %Y")); ?> </p></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/pengunjung/widget/widget_berita.blade.php ENDPATH**/ ?>