

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
        <h1 class="h3 mb-2 text-gray-800">Data User</h1>
    </div>
</div>

<br>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables User</h6>
    </div>
    <div class="card-body">
        
        <form action="/admin/update" method="POST" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="id" value="<?php echo e($data->id); ?>"> <br />
            <div class="form-group">
                <label for=""> Nama </label>
                <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama"
                    value="<?php echo e($data->nama); ?>">
            </div>
            <div class="form-group">
                <label for=""> Jabatan : </label>
                <select name="jabatan" id="jabatan">
                    <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($j->id); ?>" <?php echo e($data->id == $j->id ? 'selected':''); ?>> <?php echo e($j->nama_jabatan); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for=""> Prodi : </label>
                <select name="prodi" id="prodi">
                    <?php $__currentLoopData = $prodi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($p->id); ?>" <?php echo e($data->id == $p->id ? 'selected':''); ?>> <?php echo e($p->nama_prodi); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for=""> Divisi Sebura : </label>
                <select name="divisi" id="divisi">
                    <?php $__currentLoopData = $divisi_sebura; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($d->id); ?>" <?php echo e($data->id == $d->id ? 'selected':''); ?>> <?php echo e($d->nama_divisi); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for=""> Tahun Kepengurusan </label>
                <input type="text" class="form-control" placeholder="Masukkan Tahun Angkatan" name="tahun_kepengurusan"
                    value="<?php echo e($data->tahun_kepengurusan); ?>">
            </div>
            
            <div class="form-group">
                <input type="hidden" name="gambar_dulu" value="<?php echo e($data->gambar); ?>"> <br />
                <label for="formFileMultiple" class="form-label">Gambar</label>
                <div class="row">
                    <div class="col">
                        <input class="form-control" type="file" id="formFileMultiple" name="gambar">
                    </div>
                    <div class="col">
                        <img src="/storage/data_pengurus/<?php echo $data->gambar; ?>" alt="<?php echo $data->nama; ?>"
                            class="img-responsive" width="75" title="<?php echo $data->nama; ?>">
                        <?php echo e($data->gambar); ?>

                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Update Pengurus
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

<?php echo $__env->make('layouts.mainadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\sebura\resources\views/admin/pengurus/edit_pengurus.blade.php ENDPATH**/ ?>