

<?php $__env->startSection("page_title", "DATA PENDUDUK"); ?>

<?php $__env->startSection("page_content"); ?>


<div class="row align-items-center py-4">
  <div class="col-lg-6 col-7">
    <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
      <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
        <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
        <li class="breadcrumb-item"><a href="/dashboard">Dashboards</a></li>
        <li class="breadcrumb-item active" aria-current="page">Default</li>
      </ol>
    </nav>
  </div>
  <div class="col-lg-6 col-5 text-right">
    <a href="<?php echo e(url('/form_tambah_penduduk')); ?>" class="btn btn-sm btn-neutral">Tambah Data</a>
  </div>
</div>
<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header border-0">
        <h3 class="mb-0">
          <?php if(auth()->user()->role == 1): ?>
            Hello

          <?php else: ?>
          Data Kependudukan
          <?php endif; ?>

        </h3>
      </div>
      <!-- Light table -->
      <div class="table-responsive">
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col" class="sort" data-sort="name">No.</th>
              <th scope="col" class="sort" data-sort="status">Nama</th>
              <th scope="col" class="sort" data-sort="budget">NIK</th>
              <th scope="col" class="sort" data-sort="budget">Jenis Kelamin</th>
              <th scope="col" class="sort" data-sort="budget">Kewarganegaraan</th>
              <th scope="col" class="sort" data-sort="budget">Agama</th>
              <th scope="col" class="sort" data-sort="budget">Alamat</th>
              <th scope="col">Aksi</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody class="list">
            <?php $no = 0 ?>

            <?php $__currentLoopData = $data_penduduk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pdd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e(++$no); ?></td>
              <td><?php echo e($pdd->nama); ?></td>
              <td><?php echo e($pdd->nik); ?></td>
              <td><?php echo e($pdd->jenis_kelamin); ?></td>
              <td><?php echo e($pdd->kewarganegaraan); ?></td>
              <td><?php echo e($pdd->agama); ?></td>
              <td><?php echo e($pdd->alamat); ?></td>
              <td>
                <a href="/penduduk/edit/<?php echo e($pdd->id); ?>" class="btn btn-warning btn-sm">
                <i class="fas fa-edit"></i>
                </a>
                <a onclick="return confirm('Ingin Menghapus Data Kependudukan Ini ?')" href="/penduduk/<?php echo e($pdd->id); ?>/hapus" class="btn btn-danger btn-sm">
                <i class="fas fa-trash"></i>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make("template.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\DONE\desa\resources\views//penduduk.blade.php ENDPATH**/ ?>