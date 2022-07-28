

<?php $__env->startSection('page_title', 'Dashboard'); ?>

<?php $__env->startSection('page_content'); ?>

<section class="content-header">
    <h1>
        Data RT / RW
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(url('/page/admin/dashboard')); ?>">
                <i class="fa fa-dashboard"></i> Home
            </a>
        </li>
        <li class="active">Blank page</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-users"></i> RT / RW
                    </h3>
                    <div class="pull-right">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-default">
                            <i class="fa fa-plus"></i> Tambah Data
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped" style="width: 100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">RW / Dusun</th>
                                    <th class="text-center">Laki - Laki</th>
                                    <th class="text-center">Perempuan</th>
                                    <th class="text-center">Jumlah</th>
                                    <th class="text-center">Tahun</th>
                                    <td class="text-center">Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data_rt_rw; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-center"><?php echo e($loop->iteration); ?>.</td>
                                        <td class="text-center"><?php echo e($data->dusun); ?></td>
                                        <td class="text-center"><?php echo e($data->laki_laki); ?></td>
                                        <td class="text-center"><?php echo e($data->perempuan); ?></td>
                                        <td class="text-center"><?php echo e($data->jumlah); ?></td>
                                        <td class="text-center"><?php echo e($data->tahun); ?></td>
                                        <td class="text-center">
                                            <button onclick="editDataRtRw(<?php echo e($data->id); ?>)" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default-edit">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <form action="<?php echo e(url('/page/admin/rt_rw/'.$data->id)); ?>" method="POST" style="display: inline;">
                                                <?php echo method_field("DELETE"); ?>
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash-o"></i>
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
        </div>
    </div>
</section>

<!-- Tambah Data -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">
                    <i class="fa fa-plus"></i> Tambah Data Galeri
                </h4>
            </div>
            <form id="tambahDusun" action="<?php echo e(url('/page/admin/rt_rw')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dusun"> Dusun </label>
                                <input type="text" class="form-control" name="dusun" id="dusun" placeholder="0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tahun"> Tahun </label>
                                <input type="text" class="form-control" name="tahun" id="tahun" placeholder="0">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="laki_laki"> Laki - Laki </label>
                                <input type="number" class="form-control" name="laki_laki" id="laki_laki" placeholder="0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="perempuan"> Perempuan </label>
                                <input type="number" class="form-control" name="perempuan" id="perempuan" placeholder="0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">
                        <i class="fa fa-refresh"></i> Batal
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Tambah
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END -->

<!-- Edit Data -->
<div class="modal fade" id="modal-default-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">
                    <i class="fa fa-edit"></i> Edit Data RT / RW
                </h4>
            </div>
            <form id="editDusun" action="<?php echo e(url('/page/admin/rt_rw/simpan')); ?>" method="POST" enctype="multipart/form-data" id="formTambahGaleri">
                <?php echo method_field("PUT"); ?>
                <?php echo csrf_field(); ?>
                <div class="modal-body" id="modal-content-edit">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">
                        <i class="fa fa-refresh"></i> Batal
                    </button>
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-edit"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>

<script type="text/javascript">

function editDataRtRw(id)
    {
        $.ajax({
            url : "<?php echo e(url('/page/admin/rt_rw/edit')); ?>",
            type : "GET",
            data : { id : id },
            success : function(data) {
                $("#modal-content-edit").html(data);
                return true;
            }
        });
    }

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/rt_rw/index.blade.php ENDPATH**/ ?>