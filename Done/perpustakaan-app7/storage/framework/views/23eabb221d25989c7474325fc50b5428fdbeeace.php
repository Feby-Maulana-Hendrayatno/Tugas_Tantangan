

<?php $__env->startSection('title','Katagori'); ?>
<?php $__env->startSection('content-header'); ?>
<h1>
    <?php echo $__env->yieldContent('title'); ?>
    <small><?php echo $__env->yieldContent('title'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Buku</a></li>
    <li class="active"><?php echo $__env->yieldContent('title'); ?></li>
  </ol>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("page_scripts"); ?>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if(session("gagal")): ?>

<script>
    Swal.fire(
    'Gagal!',
    '<?php echo e(session("gagal")); ?>',
    'error'
    )
</script>

<?php elseif(session("sukses")): ?>

<script>
    Swal.fire(
    'Berhasil!',
    '<?php echo e(session("sukses")); ?>',
    'success'
    )
</script>

<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah <?php echo $__env->yieldContent('title'); ?></h3>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/kategori/insert" method="POST" enctype="multipart/form-data">
                <div class="box-body">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label for="nama_kategori">Nama kategori</label>
                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Masukan nama kategori" value="<?php echo e(old('nama_kategori')); ?>">
                        <div class="text-danger">
                            <?php $__errorArgs = ['nama_kategori'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>

                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <div class="col-md-6">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Data <?php echo $__env->yieldContent('title'); ?></h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-hover">
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Nama Kategori</th>

                            <th>Label</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no =1; ?>
                        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($no++); ?></td>
                            <td><?php echo e($data->nama_kategori); ?>

                            </td>
                            <td>
                                
                                <a href="/kategori/edit/<?php echo e($data->id_kategori); ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <form action="/kategori/hapus" method="POST" style="display: inline;">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="id_kategori" value="<?php echo e($data->id_kategori); ?>">
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <?php $__env->stopSection(); ?>



<?php echo $__env->make("Layout.v_template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\DONE\perpus\perpustakaan-app7\resources\views//admin/kategori/kategori.blade.php ENDPATH**/ ?>