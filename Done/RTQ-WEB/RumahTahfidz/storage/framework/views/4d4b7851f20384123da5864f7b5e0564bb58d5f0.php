<?php $__env->startSection("app_title", "Jenjang"); ?>

<?php $__env->startSection("app_content"); ?>

<section class="section">
    <div class="section-header">
        <h1>
            <?php echo $__env->yieldContent("app_title"); ?>
        </h1>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <i class="fa fa-plus"></i>
                        <span>Tambah Form Jenjang</span>
                    </h4>
                </div>
                <form action="<?php echo e(url('/app/sistem/jenjang')); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="jenjang"> Jenjang </label>
                            <input type="text" class="form-control" name="jenjang" id="jenjang" placeholder="Masukkan Jenjang">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button name="btn-tambah" class="btn btn-primary" id="btn-tambah">
                            <i class="fa fa-plus"></i> Tambah
                        </button>
                        <button name="btn-reset" class="btn btn-danger" id="btn-reset">
                            <i class="fa fa-times"></i> Batal
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-8 col-md-6 col-sm-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <i class="fa fa-bars"></i>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Keterangan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0 ?>
                                <?php $__currentLoopData = $data_jenjang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenjang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e(++$no); ?>.</td>
                                    <td><?php echo e($jenjang->jenjang); ?></td>
                                    <td class="text-center">
                                        <button onclick="editDataJenjang(<?php echo e($jenjang->id_jenjang); ?>)" type="button" data-target="#modalEdit" data-toggle="modal" class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <form action="#" method="POST" style="display: inline;">
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

<!-- Edit Data -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalEdit">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="fa fa-edit"></i>
                    <span>Edit Data</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(url('/app/sistem/jenjang')); ?>" method="POST">
                <?php echo e(csrf_field()); ?>

                <?php echo method_field("PUT"); ?>
                <div class="modal-body" id="modal-content-edit">

                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        <i class="fa fa-times"></i> Kembali
                    </button>
                    <button type="submit" class="btn btn-success" id="btn-edit">
                        <i class="fa fa-save"></i> Simpan
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
    $(document).ready(function() {
        $("#table-1").dataTable();
    })
</script>

<script>
    function editDataJenjang(id_jenjang) {
        $.ajax({
            url : "<?php echo e(url('/app/sistem/jenjang/edit')); ?>",
            type : "GET",
            data : { id_jenjang : id_jenjang },
            success : function(data) {
                $("#modal-content-edit").html(data);
                return true;
            }
        });
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app.administrator.layouts.template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\FILE KULIAH\SEMESTER 4\TUGAS KULIAH TAHUN AJARAN 2021 - 2022\PROYEK 3\RTQ-WEB\RumahTahfidz\resources\views/app/administrator/jenjang/index.blade.php ENDPATH**/ ?>