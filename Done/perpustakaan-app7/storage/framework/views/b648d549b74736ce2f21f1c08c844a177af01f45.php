
<?php $__env->startSection('title','Edit Buku'); ?>
<?php $__env->startSection('content-header'); ?>
<h1>
    <?php echo $__env->yieldContent('title'); ?>
    <small><?php echo $__env->yieldContent('title'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Buku</a></li>
    <li class="active">Edit</li>
  </ol>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<p><a href="/buku" class="btn btn-success tbn-sm">Kembali</a></p>
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
        <form role="form" action="/buku/update/" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="id_buku" value="<?php echo e($edit->id_buku); ?>">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Kode buku</label>
              <input type="text" class="form-control"   name="kode_buku" placeholder="kode buku" value="<?php echo e($edit->kode_buku); ?>" readonly >
              <div class="text-danger">
                <?php $__errorArgs = ['kode_buku'];
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
              <label for="exampleInputPassword1">Judul</label>
              <input type="text" class="form-control"  name="judul" placeholder="Judul" value="<?php echo e($edit->judul); ?>">
              <div class="text-danger">
                <?php $__errorArgs = ['judul'];
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
                <label for="exampleInputPassword1">Kategori</label>
                <select class="form-control select2" name="id_kategori">
                    <option value="">- Pilih -</option>
                    <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($k->id_kategori == $edit->id_kategori): ?>)
                        <option value="<?php echo e($k->id_kategori); ?>" selected>
                            <?php echo e($k->nama_kategori); ?>

                        </option>
                        <?php else: ?>
                        <option value="<?php echo e($k->id_kategori); ?>">
                            <?php echo e($k->nama_kategori); ?>

                        </option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>


            <div class="form-group">
                <label for="exampleInputPassword1">Pengarang</label>
                <input type="text" class="form-control" name="pengarang" placeholder="Pengarang" value="<?php echo e($edit->pengarang); ?>">
                <div class="text-danger">
                  <?php $__errorArgs = ['pengarang'];
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
                <label for="exampleInputPassword1">Tahun Terbit</label>
                <input type="year" class="form-control" name="tahun_terbit" placeholder="Tahun Terbit" value="<?php echo e($edit->tahun_terbit); ?>">
                <div class="text-danger">
                  <?php $__errorArgs = ['tahun_terbit'];
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
                <label for="exampleInputPassword1">Penerbit</label>
                <input type="text" class="form-control" name="penerbit" placeholder="Penerbit" value="<?php echo e($edit->penerbit); ?>">
                <div class="text-danger">
                  <?php $__errorArgs = ['penerbit'];
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
                <label for="exampleInputPassword1">Stok</label>
                <input type="text" class="form-control" name="stok" placeholder="Stok" value="<?php echo e($edit->stok); ?>">
                <div class="text-danger">
                  <?php $__errorArgs = ['stok'];
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

<?php echo $__env->make('Layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\DONE\perpus\perpustakaan-app7\resources\views//admin/buku/edit_buku.blade.php ENDPATH**/ ?>