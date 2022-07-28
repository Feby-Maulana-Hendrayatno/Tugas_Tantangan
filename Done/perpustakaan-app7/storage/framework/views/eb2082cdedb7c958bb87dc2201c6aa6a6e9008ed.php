
<?php $__env->startSection('title','Edit Anggota'); ?>
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
<p><a href="/anggota" class="btn btn-success tbn-sm">Kembali</a></p>
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
        <form role="form" action="/anggota/update/" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="id_anggota" value="<?php echo e($edit->id_anggota); ?>">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">ID Anggota</label>
              <input type="text" class="form-control"   name="nis" placeholder="nis" value="<?php echo e($edit->nis); ?>" readonly >
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
              <label for="exampleInputPassword1">nama_anggota</label>
              <input type="text" class="form-control"  name="nama_anggota" placeholder="nama_anggota" value="<?php echo e($edit->nama_anggota); ?>">
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
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">alamat</label>
                <input type="text" class="form-control" name="alamat" placeholder="alamat" value="<?php echo e($edit->alamat); ?>">
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
                <label for="exampleInputPassword1">ttl_anggota</label>
                <input type="text" class="form-control" name="ttl_anggota" placeholder="ttl_anggota" value="<?php echo e($edit->ttl_anggota); ?>">
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
                <label for="exampleInputPassword1">No Hp</label>
                <input type="text" class="form-control" name="no_hp" placeholder="no_hp" value="<?php echo e($edit->no_hp); ?>">
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


<?php echo $__env->make('Layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\DONE\perpus\perpustakaan-app7\resources\views//admin/anggota/v_editanggota.blade.php ENDPATH**/ ?>