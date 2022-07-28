
<?php $__env->startSection('content'); ?>
<!-- ##### Blog Area Start ##### -->
<section class="blog-area section-padding-100-0 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>List Artikel</h3>
                </div>
            </div>
        </div>

        <div class="row">
            
            <?php $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <?php echo e($art->judul); ?>


                            <span class="badge badge-danger float-right">by : <?php echo e($art->user->name); ?></span>
                        </div>
                        <div class="card-body">
                            <img src="<?php echo e(asset('uploads/img/artikel/'.$art->thumbnail)); ?>" width="100%" style="height: 300px; object-fit: cover; object-position: center;">

                            <div class="card-text mt-3">
                                <?php echo Str::limit($art->deskripsi); ?>

                            </div>

                            <a href="<?php echo e(route('artikel.show',$art->slug)); ?>" class="btn btn-primary btn-sm">Selengkapnya</a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg pagination pagination-center justify-content-center">
                <?php echo e($artikel->appends(Request::all())->links()); ?>

            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.app',[
    'title' => 'List Artikel',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\laraschool\resources\views/artikel/index.blade.php ENDPATH**/ ?>