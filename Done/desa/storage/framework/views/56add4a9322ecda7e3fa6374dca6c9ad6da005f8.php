

<?php $__env->startSection("page_title", "DATA AKUN"); ?>

<?php $__env->startSection("page_content"); ?>

<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header border-0">
        <h3 class="mb-0">


          Akun Admin


        </h3>
      </div>
      <!-- Light table -->
      <div class="table-responsive">
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
            <th scope="col" class="sort" data-sort="name">No.</th>
              <th scope="col" class="sort" data-sort="status">Nama</th>
              <th scope="col" class="sort" data-sort="status">Email</th>
              <th scope="col" class="sort" data-sort="budget">Password</th>
              <th scope="col">Aksi</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody class="list">
            <?php $no = 0 ?>

            <?php $__currentLoopData = $data_akun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $akun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e(++$no); ?></td>
              <td><?php echo e($akun->nama); ?></td>
              <td><?php echo e($akun->email); ?></td>
              <td><?php echo e($akun->password); ?></td>
              <td>
                <a href="/editprofil/<?php echo e($akun->id); ?>" class="btn btn-warning btn-sm">
                <i class="fas fa-user-edit"></i>
                </a>
                <a onclick="return confirm('Ingin Menghapus Data Ini ?')" href="/akun/<?php echo e($akun->id); ?>/hapus" class="btn btn-danger btn-sm">
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

<?php echo $__env->make("template.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\Proyek-2\Proyek-2\resources\views//akun.blade.php ENDPATH**/ ?>