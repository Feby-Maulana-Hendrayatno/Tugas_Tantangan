

<?php $__env->startSection('title', 'Kontak'); ?>

<?php $__env->startSection('page_content'); ?>

<div class="row mt-5">
    <div class="col-md-6">
        <?php echo $__env->make('pengunjung/widget/widget_kontak', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="col-md-6">
        <div id="main">
            <div class="main">
                <div class="main_title">
                    Kontak
                </div>
                <div class="main_body">
                    <div class="row mt-3">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <form action="<?php echo e(url('/kirim_pesan')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda *" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda *" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor Telepon Anda *" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="pesan" id="pesan" rows="8" placeholder="Pesan *" required></textarea>
                                </div>
                                <button type="submit" value="submit" name="submit" class="btn btn-primary">
                                    KIRIM
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('pengunjung/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//pengunjung/page/kontak.blade.php ENDPATH**/ ?>