
<?php $__env->startSection('content'); ?>

<div class="">    
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <a href="<?php echo e(route('admin.kategori-artikel.index')); ?>" class="btn btn-success btn-sm">Kembali</a>
            </h4>
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('admin.kategori-artikel.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="nama_kategori">Nama kategori</label>
                <input required="" type="" name="nama_kategori" placeholder="" class="form-control"> 
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app',[
	'title' => 'Tambah Kategori Artikel',
	'contentTitle' => 'Tambah Kategori Artikel'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\laraschool\resources\views/admin/kategori-artikel/create.blade.php ENDPATH**/ ?>