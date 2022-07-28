

<?php $__env->startSection("page_title", "Data Absen Per Tanggal"); ?>

<?php $__env->startSection("page_scripts"); ?>

<script type="text/javascript">
  function editAbsenPerTanggal(id_absensi) {
    $.ajax({
      url : "<?php echo e(url('/page/bph/edit_absen_pertanggal')); ?>",
      type : "GET",
      data : { id_absensi : id_absensi },
      success : function(data) {
        $("#modal-content-edit").html(data);
        return true;
      }
    });
  }
</script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("content_header"); ?>

<div class="container">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0"> Data Absen </h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">
          <a href="<?php echo e(url('/page/bph/dashboard')); ?>"> Dashboard </a>
        </li>
        <li class="breadcrumb-item active"> Data Absen Sekarang </li>
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
            <i class="fa fa-edit"></i> Data Keseluruhan
          </h3>
          <a class="pull-right" data-toggle="modal" data-target="#modal-default" type="button">
            <i class="fa fa-plus"></i> Tambah Data
          </a>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center">No.</th>
                <th class="text-center">NIM</th>
                <th>Nama</th>
                <th class="text-center">Status</th>
                <th>Keterangan</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 0 ?>
              <?php $__currentLoopData = $data_absen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $absen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td class="text-center"><?php echo e(++$no); ?>.</td>
                <td class="text-center"><?php echo e($absen->getAnggota->nim); ?></td>
                <td><?php echo e($absen->getAnggota->nama); ?></td>
                <form method="POST" action="<?php echo e(url('/page/bph/update_data_absen')); ?>">
                  <?php echo e(csrf_field()); ?>

                  <td class="text-center">
                    <?php if($absen->status_absen == 1): ?>
                    Hadir
                    <?php elseif($absen->status_absen == 2): ?>
                    Sakit
                    <?php elseif($absen->status_absen == 3): ?>
                    Izin
                    <?php elseif($absen->status_absen == 4): ?>
                    Alfa
                    <?php elseif($absen->status_absen == 5): ?>
                    Terlambat
                    <?php else: ?>
                    Tidak Ada
                    <?php endif; ?>
                  </td>
                  <td>
                    <?php echo e($absen->keterangan); ?>

                  </td>
                  <td class="text-center">
                    <button onclick="editAbsenPerTanggal(<?php echo e($absen->id_absensi); ?>)" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default-edit" type="button">
                      <i class="fa fa-edit"></i> Edit
                    </button>
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

<!-- Tambah Data -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">
          <i class="fa fa-plus"></i> Tambah Data
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="<?php echo e(url('/page/bph/simpan_data_absen_pertanggal')); ?>">
        <?php echo e(csrf_field()); ?>

        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
             <div class="form-group">
              <label for=""> Nama Anggota </label>
              <select class="form-control select2bs4" name="nim_anggota" style="width: 100%;">
                <option selected="selected"> - Pilih - </option>
                <?php $__currentLoopData = $data_divisi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $divisi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($divisi->getAnggota->nim); ?>">
                  <?php echo e($divisi->getAnggota->nama); ?>

                </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label> Status Absen </label>
              <select class="form-control" name="status_absen">
                <option value="">- Pilih -</option>
                <option value="1"> Hadir </option>
                <option value="2"> Sakit </option>
                <option value="3"> Izin </option>
                <option value="4"> Alfa </option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label> Tanggal Absen </label>
          <input type="date" class="form-control" name="tanggal_absen">
        </div>
        <div class="form-group">
          <label> Keterangan </label>
          <textarea class="form-control" name="keterangan" placeholder="Masukkan Keterangan" rows="5"></textarea>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">
          <i class="fa fa-refresh"></i> Batal
        </button>
        <button type="submit" class="btn btn-primary">
          <i class="fa fa-plus"></i> Tambah
        </button>
      </div>
    </form>
  </div>
</div>
</div>
<!-- END -->

<!-- Tambah Data -->
<div class="modal fade" id="modal-default-edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">
          <i class="fa fa-edit"></i> Edit Data
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="<?php echo e(url('/page/bph/edit_data_absen_pertanggal')); ?>">
        <?php echo e(csrf_field()); ?>

        <div class="modal-body" id="modal-content-edit">

        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">
            <i class="fa fa-refresh"></i> Batal
          </button>
          <button type="submit" class="btn btn-success">
            <i class="fa fa-save"></i> Simpan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make("page.layouts.template_bph", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Proyek-Terbaru-MPM\Contoh\resources\views/page/bph/absen/data_absen_pertanggal.blade.php ENDPATH**/ ?>