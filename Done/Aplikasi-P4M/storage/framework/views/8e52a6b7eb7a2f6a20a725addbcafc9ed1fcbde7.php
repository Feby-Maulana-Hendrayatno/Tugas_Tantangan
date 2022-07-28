

<?php $__env->startSection('title', 'Data Arsip Layanan Surat'); ?>

<?php $__env->startSection('page_content'); ?>

<section class="content-header">
    <h1>
        <?php echo $__env->yieldContent('title'); ?>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(url('/page/admin/dashboard')); ?>">
                <i class="fa fa-home"></i> Home
            </a>
        </li>
        <li class="active"><?php echo $__env->yieldContent('title'); ?></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <a href="<?php echo e(url('/page/admin/surat/arsip/perorangan')); ?>" class="btn btn-social btn-success btn-flat btn-sm" title="Rekam Surat Perorangan">
                        <i class="fa fa-archive"></i> Rekam Surat Perorangan
                    </a>
                    <a href="" class="btn btn-social btn-warning btn-flat btn-sm" title="Pie Surat Keluar">
                        <i class="fa fa-pie-chart"></i> Pie Chart
                    </a>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped table-hover" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Aksi</th>
                                    <th>Kode Surat</th>
                                    <th>No. Urut</th>
                                    <th>Jenis Surat</th>
                                    <th>Nama Penduduk</th>
                                    <th>Ditandatangani Oleh</th>
                                    <th class="text-center">Tanggal</th>
                                    <th>User</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data_arsip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($loop->iteration); ?>.</td>
                                    <td class="text-center">
                                        <button onclick="ubahData(<?php echo e($data->id); ?>)" type="button" data-toggle="modal" data-target="#ubah-data" class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <?php if($data->getPenduduk->telepon != NULL): ?>
                                        <a href="https://api.whatsapp.com/send?phone=<?php echo e($data->getPenduduk->telepon); ?>&text=Test%20With%20API%20WhatsApp" target="_blank" class="btn btn-success btn-sm">
                                            <i class="fa fa-whatsapp"></i>
                                        </a>
                                        <?php endif; ?>
                                        <?php if(session('message')): ?>
                                        <a href="<?php echo e(url('page/admin/cetak_surat/cetak/'.$data->id)); ?>" target="_blank" class="btn btn-sm bg-purple"><i class="fa fa-file-word-o"></i></a>
                                        <?php endif; ?>
                                        <form action="<?php echo e(url('/page/admin/surat/arsip/'.$data->id)); ?>" method="POST" style="display: inline">
                                            <?php echo method_field("DELETE"); ?>
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td><?php echo e($data->getSuratFormat->kode_surat); ?></td>
                                    <td><?php echo e($data->no_surat); ?></td>
                                    <td><?php echo e($data->getSuratFormat->getKlasifikasi->nama); ?></td>
                                    <td><?php echo e($data->getPenduduk->nama); ?></td>
                                    <td><?php echo e($data->getPegawai->nama); ?></td>
                                    <td class="text-center"><?php echo e($data->tanggal); ?></td>
                                    <td><?php echo e($data->getUser->name); ?></td>
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

<!-- Ubah Data -->
<div class="modal fade" id="ubah-data">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">
                    <i class="fa fa-edit"></i> Ubah Data
                </h4>
            </div>
            <form action="<?php echo e(url('/page/admin/surat/arsip/ubah_data')); ?>" method="POST">
                <?php echo method_field("PUT"); ?>
                <?php echo csrf_field(); ?>
                <div class="modal-body" id="modal-content-edit">

                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-social btn-warning btn-flat btn-sm pull-left" title="Reset" data-dismiss="modal">
                        <i class="fa fa-refresh"></i> Reset
                    </button>
                    <button type="submit" class="btn btn-success btn-flat btn-sm" title="Simpan Data">
                        <i class="fa fa-edit"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END -->

<script type="text/javascript">
    function ubahData(id)
    {
        $.ajax({
            url : "<?php echo e(url('/page/admin/surat/arsip/edit')); ?>",
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/surat/arsip/index.blade.php ENDPATH**/ ?>