

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
<h1 class="h3 mb-2 text-gray-800">Data Open Recruitmen</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>No. WhatsApp</th>
                        <th>Email</th>
                        <th>Prodi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tfoot>

                </tfoot>
                <tbody>
                    <?php $no=1; ?>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($no++); ?></td>
                        <td><?php echo e($item->nama); ?></td>
                        <td><?php echo e($item->nim); ?></td>
                        <td><?php echo e($item->no_telp); ?></td>
                        <td><?php echo e($item->email); ?></td>
                        <td><?php echo e($item->jurusan); ?></td>
                        <td><img src="/storage/oprec/<?php echo $item->gambar; ?>" alt="<?php echo $item->nama; ?>"
                                class="img-responsive" width="75" title="<?php echo $item->nama; ?>"></td>
                        <td>
                            <?php
                                if ($item->diterima==1){
                                    ?>
                            <div class='badge badge-success'><i>Sudah diterima</i></div>
                            <form action="/deleteoprec/<?php echo e($item->id); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button onclick="return confirm('Yakin ? Ingin Menghapus Data Ini ?')" type="submit"
                                    class=" btn-danger btn-sm">
                                    Hapus
                                </button>
                            </form>
                            <?php
                            }else if ($item->ditolak==2){ ?>
                            <div class="badge badge-danger"><i>Ditolak</i></div>
                            <form action="/deleteoprec/<?php echo e($item->id); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button onclick="return confirm('Yakin ? Ingin Menghapus Data Ini ?')" type="submit"
                                    class=" btn-danger btn-sm">
                                    Hapus
                                </button>
                            </form>
                            <?php } else {
                                ?>
                            <form action="/oprecditerima/<?php echo e($item->id); ?>/<?php echo e($item->no_telp); ?>" method="POST"
                                target="_blank">
                                <?php echo csrf_field(); ?>
                                <button class="btn btn-success">
                                    Terima
                                </button>
                            </form>
                            <form action="/oprecditolak/<?php echo e($item->id); ?>/<?php echo e($item->no_telp); ?>" method="POST"
                                target="_blank">
                                <?php echo csrf_field(); ?>
                                <button class=" btn btn-danger">
                                    Tidak
                                </button>
                            </form>
                            <?php
                                }
                            ?>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\sebura\resources\views/admin/oprec.blade.php ENDPATH**/ ?>