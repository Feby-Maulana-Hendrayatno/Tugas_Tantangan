
<?php $__env->startSection('content'); ?>
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3><?php echo DB::table('users')->count() ?></h3>

        <p>Admin</p>
      </div>
      <div class="icon">
        <i class="fas fa-user-tie"></i>
      </div>
      <a href="<?php echo e(route('admin.users.index')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3><?php echo DB::table('artikel')->count() ?></h3>

        <p>Artikel</p>
      </div>
      <div class="icon">
        <i class="fas fa-image"></i>
      </div>
      <a href="<?php echo e(route('admin.artikel.index')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3><?php echo DB::table('pengumuman')->count() ?></h3>

        <p>Pengumuman</p>
      </div>
      <div class="icon">
        <i class="fas fa-info"></i>
      </div>
      <a href="<?php echo e(route('admin.pengumuman.index')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3><?php echo DB::table('agenda')->count() ?></h3>

        <p>Agenda</p>
      </div>
      <div class="icon">
        <i class="fas fa-list"></i>
      </div>
      <a href="<?php echo e(route('admin.agenda.index')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>
<!-- /.row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app',[
	'title' => 'Dashboard',
	'contentTitle' => 'Dashboard',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\laraschool\resources\views/admin/index.blade.php ENDPATH**/ ?>