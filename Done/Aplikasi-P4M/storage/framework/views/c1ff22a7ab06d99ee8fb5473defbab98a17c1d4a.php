

<?php $__env->startSection('page_title', 'Dashboard'); ?>

<?php $__env->startSection('page_content'); ?>

<section class="content-header">
    <h1>
        Data Pegawai
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
                        Pegawai
                    </h3>
                    <div class="pull-right">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-default">
                            <i class="fa fa-plus"></i> Tambah Data
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">NIK</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th class="text-center">Jenis Kelamin</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($loop->iteration); ?>.</td>
                                    <td class="text-center"><?php echo e($pegawai->nik); ?></td>
                                    <td><?php echo e($pegawai->nama); ?></td>
                                    <td><?php echo e($pegawai->email); ?></td>
                                    <td class="text-center">
                                        <?php if($pegawai->jenis_kelamin == "L"): ?>
                                        Laki - Laki
                                        <?php elseif($pegawai->jenis_kelamin == "P"): ?>
                                        Perempuan
                                        <?php else: ?>
                                        Tidak Ada
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center">
                                        <button onclick="editDataPegawai(<?php echo e($pegawai->id); ?>)" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default-edit">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <form action="<?php echo e(url('/page/admin/pegawai/'.$pegawai->id)); ?>" method="POST" style="display: inline;">
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
                    <i class="fa fa-plus"></i> Tambah Data Pegawai
                </h4>
            </div>
            <form class="form-horizontal" action="<?php echo e(url('/page/admin/pegawai')); ?>" method="POST" enctype="multipart/form-data" id="tambahPegawai">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nik" class="col-sm-2 control-label"> NIK </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label"> Nama </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label"> Email </label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin" class="col-sm-2 control-label"> JK </label>
                        <div class="col-sm-10">
                            <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                <option value="">- Pilih -</option>
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="no_hp" class="col-sm-2 control-label"> No. HP </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="0">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="col-sm-2 control-label"> Alamat </label>
                        <div class="col-sm-10">
                            <textarea name="alamat" id="alamat" class="form-control" rows="5" placeholder="Masukkan Alamat"></textarea>
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
                    <i class="fa fa-edit"></i> Edit Data Pegawai
                </h4>
            </div>
            <form class="form-horizontal" action="<?php echo e(url('/page/admin/pegawai/simpan')); ?>" method="POST" enctype="multipart/form-data" id="editPegawai">
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

    function editDataPegawai(id)
    {
        $.ajax({
            url : "<?php echo e(url('/page/admin/pegawai/edit')); ?>",
            type : "GET",
            data : { id : id },
            success : function(data) {
                $("#modal-content-edit").html(data);
                return true;
            }
        })
    }

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/pegawai/index.blade.php ENDPATH**/ ?>