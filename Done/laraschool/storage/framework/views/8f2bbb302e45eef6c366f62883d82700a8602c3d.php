
<?php $__env->startPush('css'); ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo e(asset('templates/backend/AdminLTE-3.0.1')); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.alert','data' => []]); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <a href="<?php echo e(route('admin.pengumuman.create')); ?>" class="btn btn-primary btn-sm">Tambah Data</a>
            </div>
            <div class="card-body table-responsive">
                <table id="dataTable1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Author</th>
                  <th>Tgl Upload</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    $no=1;
                ?>

                <?php $__currentLoopData = $pengumuman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($no++); ?></td>
                  <td><?php echo e($pn->judul); ?></td>
                  <td><?php echo e($pn->user->name); ?></td>
                  <td><?php echo e($pn->tgl); ?></td>
                  
                  <td>
                    <?php if(auth()->user()->id == $pn->user_id): ?>
                    <div class="row ml-2">
                        <a href="<?php echo e(route('admin.pengumuman.edit',$pn->id)); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                        
                        <form method="POST" action="<?php echo e(route('admin.pengumuman.destroy',$pn->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button onclick="return confirm('Yakin hapus ?')" type="submit" class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i></button>
                        </form>
                    </div>
                    <?php else: ?>
                    <a href="javasript:void(0)" class="btn btn-danger btn-sm">
                    <i class="fas fa-ban"></i> No Action Available
                    </a>
                    <?php endif; ?>
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
<?php $__env->startPush('js'); ?>
<!-- DataTables -->
<script src="<?php echo e(asset('templates/backend/AdminLTE-3.0.1')); ?>/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo e(asset('templates/backend/AdminLTE-3.0.1')); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#dataTable1").DataTable();
  });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend.app',[
    'title' => 'Manage Pengumuman',
    'contentTitle' => 'Manage Pengumuman',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\laraschool\resources\views/admin/pengumuman/index.blade.php ENDPATH**/ ?>