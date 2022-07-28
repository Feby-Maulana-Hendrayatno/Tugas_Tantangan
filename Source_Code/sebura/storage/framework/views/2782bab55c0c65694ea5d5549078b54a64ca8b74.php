

<?php $__env->startSection('sidebar'); ?>
<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('topbar'); ?>
<?php echo $__env->make('layouts.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php if(session('success')): ?>
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success">
            Berhasil
        </div>
    </div>
</div>
<?php endif; ?>
<!-- Page Heading -->
<div class="row">
    <div class="col-md-11">
        <h1 class="h3 mb-2 text-gray-800">Data Divisi</h1>
    </div>
</div>

<br>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Divisi</h6>
    </div>
    <div class="card-body">
        <form action="/admin/tambahdiv" method="POST">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for=""> Nama Divisi</label>
                <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Tambah
                </button>
            </div>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\sebura\resources\views/admin/divisi/tambahdivisi.blade.php ENDPATH**/ ?>