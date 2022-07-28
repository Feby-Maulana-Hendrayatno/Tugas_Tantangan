

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
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-edit"></i> Absensi Tanggal : <b><?php echo date("d - m - Y") ?></b>
          </h3>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center">No.</th>
                <th class="text-center">NIM</th>
                <th>Nama</th>
                <th class="text-center">Hadir</th>
                <th class="text-center">Sakit</th>
                <th class="text-center">Izin</th>
                <th class="text-center">Alfa</th>
                <th class="text-center">Terlambat</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 0 ?>
              <?php $__currentLoopData = $data_divisi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $absen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td class="text-center"><?php echo e(++$no); ?>.</td>
                <td class="text-center"><?php echo e($absen->getAnggota->nim); ?></td>
                <td><?php echo e($absen->getAnggota->nama); ?></td>
                <td class="text-center">
                  <?php
                    $j_hadir = DB::table("tb_absensi")
                          ->where("nim_anggota", $absen->getAnggota->nim)
                          ->where("status_absen", 1)
                          ->count();

                    echo $j_hadir;
                  ?>
                </td>
                <td class="text-center">
                  <?php
                    $j_sakit = DB::table("tb_absensi")
                          ->where("nim_anggota", $absen->getAnggota->nim)
                          ->where("status_absen", 2)
                          ->count();

                    echo $j_sakit;
                  ?>
                </td>
                <td class="text-center">
                  <?php
                    $j_izin = DB::table("tb_absensi")
                          ->where("nim_anggota", $absen->getAnggota->nim)
                          ->where("status_absen", 3)
                          ->count();

                    echo $j_izin;
                  ?>
                </td>
                <td class="text-center">
                  <?php
                    $j_alfa = DB::table("tb_absensi")
                          ->where("nim_anggota", $absen->getAnggota->nim)
                          ->where("status_absen", 4)
                          ->count();

                    echo $j_alfa;
                  ?>
                </td>
                <td class="text-center">
                  <?php
                    $j_terlambat = DB::table("tb_absensi")
                          ->where("nim_anggota", $absen->getAnggota->nim)
                          ->where("status_absen", 5)
                          ->count();

                    echo $j_terlambat;
                  ?>
                </td>
                <td class="text-center">
                  <a href="<?php echo e(url('/page/bph/laporan/data_absen')); ?>/<?php echo e($absen->id_divisi); ?>/detail" class="btn btn-success btn-sm">
                    <i class="fa fa-search"></i> Detail
                  </a>
                </td>
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
<?php echo $__env->make("page.layouts.template_bph", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Proyek-MPM-POLINDRA\Contoh\resources\views/page/bph/laporan/data_absen.blade.php ENDPATH**/ ?>