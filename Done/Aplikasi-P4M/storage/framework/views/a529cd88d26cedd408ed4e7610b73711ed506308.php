

<?php $__env->startSection('title', "Biodata Penduduk $penduduk->nama"); ?>

<?php $__env->startSection('page_content'); ?>

<?php
    use Carbon\Carbon;
?>

<style>
    .subtitle_head {
        padding: 10px 50px 10px 5px;
        background-color: #b5f2a2;
        margin: 15px 0px 10px 0px;
        text-align: left;
        color: #555;
        text-transform: uppercase;
    }
    .kecil {
        font-size: .8em;
        color: #888;
        font-style: italic;
        font-weight: 400;
        margin-bottom: 0.5em;
    }
</style>

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
            <a href="<?php echo e(url('/page/admin/kependudukan/penduduk')); ?>">
                Data Penduduk
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
                    <a href="<?php echo e(url('page/admin/kependudukan/penduduk')); ?>" class="btn btn-social btn-flat btn-info btn-sm" title="Kembali">
                        <i class="fa fa-arrow-circle-o-left"></i> Kembali
                    </a>
                    <a href="<?php echo e(url('page/admin/kependudukan/penduduk/'.$penduduk->id.'/edit')); ?>" class="btn btn-social btn-flat btn-warning btn-sm" title="Ubah Biodata">
                        <i class="fa fa-edit"></i> Ubah Biodata
                    </a>
                    <a href="<?php echo e(url('page/admin/kependudukan/penduduk/'.$penduduk->id.'/cetak')); ?>" class="btn btn-social btn-flat btn-primary btn-sm" target="_blank" title="Cetak Penduduk">
                        <i class="fa fa-print"></i> Cetak Penduduk
                    </a>
                </div>

                <div class="box-body">
                    <div class="box-header with-border">
                        <h3 class="box-title">Biodata Penduduk (NIK : <?php echo e($penduduk->nik); ?>)</h3>
                        <br>
                        <p class="kecil">
                            Terdaftar pada:
                            <i class="fa fa-clock-o"></i> <?php echo e(Carbon::createFromFormat('Y-m-d H:i:s', $penduduk->created_at)->isoFormat('D MMMM Y')); ?></i>
                        </p>
                        <p class="kecil">
                            Terakhir diubah:
                            <i class="fa fa-clock-o"></i> <?php echo e(Carbon::createFromFormat('Y-m-d H:i:s', $penduduk->updated_at)->isoFormat('D MMMM Y')); ?>

                            <i class="fa fa-user"></i> Administrator
                        </p>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <tr>
                                <td colspan="3">
                                    <img src="<?php echo e(url('/gambar/gambar_kepala_user.png')); ?>" class="profile-user-img img-responsive img-circle">
                                </td>
                            </tr>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <tbody>
                                        <tr>
                                            <td>Status Dasar</td>
                                            <td >:</td>
                                            <td>
                                                <?php echo e($penduduk->getStatusDasar->nama); ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="300">Nama</td>
                                            <td width="1">:</td>
                                            <td><?php echo e($penduduk->nama); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Kartu Keluarga</td><td >:</td>
                                            <td><?php echo e($penduduk->kk_sebelumnya); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Hubungan Dalam Keluarga</td>
                                            <td>:</td>
                                            <td>
                                                <?php if(empty($penduduk->getHubungan->nama)): ?>

                                                <?php else: ?>
                                                <?php echo e($penduduk->getHubungan->nama); ?>

                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td >:</td>
                                            <td>
                                                <?php if(empty($penduduk->getKelamin->nama)): ?>

                                                <?php else: ?>
                                                <?php echo e($penduduk->getKelamin->nama); ?>

                                                <?php endif; ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Agama</td>
                                            <td >:</td>
                                            <td>
                                                <?php if(empty($penduduk->getAgama->nama)): ?>

                                                <?php else: ?>
                                                <?php echo e($penduduk->getAgama->nama); ?>

                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th colspan="3" class="subtitle_head">
                                                <strong>DATA KELAHIRAN</strong>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>Tempat / Tanggal Lahir</td>
                                            <td>:</td>
                                            <td>
                                                <?php echo e($penduduk->tempat_lahir); ?> /
                                                <?php
                                                    $date = Carbon::parse($penduduk->tgl_lahir);
                                                    echo $date->isoFormat('D MMMM Y');
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Anak Ke</td>
                                            <td >:</td>
                                            <td><?php echo e($penduduk->kelahiran_ke); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Saudara</td>
                                            <td >:</td>
                                            <td><?php echo e($penduduk->jumlah_saudara); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Berat Lahir</td>
                                            <td >:</td>
                                            <td><?php echo e($penduduk->berat_lahir); ?> Gram</td>
                                        </tr>
                                        <tr>
                                            <td>Panjang Lahir</td>
                                            <td >:</td>
                                            <td><?php echo e($penduduk->panjang_lahir); ?> cm</td>
                                        </tr>
                                        <tr>
                                            <th colspan="3" class="subtitle_head"><strong>PENDIDIKAN, PEKERJAAN dan Kewarganegaraan</strong></th>
                                        </tr>
                                        <tr>
                                            <td>Pendidikan sedang ditempuh</td>
                                            <td >:</td>
                                            <td>
                                                <?php if(empty($penduduk->getPendidikan->nama)): ?>

                                                <?php else: ?>
                                                <?php echo e($penduduk->getPendidikan->nama); ?>

                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pekerjaan</td>
                                            <td >:</td>
                                            <td>
                                                <?php if(empty($penduduk->getPekerjaan->nam)): ?>

                                                <?php else: ?>
                                                <?php echo e($penduduk->getPekerjaan->nama); ?>

                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Warga Negara</td>
                                            <td >:</td>
                                            <td>
                                                <?php if(empty($penduduk->getWargaNegara->nama)): ?>

                                                <?php else: ?>
                                                <?php echo e($penduduk->getWargaNegara->nama); ?>

                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th colspan="3" class="subtitle_head"><strong>ORANG TUA</strong></th>
                                        </tr>
                                        <tr>
                                            <td>NIK Ayah</td>
                                            <td >:</td>
                                            <td><?php echo e($penduduk->nik_ayah); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Ayah</td>
                                            <td >:</td>
                                            <td><?php echo e($penduduk->nama_ayah); ?></td>
                                        </tr>
                                        <tr>
                                            <td>NIK Ibu</td>
                                            <td >:</td>
                                            <td><?php echo e($penduduk->nik_ibu); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Ibu</td>
                                            <td >:</td>
                                            <td><?php echo e($penduduk->nama_ibu); ?></td>
                                        </tr>
                                        <tr>
                                            <th colspan="3" class="subtitle_head"><strong>ALAMAT</strong></th>
                                        </tr>
                                        <tr>
                                            <td>Nomor Telepon</td>
                                            <td >:</td>
                                            <td><?php echo e($penduduk->telepon); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Dusun</td>
                                            <td >:</td>
                                            <td>
                                                <?php if(empty($penduduk->getDusun->nama)): ?>

                                                <?php else: ?>
                                                <?php echo e($penduduk->getDusun->dusun); ?>

                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>RT/ RW</td>
                                            <td >:</td>
                                            <td>
                                                <?php if(empty($penduduk->getRt->rt)): ?>

                                                <?php else: ?>
                                                <?php echo e($penduduk->getRt->rt); ?>

                                                <?php endif; ?>
                                                /
                                                <?php if(empty($penduduk->getRw->rw)): ?>

                                                <?php else: ?>
                                                <?php echo e($penduduk->getRw->rw); ?>

                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th colspan="3" class="subtitle_head"><strong>STATUS PERKAWINAN DAN KESEHATAN</strong></th>
                                        </tr>
                                        <tr>
                                            <td>Status Kawin</td>
                                            <td >:</td>
                                            <td>
                                                <?php if(empty($penduduk->getKawin->nama)): ?>

                                                <?php else: ?>
                                                <?php echo e($penduduk->getKawin->nama); ?>

                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Golongan Darah</td>
                                            <td >:</td>
                                            <td>TIDAK TAHU</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/penduduk/show.blade.php ENDPATH**/ ?>