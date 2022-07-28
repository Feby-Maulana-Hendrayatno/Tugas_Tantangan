<?php $__env->startSection('title', 'Daftar Anggota Rumah Tangga'); ?>

<?php $__env->startSection('page_content'); ?>

<?php
    use Carbon\Carbon;
?>

<section class="content-header">
    <h1>
        <?php echo $__env->yieldContent('title'); ?>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(url('/page/admin/dashboard')); ?>">
                <i class="fa fa-dashboard"></i> Dashboard
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
                    <a href="<?php echo e(url('/page/admin/kependudukan/rtm/cetak_rtm/'.$detail->id)); ?>" class="btn btn-social bg-purple btn-flat btn-sm">
                        <i class="fa fa-print"></i> Cetak
                    </a>
                    <a href="<?php echo e(url('/page/admin/kependudukan/rtm/'.$detail->id."/rincian_rtm")); ?>" class="btn btn-info btn-flat btn-sm">
                        <i class="fa fa-arrow-left"></i> Kembali ke Daftar Anggota Rumah Tangga
                    </a>
                </div>
                <div class="box-header">
                    <h3 class="text-center">
                        <strong>KARTU RUMAH TANGGA</strong>
                    </h3>
                    <h5 class="text-center">
                        <strong>
                            No. <?php echo e($detail->no_kk); ?>

                        </strong>
                    </h5>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label class="col-sm-3 control-label"> ALAMAT </label>
                                <div class="col-sm-8">
                                    <p class="text-muted">: BANJAR</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">RT/RW</label>
                                <div class="col-sm-9">
                                    <p class="text-muted">: 004 / -</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">DESA / KELURAHAN</label>
                                <div class="col-sm-9">
                                    <p class="text-muted">: </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">KECAMATAN</label>
                                <div class="col-sm-9">
                                    <p class="text-muted">: BAKONGAN</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-sm-5 control-label">KABUPATEN</label>
                                <div class="col-sm-7">
                                    <p class="text-muted">: ACEH SELATAN</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label">KODE POS</label>
                                <div class="col-sm-7">
                                    <p class="text-muted">: 83355</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label">PROVINSI</label>
                                <div class="col-sm-7">
                                    <p class="text-muted">: ACEH</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label">JUMLAH ANGGOTA</label>
                                <div class="col-sm-7">
                                    <p class="text-muted">: 2</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" width="100%">
                                    <thead class="bg-gray disabled color-palette">
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Lengkap</th>
                                            <th>NIK</th>
                                            <th>Nomor KK</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Agama</th>
                                            <th>Pendidikan</th>
                                            <th>Pekerjaan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            use App\Models\Model\Penduduk;
                                            $getData = Penduduk::where("id_rtm", $detail->no_kk)->get();
                                        ?>
                                        <?php $__currentLoopData = $getData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?>.</td>
                                            <td><?php echo e($data->nama); ?></td>
                                            <td><?php echo e($data->nik); ?></td>
                                            <td><?php echo e($data->getRtm->no_kk); ?></td>
                                            <td><?php echo e($data->getKelamin->nama); ?></td>
                                            <td><?php echo e($data->tempat_lahir); ?></td>
                                            <td><?php echo e($data->tgl_lahir); ?></td>
                                            <td><?php echo e($data->getAgama->nama); ?></td>
                                            <td><?php echo e($data->getPendidikan->nama); ?></td>
                                            <td><?php echo e($data->getPekerjaan->nama); ?></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="bg-gray disabled color-palette">
                                        <tr>
                                            <th>No</th>
                                            <th>Status Perkawinan</th>
                                            <th>Status Hubungan Dalam Rumah Tangga</th>
                                            <th>Kewarganegaraan</th>
                                            <th>Nama Ayah</th>
                                            <th>Nama Ibu</th>
                                            <th>Golongan Darah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $getData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($data->getKawin->nama); ?></td>
                                            <td><?php echo e($data->getHubunganRtm->nama); ?></td>
                                            <td><?php echo e($data->getWargaNegara->nama); ?></td>
                                            <td><?php echo e($data->nama_ayah); ?></td>
                                            <td><?php echo e($data->nama_ibu); ?></td>
                                            <td><?php echo e($data->getGolonganDarah->nama); ?></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <p class="pull-right">Dikeluarkan Tanggal : <?php echo e(Carbon::now()->isoFormat('D MMMM Y')); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/kependudukan/rtm/kartu_rtm.blade.php ENDPATH**/ ?>