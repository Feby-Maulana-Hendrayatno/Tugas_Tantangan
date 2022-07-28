

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
        <h1 class="h3 mb-2 text-gray-800">Data Acara</h1>
    </div>
    <div class="col-md-1">
        <a href="/admin/tambah_acara" class="btn btn-success">
            Tambah
        </a>
    </div>
</div>

<br>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Acara</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Acara</th>
                        <th>Tanggal Acara</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tfoot>
                </tfoot>

                <tbody>
                    <?php $no = 0 ?>
                    <?php $__currentLoopData = $data_acara; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acara): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e(++$no); ?></td>
                        <td><?php echo e($acara->nama_acara); ?></td>
                        <td><?php echo e($acara->tanggal_acara); ?></td>
                        <td class="d-flex">
                            <form method="POST" action="<?php echo e(url('deleteacara')); ?>/<?php echo e($acara->id); ?>">
                                <a href="<?php echo e(url('/admin/editacara')); ?>/<?php echo e($acara->id); ?>" class="btn btn-warning btn-sm">
                                    Edit
                                </a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button onclick="return confirm('Yakin ? Ingin Menghapus Data Ini ?')" type="submit"
                                    class=" btn-danger btn-sm">
                                    Hapus
                                </button>
                                <a href="/admin/acara/<?php echo e($acara->id); ?>/absensi" class="btn btn-info btn-sm">Lihat
                                    Absensi</a>
                                <a href="/admin/acara/<?php echo e($acara->id); ?>/panitia" class="btn btn-info btn-sm">Lihat
                                    Panitia Acara</a>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\DONE\sebura\resources\views//admin/acara/acara.blade.php ENDPATH**/ ?>