
<?php $__env->startSection('title','Detail anggota'); ?>
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
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data <?php echo $__env->yieldContent('title'); ?></h3>

        </div>
        <!-- /.box-header -->

        <form role="form">

            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">NIS</label>
                    <input type="text" class="form-control" value="<?php echo e($anggota->nis); ?>" readonly>

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama anggota</label>
                    <input type="text" class="form-control" value="<?php echo e($anggota->nama_anggota); ?>" readonly>

                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" class="form-control" value="<?php echo e($anggota->alamat); ?>" readonly>

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Lahir</label>
                    <input type="text" class="form-control" value="<?php echo e($anggota->ttl_anggota); ?>" readonly>

                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">No Hp</label>
                    <input type="text" class="form-control"  value="<?php echo e($anggota->no_hp); ?>" readonly>

                </div>
            </div>


            </div>
            <!-- /.box-body -->


        </form>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("Layout.v_template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\DONE\perpus\perpustakaan-app7\resources\views//admin/anggota/v_detailanggota.blade.php ENDPATH**/ ?>