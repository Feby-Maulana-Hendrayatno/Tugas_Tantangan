

<?php $__env->startSection("page_title", "Data Anggota"); ?>

<?php $__env->startSection("breadcrumb"); ?>

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Anggota</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="<?php echo e(url('/page/admin/dashboard')); ?>"> Dashboard </a>
                </li>
                <li class="breadcrumb-item active">Data Anggota</li>
            </ol>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_content"); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <?php if($detail_anggota->gambar == NULL): ?>
                        <img class="profile-user-img img-fluid img-circle" src="<?php echo e(url('/gambar/gambar_user.png ')); ?>" alt="User profile picture">
                        <?php else: ?>
                        <img class="profile-user-img img-fluid img-circle" src="<?php echo e(url('/storage/'.$detail_anggota->gambar)); ?>" alt="User profile picture">
                        <?php endif; ?>
                    </div>
                    <h3 class="profile-username text-center">
                        <?php echo e($detail_anggota->nama); ?>

                    </h3>
                    <p class="text-muted text-center">
                        <?php echo e($detail_anggota->getKelas->nama_kelas); ?>

                    </p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Jenis Kelamin</b> <a class="float-right"><?php echo e($detail_anggota->jenis_kelamin); ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>No. HP</b> <a class="float-right">
                                <?php echo e($detail_anggota->no_hp); ?>

                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Agama</b> <a class="float-right">
                                <?php echo e($detail_anggota->agama); ?>

                            </a>
                        </li>
                    </ul>
                    <a href="<?php echo e(url('/page/admin/anggota')); ?>" class="btn btn-primary btn-block">
                        <b><i class="fa fa-sign-in"></i> Kembali</b>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tentang | <?php echo e($detail_anggota->nama); ?> </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <strong>NIM</strong>

                    <p class="text-muted">
                        <?php echo e($detail_anggota->nim); ?>

                    </p>

                    <hr>

                    <strong>Alamat</strong>

                    <p class="text-muted"><?php echo e($detail_anggota->alamat); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("page.layouts.template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Proyek-Terbaru-MPM\Contoh\resources\views/page/admin/anggota/detail_anggota.blade.php ENDPATH**/ ?>