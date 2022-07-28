

<?php $__env->startSection("page_title", "Data KAS"); ?>

<?php $__env->startSection("content_header"); ?>

<div class="container">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0"> Data KAS </h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">
          <a href="<?php echo e(url('/page/bph/dashboard')); ?>"> Dashboard </a>
        </li>
        <li class="breadcrumb-item active"> Data KAS Sekarang </li>
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
            <i class="fa fa-edit"></i> KAS Tanggal : <b><?php echo date("d - m - Y") ?></b>
          </h3>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center">No.</th>
                <th class="text-center">NIM</th>
                <th>Nama</th>
                <th class="text-center">Bayar</th>
                <th>Keterangan</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 0 ?>
              <?php $__currentLoopData = $data_divisi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $divisi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <?php
                $sekarang = date("Y-m-d");
                $data_kas = DB::table("tb_kas")
                      ->where("nim_anggota", $divisi->getAnggota->nim)
                      ->where("tanggal", $sekarang)
                      ->first();
              ?>
              <tr>
                <td class="text-center"><?php echo e(++$no); ?>.</td>
                <td class="text-center"><?php echo e($divisi->getAnggota->nim); ?></td>
                <td><?php echo e($divisi->getAnggota->nama); ?></td>
                <form method="POST" action="<?php echo e(url('/page/bph/kas/simpan_data_kas')); ?>">
                  <?php echo e(csrf_field()); ?>

                  <input type="hidden" name="nim_anggota" value="<?php echo e($divisi->getAnggota->nim); ?>">
                  <td class="text-center">
                    <input type="number" class="form-control" name="bayar" min="1000" placeholder="0">
                  </td>
                  <td>
                    <input type="text" class="form-control" name="keterangan" placeholder="Masukkan Keterangan">
                  </td>
                  <td class="text-center">
                    <?php if($data_kas): ?>
                    <button disabled class="btn btn-success btn-sm">
                      <i class="fa fa-plus"></i>
                    </button>
                    <?php else: ?>
                    <button type="submit" class="btn btn-success btn-sm">
                      <i class="fa fa-plus"></i>
                    </button>
                    <?php endif; ?>
                  </td>
                </form>
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

<?php $__env->startSection("page_scripts"); ?>

<?php if(session("sukses")): ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
  swal({
    title: "Berhasil!",
    text: "<?php echo e(session('sukses')); ?>",
    icon: "success",
    button: "OK",
  });

</script>

<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("page.layouts.template_bph", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Proyek-Terbaru-MPM\Contoh\resources\views/page/bph/kas/data_kas_sekarang.blade.php ENDPATH**/ ?>