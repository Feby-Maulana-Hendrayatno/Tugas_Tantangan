

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
    <div class="col-md-1">
        <a href="/admin/form_tambah_pengurus" class="btn btn-success">
            Tambah
        </a>
    </div>
</div>

<br>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables User</h6>
    </div>
    <div class="card-body">
        <form action="/admin/tambah" method="POST" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for=""> Nama </label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
            </div>
            <div class="form-group">
                <label for=""> Email </label>
                <input type="text" class="form-control" id="email" placeholder="Email" name="email">
            </div>
            <div class="form-group">
                <label for=""> Password </label>
                <input type="text" class="form-control" placeholder="Masukkan Password" id="password" name="password">
            </div>
            <div class="form-group">
                <label for=""> Role : </label>
                <select name="role" id="role">
                    <option value="">Belum Ada Data Role</option>
                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($r->id); ?>"> <?php echo e($r->role_name); ?> </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for=""> Jabatan : </label>
                <select name="jabatan" id="jabatan">
                    <option value="">Belum Ada Data Jabatan</option>
                    <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($j->id); ?>"> <?php echo e($j->nama_jabatan); ?> </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for=""> Prodi : </label>
                <select name="prodi" id="prodi">
                    <option value="">Belum Ada Data Prodi</option>
                    <?php $__currentLoopData = $prodi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($p->id); ?>"> <?php echo e($p->nama_prodi); ?> </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for=""> Divisi Sebura : </label>
                <select name="divisi" id="divisi">
                    <option value="">Belum Ada Data Prodi</option>
                    <?php $__currentLoopData = $divisi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($d->id); ?>"> <?php echo e($d->nama_divisi); ?> </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for=""> Tahun Kepengurusan </label>
                <input type="text" class="form-control" id="tahun_kepengurusan" placeholder="Masukkan Tahun Angkatan" name="tahun_kepengurusan">
            </div>
            <div class="form-group">
                <label for="formFileMultiple" class="form-label">Gambar</label>
                <input class="form-control" type="file" id="gambar" name="gambar">
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

<?php echo $__env->make('layouts.mainadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\sebura\resources\views/admin/pengurus/form_tambah_pengurus.blade.php ENDPATH**/ ?>