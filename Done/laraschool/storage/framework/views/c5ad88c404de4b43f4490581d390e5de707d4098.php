
<?php $__env->startSection('content'); ?>

<?php if($pengumuman->count() > 0): ?>
<section class="upcoming-events section-padding-100-0 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>List Pengumuman</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <?php $__currentLoopData = $pengumuman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
                    <!-- Events Thumb -->
                    <div class="events-thumb">
                        <img src="<?php echo e(asset('img/bg')); ?>/pengumuman.png" alt="">
                        <h6 class="event-date"><?php echo e($pn->tgl); ?> | BY : <?php echo e($pn->user->name); ?></h6>
                        <h4 class="event-title"><?php echo e($pn->judul); ?></h4>
                    </div>
                    <div>
                        <a href="<?php echo e(route('pengumuman.show',$pn->slug)); ?>" class="btn btn-primary col-lg">Detail</a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="pagination justify-content-center">
                <?php echo e($pengumuman->links()); ?>

            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.app',[
    'title' => 'List Pengumuman',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\laraschool\resources\views/pengumuman/index.blade.php ENDPATH**/ ?>