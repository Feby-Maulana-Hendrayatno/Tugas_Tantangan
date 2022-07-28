<?php $__env->startSection("app_title", "Users"); ?>

<?php $__env->startSection("app_content"); ?>

<section class="section">
    <div class="section-header">
        <h1>
            <?php echo $__env->yieldContent("app_title"); ?>
        </h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active">
                <a href="<?php echo e(url('/app/sistem/home')); ?>">Home</a>
            </div>
            <div class="breadcrumb-item">
                <?php echo $__env->yieldContent("app_title"); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <button data-target="#modalTambah" data-toggle="modal" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Tambah
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th class="text-center">Hak Akses</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0 ?>
                                <?php $__currentLoopData = $data_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e(++$no); ?>.</td>
                                    <td><?php echo e($user->nama); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td class="text-center"><?php echo e($user->getRole->keterangan); ?></td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-primary btn-sm">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <button class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <form action="" method="POST" style="display: inline">
                                            <?php echo method_field("DELETE"); ?>
                                            <?php echo e(csrf_field()); ?>

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
        </div>
    </div>
</div>

<!-- Tambah Data -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalTambah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="fa fa-plus"></i>
                    <span>Tambah Data</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(url('/app/sistem/users/')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama"> Nama </label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email"> Email </label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password"> Password </label>
                                <input type="password" class="form-control" id="password" placeholder="Masukkan Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="no_hp"> No. HP </label>
                        <input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="Masukkan No. HP">
                    </div>
                    <div class="form-group">
                        <label for="alamat"> Alamat </label>
                        <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10" placeholder="Masukkan Alamat"></textarea>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="reset" class="btn btn-danger" data-dismiss="modal">
                        <i class="fa fa-times"></i> Kembali
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection("app_scripts"); ?>

<script>
    function editRole(id) {
        $.ajax({
            url : "<?php echo e(url('/app/sistem/role/edit')); ?>",
            type : "GET",
            data : { id : id },
            success : function(data) {
                $("#modal-content-edit").html(data);
                return true;
            }
        });
    }

    $(document).ready(function() {
        $("#table-1").dataTable();
    })

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(".app.layouts.template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\FILE KULIAH\SEMESTER 4\TUGAS KULIAH TAHUN AJARAN 2021 - 2022\PROYEK 3\RTQ-WEB\RumahTahfidz\resources\views/app/super_admin/users/v_index.blade.php ENDPATH**/ ?>