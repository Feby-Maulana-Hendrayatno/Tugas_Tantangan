
<?php $__env->startSection('title', 'Tambah Anggota'); ?>
<?php $__env->startSection('content-header'); ?>
<h1>
    <?php echo $__env->yieldContent('title'); ?>
    <small><?php echo $__env->yieldContent('title'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

    <li class="active"><?php echo $__env->yieldContent('title'); ?></li>
  </ol>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="row">
    <!-- left column -->
    <div class="col-xs-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">

                <h3 class="box-title"><?php echo $__env->yieldContent('title'); ?></h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/anggota/insert" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">ID Anggota</label>
                        <input type="text" class="form-control"   name="nis" placeholder="ID Anggota" value="<?php echo e($kode); ?>" readonly>
                        <div class="text-danger">
                            <?php $__errorArgs = ['nis'];
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
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama</label>
                        <input type="text" class="form-control"  name="nama_anggota" placeholder="nama anggota" value="<?php echo e(old('nama_anggota')); ?>">
                        <div class="text-danger">
                            <?php $__errorArgs = ['nama_anggota'];
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
                        <div class="text-danger"></div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo e(old('alamat')); ?>">
                        <div class="text-danger">
                            <?php $__errorArgs = ['alamat'];
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
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tempat Lahir</label>
                        <input type="text" class="form-control" name="ttl_anggota" placeholder="Tempat Lahir " value="<?php echo e(old('ttl_anggota')); ?>">
                        <div class="text-danger">
                            <?php $__errorArgs = ['ttl_anggota'];
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

                    <div class="form-group">
                        <label for="exampleInputPassword1">No Telephone</label>
                        <input type="text" class="form-control" name="no_hp" placeholder="No Telephone" value="<?php echo e(old('no_hp')); ?>">
                        <div class="text-danger">
                            <?php $__errorArgs = ['no_hp'];
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
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\DONE\perpus\perpustakaan-app7\resources\views//admin/anggota/v_addanggota.blade.php ENDPATH**/ ?>