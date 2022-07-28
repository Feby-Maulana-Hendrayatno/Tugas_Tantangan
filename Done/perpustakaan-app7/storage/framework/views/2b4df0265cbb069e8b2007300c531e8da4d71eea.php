

<?php $__env->startSection('title','Anggota'); ?>
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
    <div class="col-xs-12">
        <?php if(auth()->user()->id_role == 1): ?>
        <p><a href="anggota/add" class=" btn btn-primary btn-sm"style="width: 150px;"><i class="fa fa-plus"></i>Tambah <?php echo $__env->yieldContent('title'); ?></a></p>
        <?php else: ?>
        <?php endif; ?>
        <?php if(session('pesan')): ?>
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> success</h4>
            <?php echo e(session("pesan")); ?>

        </div>
        <?php endif; ?>
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
            <div class="box-body table-responsive ">
                <table id="example1" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID anggota</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tempat Lahir</th>

                            <th>No Hp</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php $no =1; ?>
                        <?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                            <td><?php echo e($no++); ?></td>
                            <td><?php echo e($data->nis); ?>

                            </td>
                            <td><?php echo e($data->nama_anggota); ?></td>
                            <td><?php echo e($data->alamat); ?></td>
                            <td><?php echo e($data->ttl_anggota); ?></td>
                            <td><?php echo e($data->no_hp); ?></td>



                            <td>
                                <?php if(auth()->user()->id_role == 1): ?>
                                <a href="/anggota/detail/<?php echo e($data->id_anggota); ?>" class="btn btn-sm btn-success"><i class="fa fa-search"></i></a>
                                <a href="/anggota/edit/<?php echo e($data->id_anggota); ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo e($data->id_anggota); ?>">
                                    <i class="fa fa-trash"></i>
                                </button>
                                <?php elseif(auth()->user()->id_role == 2): ?>
                                <a href="/anggota/detail/<?php echo e($data->id_anggota); ?>" class="btn btn-sm btn-success"><i class="fa fa-search"></i></a>
                                <?php endif; ?>
                            </td>



                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>

<?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


<div class="modal modal-danger fade" id="delete<?php echo e($data->id_anggota); ?>">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><?php echo e($data->nama_anggota); ?></h4>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin anggota ini!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                    <a href="anggota/delete/<?php echo e($data->id_anggota); ?>" class="btn btn-outline">Yes</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__env->stopSection(); ?>



<?php echo $__env->make("Layout.v_template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\DONE\perpus\perpustakaan-app7\resources\views//admin/anggota/v_anggota.blade.php ENDPATH**/ ?>