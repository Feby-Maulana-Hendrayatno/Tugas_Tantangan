<?php $__env->startSection('title', 'Daftar Anggota Rumah Tangga'); ?>

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
        <li>

        </li>
        <li class="active"><?php echo $__env->yieldContent('title'); ?></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-info">
                <div class="box-header">
                    <a onclick="tambahAnggotaRTM(<?php echo e($edit->id); ?>)" type="button" data-toggle="modal" data-target="#modalBox" class="btn btn-social btn-success btn-flat btn-sm">
                        <i class="fa fa-plus"></i> Tambah Anggota
                    </a>
                    <a href="<?php echo e(url('/page/admin/kependudukan/rtm/kartu_rtm/'.$edit->id)); ?>" class="btn bg-purple btn-flat btn-sm">
                        <i class="fa fa-book"></i> Kartu Rumah Tangga
                    </a>
                    <a href="<?php echo e(url('/page/admin/kependudukan/rtm')); ?>" class="btn btn-info btn-flat btn-sm">
                        <i class="fa fa-arrow-left"></i> Kembali ke Daftar Rumah Tangga
                    </a>
                </div>
                <div class="box-body">
                    <h5>
                        <b>Rincian Keluarga</b>
                    </h5>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
                                <tr>
                                    <td width="20%">Nomor Rumah Tangga (RT)</td>
                                    <td width="1%">:</td>
                                    <td>
                                        <?php echo e($edit->no_kk); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>Kepala Rumah Tangga</td>
                                    <td>:</td>
                                    <td>
                                        <?php echo e($edit->getDataPenduduk->nama); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>
                                        <?php echo e($edit->getDataPenduduk->alamat); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>Program Bantuan</td>
                                    <td>:</td>
                                    <td>
                                        <?php $__currentLoopData = $program_bantuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($program->nama); ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="box-body">
                    <h5>
                        <b>Daftar Anggota</b>
                    </h5>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Aksi</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th class="text-center">Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Hubungan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                use App\Models\Model\Penduduk;

                                $getData = Penduduk::where("id_rtm", $edit->no_kk)->get();

                                ?>
                                <?php $__currentLoopData = $getData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($loop->iteration); ?>.</td>
                                    <td class="text-center">
                                        <button onclick="ubahHubungan(<?php echo e($data->id); ?>)" data-toggle="modal" data-target="#ubahHubungan" class="btn btn-warning btn-sm" title="Ubah Hubungan Rumah Tangga">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <a href="" class="btn btn-danger btn-flat btn-sm">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                    <td><?php echo e($data->nik); ?></td>
                                    <td><?php echo e($data->nama); ?></td>
                                    <td class="text-center"><?php echo e($data->getKelamin->nama); ?></td>
                                    <td></td>
                                    <td><?php echo e($data->getHubunganRtm->nama); ?></td>
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

<!-- Tambah Anggota -->
<div class="modal fade" id="modalBox">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">
                    <i class="fa fa-plus"></i> Tambah Anggota Rumah Tangga
                </h4>
            </div>
            <form action="<?php echo e(url('/page/admin/kependudukan/rtm/tambah_data_anggota')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="modal-body" id="isian-modal">

                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger pull-left btn-flat btn-sm">
                        <i class="fa fa-times"></i> Batal
                    </button>
                    <button type="submit" class="btn btn-primary btn-flat btn-sm" title="Tambah Data">
                        <i class="fa fa-plus"></i> Tambah
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END -->

<!-- Ubah Hubungan -->
<div class="modal fade" id="ubahHubungan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">
                    <i class="fa fa-edit"></i> Ubah Hubungan Rumah Tangga
                </h4>
            </div>
            <form action="<?php echo e(url('/page/admin/kependudukan/rtm/ubah_hubungan')); ?>" method="POST">
                <?php echo method_field("PUT"); ?>
                <?php echo csrf_field(); ?>
                <div class="modal-body" id="content-isi">

                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-warning pull-left btn-flat btn-sm">
                        <i class="fa fa-refresh"></i> Batal
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>

<script type="text/javascript">
    function tambahAnggotaRTM(id)
    {
        $.ajax({
            url : "<?php echo e(url('/page/admin/kependudukan/rtm/tambah_data_anggota_rtm')); ?>",
            type : "GET",
            data : { id : id },
            success : function(data) {
                $("#isian-modal").html(data);
                return true;
            }
        });
    }

    function ubahHubungan(id)
    {
        $.ajax({
            url : "<?php echo e(url('/page/admin/kependudukan/rtm/ubah_hubungan_rumah_tangga')); ?>",
            type : "GET",
            data : { id : id },
            success : function(data) {
                $("#content-isi").html(data);
                return true;
            }
        });
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/kependudukan/rtm/rincian_rtm.blade.php ENDPATH**/ ?>