

<?php $__env->startSection("page_title", "Laporan Data Absen"); ?>

<?php $__env->startSection("content_header"); ?>

<div class="container">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0"> Laporan Data Absen </h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">
          <a href="<?php echo e(url('/page/bph/dashboard')); ?>"> Dashboard </a>
        </li>
        <li class="breadcrumb-item active"> Laporan Data Absen </li>
      </ol>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>

<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <?php if($detail->getAnggota->gambar == NULL): ?>
            <img class="profile-user-img img-fluid img-circle" src="<?php echo e(url('/gambar/gambar_user.png')); ?>">
            <?php else: ?>
            <img class="profile-user-img img-fluid img-circle" src="<?php echo e(url('/storage/'.$detail->getAnggota->gambar)); ?>" alt="<?php echo e($detail->getAnggota->nama); ?>">
            <?php endif; ?>
          </div>

          <h3 class="profile-username text-center"><?php echo e($detail->getAnggota->nama); ?></h3>
          <p class="text-muted text-center"><?php echo e($detail->getAnggota->nim); ?></p>
          <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
              <b>Jenis Kelamin</b> <a class="float-right"> <?php echo e($detail->getAnggota->jenis_kelamin); ?> </a>
            </li>
            <li class="list-group-item">
              <b>No. Handphone</b> <a class="float-right"> <?php echo e($detail->getAnggota->no_hp); ?> </a>
            </li>
            <li class="list-group-item">
              <b>Agama</b> <a class="float-right"> <?php echo e($detail->getAnggota->agama); ?> </a>
            </li>
          </ul>
          <a href="<?php echo e(url('/page/bph/laporan/data_absen')); ?>" class="btn btn-danger btn-sm btn-block">
            <i class="fa fa-sign-in"></i> Kembali
          </a>
        </div>
      </div>

      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Detail Data</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <strong> Bagian</strong>

          <p class="text-muted">
            <?php echo e($detail->getBagian->nama_bagian); ?>

          </p>

          <hr>

          <strong> Divisi </strong>

          <p class="text-muted">
            <?php echo e($detail->getJabatan->nama_jabatan); ?>

          </p>

          <hr>

          <strong>Alamat</strong>

          <p class="text-muted">
            <?php echo e($detail->getAnggota->alamat); ?>

          </p>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
    <div class="col-md-9">
      <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th class="text-center">No.</th>
                <th class="text-center">Tanggal Absen</th>
                <th class="text-center">Status</th>
                <th>Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 0 ?>

              <?php
                $data_absen = DB::table("tb_absensi")
                      ->where("nim_anggota", $detail->getAnggota->nim)
                      ->get();
              ?>
              <?php $__currentLoopData = $data_absen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td class="text-center"><?php echo e(++$no); ?>.</td>
                  <td class="text-center"><?php echo e($data->tanggal_absen); ?></td>
                  <td class="text-center">
                    <?php if($data->status_absen == 1): ?>
                    Hadir
                    <?php elseif($data->status_absen == 2): ?>
                    Sakit
                    <?php elseif($data->status_absen == 3): ?>
                    Izin
                    <?php elseif($data->status_absen == 4): ?>
                    Alfa
                    <?php elseif($data->status_absen == 5): ?>
                    Terlambat
                    <?php endif; ?>
                  </td>
                  <td><?php echo e($data->keterangan); ?></td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("page.layouts.template_bph", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Proyek-MPM-POLINDRA\Contoh\resources\views/page/bph/laporan/detail_laporan_absen.blade.php ENDPATH**/ ?>