

<?php $__env->startSection("page_title", "Data KAS Pertanggal"); ?>

<?php $__env->startSection("page_scripts"); ?>

<script type="text/javascript">
  function editKasPerTanggal(id_kas) {
    $.ajax({
      url : "<?php echo e(url('/page/bph/kas/edit_kas_pertanggal')); ?>",
      type : "GET",
      data : { id_kas : id_kas },
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
      <h1 class="m-0"> Data KAS </h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">
          <a href="<?php echo e(url('/page/bph/dashboard')); ?>"> Dashboard </a>
        </li>
        <li class="breadcrumb-item active"> Data KAS Pertanggal </li>
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
            <i class="fa fa-edit"></i> Data KAS Keseluruhan
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
                <th class="text-center">Bayar</th>
                <th>Keterangan</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 0 ?>
              <?php $__currentLoopData = $data_kas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td class="text-center"><?php echo e(++$no); ?>.</td>
                <td class="text-center"><?php echo e($kas->getAnggota->nim); ?></td>
                <td><?php echo e($kas->getAnggota->nama); ?></td>
                <td class="text-center">Rp. <?php echo e(number_format($kas->bayar)); ?></td>
                <td><?php echo e($kas->keterangan); ?></td>
                <td class="text-center">
                  <button onclick="editKasPerTanggal(<?php echo e($kas->id_kas); ?>)" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default-edit" type="button">
                    <i class="fa fa-edit"></i> Edit
                  </button> 
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
      <form method="POST" action="<?php echo e(url('/page/bph/kas/tambah_kas_pertanggal')); ?>">
        <?php echo e(csrf_field()); ?>

        <div class="modal-body">
          <div class="form-group">
            <label for="nim_anggota"> Nama Anggota </label>
            <select class="form-control select2bs4" name="nim_anggota" style="width: 100%;">
              <option selected="selected"> - Pilih - </option>
              <?php $__currentLoopData = $data_divisi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $divisi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($divisi->getAnggota->nim); ?>">
                <?php echo e($divisi->getAnggota->nama); ?>

              </option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="bayar"> Bayar </label>
                <input type="number" class="form-control" id="bayar" name="bayar" placeholder="0" min="1000">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="tanggal"> Tanggal </label>
                <input type="date" class="form-control" id="tanggal" name="tanggal">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="keterangan"> Keterangan </label>
            <textarea class="form-control" name="keterangan" id="keterangan" rows="4" placeholder="Masukkan Keterangan"></textarea>
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
      <form method="POST" action="<?php echo e(url('/page/bph/kas/simpan_data_kas_pertanggal')); ?>">
        <?php echo e(csrf_field()); ?>

        <div class="modal-body" id="modal-content-edit">

        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">
            <i class="fa fa-refresh"></i> Batal
          </button>
          <button type="submit" class="btn btn-success">
            <i class="fa fa-edit"></i> Simpan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make("page.layouts.template_bph", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Proyek-Terbaru-MPM\Contoh\resources\views/page/bph/kas/data_kas_pertanggal.blade.php ENDPATH**/ ?>