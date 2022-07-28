<?php $__env->startSection('title', 'Rekam Surat Perorangan'); ?>

<?php $__env->startSection('page_content'); ?>

<?php
    use App\Models\Model\LogSurat;
?>

<section class="content-header">
    <h1>
        <?php echo $__env->yieldContent('title'); ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(url('/page/admin')); ?>"><i class="fa fa-home"></i> Dashboard</a></li>
        <li class="active"><?php echo $__env->yieldContent('title'); ?></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <a href="<?php echo e(url('/page/admin/surat/arsip')); ?>" class="btn btn-social btn-info btn-flat btn-sm" title="Kembali ke Arsip Layanan Surat">
                        <i class="fa fa-arrow-left"></i> Kembali ke Arsip Layanan Surat
                    </a>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
                                <form id="main" name="main" method="POST">
                                    <?php echo method_field("PUT"); ?>
                                    <?php echo csrf_field(); ?>
                                    <tr>
                                        <td style="padding-top: 10px; padding-bottom: 10px; width: 15%"> Nama Penduduk </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="col-sm-6 col-lg-6">
                                                    <select name="id_penduduk" id="id_penduduk" class="form-control input-sm select2" id="nik" name="nik" onchange="formAction('main')">
                                                        <option value="">- Pilih -</option>
                                                        <?php $__currentLoopData = $data_penduduk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php
                                                                $data_log_surat = LogSurat::where("id_penduduk", $data->id)
                                                                ->first();
                                                            ?>

                                                            <?php if($data_log_surat): ?>
                                                                <?php if(empty($detail)): ?>
                                                                <option value="<?php echo e($data->id); ?>">
                                                                    NIK : <?php echo e($data->nik); ?> - <?php echo e($data->nama); ?>

                                                                </option>
                                                                <?php else: ?>
                                                                    <?php if($data->id == $detail->id_penduduk): ?>
                                                                    <option value="<?php echo e($data->id); ?>" selected>
                                                                        NIK : <?php echo e($data->nik); ?> - <?php echo e($data->nama); ?>

                                                                    </option>
                                                                    <?php else: ?>
                                                                    <option value="<?php echo e($data->id); ?>">
                                                                        NIK : <?php echo e($data->nik); ?> - <?php echo e($data->nama); ?>

                                                                    </option>
                                                                    <?php endif; ?>
                                                                <?php endif; ?>
                                                            <?php endif; ?>

                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php if(empty($detail)): ?>

                                    <?php else: ?>
                                    <tr>
                                        <td style="width: 20%"> Tempat / Tanggal Lahir</td>
                                        <td>
                                            <?php echo e($detail->getPenduduk->tempat_lahir); ?>

                                            / <?php echo e($detail->getPenduduk->tgl_lahir); ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Alamat </td>
                                        <td><?php echo e($detail->getPenduduk->alamat_sekarang); ?></td>
                                    </tr>
                                    <tr>
                                        <td> Pendidikan </td>
                                        <td><?php echo e($detail->getPenduduk->getPekerjaan->nama); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Warganegara / Agama</td>
                                        <td>
                                            <?php echo e($detail->getPenduduk->getWarganegara->nama); ?>

                                            / <?php echo e($detail->getPenduduk->getAgama->nama); ?>

                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped table-hover" width="100%">
                            <thead class="bg-gray">
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Aksi</th>
                                    <th>Kode Surat</th>
                                    <th>No Urut</th>
                                    <th>Jenis Surat</th>
                                    <th>Nama Penduduk</th>
                                    <th>Ditandatangani Oleh</th>
                                    <th class="text-center">Tanggal</th>
                                    <th>User</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(empty($detail)): ?>

                                <?php else: ?>
                                <?php
                                    $ambilData = LogSurat::where("id_penduduk", $id)->get();
                                ?>
                                <?php $__currentLoopData = $ambilData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($loop->iteration); ?>.</td>
                                    <td class="text-center">
                                        <button onclick="ubahData(<?php echo e($data->id); ?>)" type="button" data-toggle="modal" data-target="#ubah-data" class="btn btn-warning btn-sm" title="Ubah Data">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <form action="<?php echo e(url('/page/admin/surat/arsip/'.$data->id)); ?>" method="POST" style="display: inline">
                                            <?php echo method_field("DELETE"); ?>
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-danger btn-sm" title="Hapus Data">
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
                                <?php endif; ?>
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
                    <button type="reset" class="btn btn-danger btn-flat btn-sm pull-left" data-dismiss="modal">
                        <i class="fa fa-times"></i> Batal
                    </button>
                    <button type="submit" class="btn btn-success btn-flat btn-sm">
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
    function formAction(idForm, action, target = '')
    {
        if (target != '')
        {
            $('#'+idForm).attr('target', target);
        }
        $('#'+idForm).attr('action', action);
        console.log();
        $('#'+idForm).submit();
    }

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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/surat/arsip/rekam_perorangan.blade.php ENDPATH**/ ?>