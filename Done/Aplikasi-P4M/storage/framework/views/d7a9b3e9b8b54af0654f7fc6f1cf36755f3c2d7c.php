<?php $__env->startSection('title', 'Form Tambah Penduduk Masuk'); ?>

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
            <a href="<?php echo e(url('/page/admin/kependudukan/keluarga')); ?>">
                Data Keluarga
            </a>
        </li>
        <li class="active"><?php echo $__env->yieldContent('title'); ?></li>
    </ol>
</section>

<section class="content">
    <form action="<?php echo e(url('/page/admin/kependudukan/keluarga/tambah_data_penduduk_masuk/')); ?>" method="POST" enctype="multipart/form-data" id="formTambahKPendudukLahir">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header">
                        <a href="<?php echo e(url('/page/admin/kependudukan/keluarga')); ?>" class="btn btn-social btn-flat btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"  title="Kembali Ke Daftar Penduduk">
                            <i class="fa fa-arrow-circle-left "></i>Kembali Ke Daftar Keluarga
                        </a>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label for="nomor_kk"> Nomor KK </label>
                                    <input type="text" id="no_kk" name="no_kk" class="form-control input-sm nik" placeholder="Nomor KK">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group bg-primary" style="padding:10px">
                    <strong>DATA KEPALA KELUARGA :</strong>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="penduduk profile-user-img img-responsive img-preview" style="border-radius: 35px; width: 200px; height: 200px; margin-bottom: 15px" src="<?php echo e(url('/gambar/gambar_kepala_user.png')); ?>" alt="Foto Penduduk">
                        <div class="input-group input-group-sm">
                            <input  type="text" class="form-control" id="file_path4" placeholder="Masukkan Gambar">
                            <input type="file" class="hidden" id="file4" name="foto" onchange="previewImage()">
                            <span class="input-group-btn">
                                <button  type="button" class="btn btn-info btn-flat" id="file_browser4">
                                    <i class="fa fa-upload"></i> Upload
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header">
                        <a href="<?php echo e(url('/page/admin/kependudukan/penduduk/')); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Data Penduduk"><i class="fa fa-arrow-circle-o-left"></i>Kembali Ke Daftar Penduduk</a>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="tgl_peristiwa">Tanggal Pindah Masuk</label>
                                    <div class="input-group input-group-sm date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input class="form-control input-sm pull-right" id="tgl_5" name="tgl_peristiwa" type="date" value="<?php echo e(date('Y-m-d')); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class='form-group'>
                                    <label for="tgl_lapor">Tanggal Lapor</label>
                                    <div class="input-group input-group-sm date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input class="form-control input-sm pull-right" id="tgl_6" name="tgl_lapor" type="date" value="<?php echo e(date('Y-m-d')); ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group bg-info" style="padding: 5px;">
                                    <label class="text-right"><strong>DATA DIRI :</strong></label>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="nik"> NIK </label>
                                    <input type="text" name="nik" id="nik" class="form-control input-sm" placeholder="Masukkan NIK">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="nama"> Nama </label>
                                    <input type="text" name="nama" id="nama" class="form-control input-sm" placeholder="Masukkan Nama">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <label for="kk_sebelumnya"> Nomor KK Sebelumnya </label>
                                <input type="text" class="form-control input-sm" name="kk_sebelumnya" id="kk_sebelumnya" placeholder="No. KK Sebelumnya">
                            </div>
                            <div class="col-sm-4">
                                <label for="id_hubungan"> Hubungan Dalam Keluarga </label>
                                <select name="id_hubungan" id="id_hubungan" class="form-control input-sm select2">
                                    <option value="">- Pilih -</option>
                                    <?php $__currentLoopData = $data_hubungan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hubungan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($hubungan->id); ?>">
                                        <?php echo e($hubungan->nama); ?>

                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label for="id_sex"> Jenis Kelamin </label>
                                <select name="id_sex" id="id_sex" class="form-control input-sm">
                                    <option value="">- Pilih -</option>
                                    <?php $__currentLoopData = $data_kelamin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sex): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($sex->id); ?>">
                                        <?php echo e($sex->nama); ?>

                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="col-sm-7">
                                <label for="id_agama"> Agama </label>
                                <select name="id_agama" id="id_agama" class="form-control input-sm select2">
                                    <option value="">- Pilih -</option>
                                    <?php $__currentLoopData = $data_agama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agama): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($agama->id); ?>">
                                        <?php echo e($agama->nama); ?>

                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-sm-5">
                                <label for="contoh"> Status Penduduk </label>
                                <select name="" id="" class="form-control input-sm select2">
                                    <option value="">- Pilih -</option>
                                    <option value="">Tetap</option>
                                </select>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group bg-info" style="padding: 5px; margin-top: 15px;">
                                    <label class="text-right"><strong>DATA KELAHIRAN :</strong></label>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="akta_lahir"> Nomor Akta Kelahiran </label>
                                    <input type="text" name="akta_lahir" id="akta_lahir" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="tempat_lahir"> Tempat Lahir </label>
                                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control input-sm">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="tgl_lahir"> Tanggal Lahir </label>
                                    <div class="input-group input-group-sm date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input class="form-control input-sm pull-right datepicker" name="tgl_lahir" id="tgl_lahir" type="text" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="waktu_lahir"> Waktu Kelahiran </label>
                                    <div class="input-group input-group-sm date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input class="form-control input-sm pull-right timepicker" id="waktu_lahir" name="waktu_lahir" type="text" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for=""> Tempat Dilahirkan </label>
                                    <select name="" id="" class="form-control input-sm select2">
                                        <option value="">- Pilih -</option>
                                        <option value="">RS/RB</option>
                                        <option value="">PUSKESMAS</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="jenis_kelahiran"> Jenis Kelahiran </label>
                                    <select name="jenis_kelahiran" id="jenis_kelahiran" class="form-control input-sm">
                                        <option value="">- Pilih -</option>
                                        <option value="1">TUNGGAL</option>
                                        <option value="2">KEMBAR 2</option>
                                        <option value="3">KEMBAR 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="kelahiran_ke"> Anak Ke </label>
                                    <input type="text" name="kelahiran_ke" id="kelahiran_ke" class="form-control input-sm" min="1">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="berat_lahir"> Berat Lahir </label>
                                    <input type="text" name="berat_lahir" id="berat_lahir" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="panjang_lahir"> Panjang Lahir </label>
                                    <input type="text" name="panjang_lahir" id="panjang_lahir" class="form-control input-sm">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group bg-info" style="padding: 5px;">
                                    <label class="text-right"><strong>Pendidikan dan Pekerjaan :</strong></label>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="id_pendidikan"> Pendidikan Dalam KK </label>
                                    <select name="id_pendidikan" id="id_pendidikan" class="form-control input-sm select2">
                                        <option value="">- Pilih -</option>
                                        <?php $__currentLoopData = $data_pendidikan_kk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pendidikan_kk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($pendidikan_kk->id); ?>">
                                            <?php echo e($pendidikan_kk->nama); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="id_pendidikan_sedang"> Pendidikan Sedang Ditempuh </label>
                                    <select name="id_pendidikan_sedang" id="id_pendidikan_sedang" class="form-control input-sm select2">
                                        <option value="">- Pilih -</option>
                                        <?php $__currentLoopData = $data_pendidikan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pendidikan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($pendidikan->id); ?>">
                                            <?php echo e($pendidikan->nama); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="id_pekerjaan"> Pekerjaan </label>
                                    <select name="id_pekerjaan" id="id_pekerjaan" class="form-control input-sm select2">
                                        <option value="">- Pilih -</option>
                                        <?php $__currentLoopData = $data_pekerjaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pekerjaan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($pekerjaan->id); ?>">
                                            <?php echo e($pekerjaan->nama); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group bg-info" style="padding: 5px;">
                                    <label class="text-right"><strong>DATA KEWARGANEGARAAN</strong></label>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="id_warga_negara"> Status Warga Negara </label>
                                    <select name="id_warga_negara" id="id_warga_negara" class="form-control input-sm select2">
                                        <option value="">- Pilih -</option>
                                        <?php $__currentLoopData = $data_warganegara; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warganegara): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($warganegara->id); ?>">
                                            <?php echo e($warganegara->nama); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group bg-info" style="padding: 5px;">
                                    <label class="text-right"><strong>DATA ORANG TUA</strong></label>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nik_ayah"> NIK Ayah </label>
                                    <input type="text" name="nik_ayah" id="nik_ayah" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nama_ayah"> Nama Ayah </label>
                                    <input type="text" name="nama_ayah" id="nama_ayah" class="form-control input-sm">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nik_ibu"> NIK Ibu </label>
                                    <input type="text" name="nik_ibu" id="nik_ibu" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nama_ibu"> Nama Ibu </label>
                                    <input type="text" name="nama_ibu" id="nama_ibu" class="form-control input-sm">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group bg-info" style="padding: 5px;">
                                    <label class="text-right"><strong>Alamat</strong></label>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="alamat_sekarang"> Alamat KK </label>
                                    <input type="text" name="alamat_sekarang" id="alamat_sekarang" class="form-control input-sm">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="id_dusun"> Dusun KK </label>
                                    <select name="id_dusun" id="id_dusun" class="form-control input-sm select2">
                                        <option value="">- Pilih -</option>
                                        <?php $__currentLoopData = $data_dusun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dusun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($dusun->id); ?>">
                                            <?php echo e($dusun->dusun); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="id_rw"> RW KK </label>
                                    <select name="id_rw" id="id_rw" class="form-control input-sm select2">
                                        <option value="">- Pilih -</option>
                                        <?php $__currentLoopData = $data_rw; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rw): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($rw->id); ?>">
                                            <?php echo e($rw->rw); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="id_rt"> RT KK </label>
                                    <select name="id_rt" id="id_rt" class="form-control input-sm select2">
                                        <option value="">- Pilih -</option>
                                        <?php $__currentLoopData = $data_rt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($rt->id); ?>">
                                            <?php echo e($rt->rt); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="telepon"> Nomor Telepon </label>
                                    <input type="text" name="telepon" id="telepon" class="form-control input-sm">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email"> Alamat Email </label>
                                    <input type="email" name="email" id="email" class="form-control input-sm">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="alamat_sebelumnya"> Alamat Sebelumnya </label>
                                    <input type="text" name="alamat_sebelumnya" id="alamat_sebelumnya" class="form-control input-sm">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group bg-info" style="padding: 5px;">
                                    <label class="text-right"><strong>STATUS PERKAWINAN</strong></label>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for=""> Status Perkawinan </label>
                                    <select name="" id="" class="form-control input-sm">
                                        <option value="">- Pilih -</option>
                                        <?php $__currentLoopData = $data_kawin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kawin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($kawin->id); ?>">
                                            <?php echo e($kawin->nama); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="akta_perkawinan"> No. Akta Nikah </label>
                                    <input type="text" name="akta_perkawinan" id="akta_perkawinan" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="tanggal_perkawinan"> Tanggal Perkawinan </label>
                                    <div class="input-group input-group-sm date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input class="form-control input-sm pull-right datepicker" name="tanggal_perkawinan" id="tanggal_perkawinan" type="text" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="akta_perceraian"> Akta Perceraian </label>
                                    <input type="text" name="akta_perceraian" id="akta_perceraian" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="tanggal_perceraian"> Tanggal Perceraian </label>
                                    <div class="input-group input-group-sm date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input class="form-control input-sm pull-right datepicker" name="tanggal_perceraian" id="tanggal_perceraian" type="text" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group bg-info" style="padding: 5px;">
                                    <label class="text-right"><strong>DATA KESEHATAN</strong></label>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="id_golongan_darah"> Golongan Darah </label>
                                    <select name="id_golongan_darah" id="id_golongan_darah" class="form-control input-sm select2">
                                        <option value="">- Pilih -</option>
                                        <?php $__currentLoopData = $data_darah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $darah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($darah->id); ?>">
                                            <?php echo e($darah->nama); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="id_cacat"> Cacat </label>
                                    <select name="id_cacat" id="id_cacat" class="form-control input-sm select2">
                                        <option value="">- Pilih -</option>
                                        <?php $__currentLoopData = $data_cacat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cacat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($cacat->id); ?>">
                                            <?php echo e($cacat->nama); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="id_sakit_menahun"> Sakit Menahun </label>
                                    <select name="id_sakit_menahun" id="id_sakit_menahun" class="form-control input-sm select2">
                                        <option value="">- Pilih -</option>
                                        <?php $__currentLoopData = $data_sakit_menahun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sakit_menahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($sakit_menahun->id); ?>">
                                            <?php echo e($sakit_menahun->nama); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="reset" class="btn btn-social btn-warning btn-flat btn-sm" title="Reset">
                            <i class="fa fa-refresh"></i> Reset
                        </button>
                        <button type="submit" class="btn btn-social btn-flat btn-info btn-sm pull-right">
                            <i class="fa fa-plus"></i> Tambah
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>

<script src="<?php echo e(url('backend/template/bower_components/moment/min/moment.min.js')); ?>"></script>
<script src="<?php echo e(url('backend/template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')); ?>"></script>
<script src="<?php echo e(url('backend/template/plugins/timepicker/bootstrap-datetimepicker.min.js')); ?>"></script>

<script>
    function previewImage() {
        const image = document.querySelector("#file4");
        const imgPreview = document.querySelector(".img-preview");

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

    $('#file_browser4').click(function(e)
	{
		e.preventDefault();
		$('#file4').click();
	});
	$('#file4').change(function()
	{
		$('#file_path4').val($(this).val());
	});
	$('#file_path4').click(function()
	{
		$('#file_browser4').click();
	});

    $(function() {
        $('.datepicker').datetimepicker({
            locale:'id',
            format: 'YYYY-MM-DD'
        });

        $('.timepicker').datetimepicker({
            format: 'HH:mm',
            locale:'id'
        });
    })

    ! function(a, i, r) {
        var e = {};
        e.UTIL = {
            setupFormValidation: function() {
                a("#formTambahKPendudukLahir").validate({
                    ignore: "",
                    rules: {
                        foto: {
                            accept: !0
                        },
                        tgl_peristiwa: {
                            required: !0,
                            date: true
                        },
                        tgl_lapor: {
                            required: !0,
                            date: true
                        },
                        nik: {
                            required: !0,
                            number: !0,
                            minlength: 16,
                            maxlength: 16,
                        },
                        no_kk: {
                            required: !0,
                            number: !0,
                            minlength: 16,
                            maxlength: 16,
                        },
                        kk_sebelumnya: {
                            number: !0,
                            minlength: 16,
                            maxlength: 16,
                        },
                        nama: {
                            required: !0
                        },
                        kk_level: {
                            required: !0
                        },
                        id_sex: {
                            required: !0
                        },
                        id_agama: {
                            required: !0
                        },
                        tempat_lahir: {
                            required: !0
                        },
                        tgl_lahir: {
                            required: !0
                        },
                        waktu_lahir: {
                            required: !0
                        },
                        kelahiran_ke: {
                            required: !0
                        },
                        berat_lahir: {
                            required: !0
                        },
                        panjang_lahir: {
                            required: !0
                        },
                        id_pendidikan: {
                            required: !0
                        },
                        id_pendidikan_sedang: {
                            required: !0
                        },
                        id_pekerjaan: {
                            required: !0
                        },
                        id_warga_negara: {
                            required: !0
                        },
                        nik_ayah: {
                            required: !0,
                            number: !0,
                            minlength: 16,
                            maxlength: 16,
                        },
                        nama_ayah: {
                            required: !0
                        },
                        nik_ibu: {
                            required: !0,
                            number: !0,
                            minlength: 16,
                            maxlength: 16,
                        },
                        nama_ibu: {
                            required: !0
                        },
                        alamat_sekarang: {
                            required: !0
                        },
                        id_dusun: {
                            required: !0
                        },
                        id_rw: {
                            required: !0
                        },
                        id_rt: {
                            required: !0
                        },
                        akta_lahir: {
                            required: !0
                        },
                        alamat_sebelumnya: {
                            required: !0
                        }
                    },
                    messages: {
                        foto: {
                            accept: "Upload format gambar!"
                        },
                        tgl_lapor: {
                            required: "Tanggal lapor harap di isi!",
                            date: "Format : 2022-12-28"
                        },
                        tgl_peristiwa: {
                            required: "Tanggal peristiwa harap di isi!",
                            date: "Format : 2022-12-28"
                        },
                        akta_lahir: {
                            required: "Akta lahir harap di isi!"
                        },
                        nik: {
                            required: "NIK harap di isi!",
                            minlength: "Panjang NIK minimal 16!",
                            maxlength: "Panjang NIK maksimal 16!",
                            number: "Harap masukan angka!"
                        },
                        no_kk: {
                            required: "NIK harap di isi!",
                            minlength: "Panjang NIK minimal 16!",
                            maxlength: "Panjang NIK maksimal 16!",
                            number: "Harap masukan angka!"
                        },
                        kk_sebelumnya: {
                            minlength: "Panjang NIK minimal 16!",
                            maxlength: "Panjang NIK maksimal 16!",
                            number: "Harap masukan angka!"
                        },
                        nama: {
                            required: "Nama harap di isi!"
                        },
                        kk_level: {
                            required: "Hubungan keluarga harap di isi!"
                        },
                        id_sex: {
                            required: "Jenis kelamin harap di isi!"
                        },
                        id_agama: {
                            required: "Agama harap di isi!"
                        },
                        tempat_lahir: {
                            required: "Tempat lahir harap di isi!"
                        },
                        tgl_lahir: {
                            required: "Tanggal lahir harap di isi!"
                        },
                        waktu_lahir: {
                            required: "Waktu lahir harap di isi!"
                        },
                        kelahiran_ke: {
                            required: "Anak ke harap di isi!"
                        },
                        berat_lahir: {
                            required: "Berat lahir harap di isi!"
                        },
                        panjang_lahir: {
                            required: "Panjang lahir harap di isi!"
                        },
                        id_pendidikan: {
                            required: "Pendidikan harap di isi!"
                        },
                        id_pendidikan_sedang: {
                            required: "Pendidikan harap di isi!"
                        },
                        id_pekerjaan: {
                            required: "Pekerjaan harap di isi!"
                        },
                        id_warga_negara: {
                            required: "Warga negara harap di isi!"
                        },
                        nik_ayah: {
                            required: "NIK ayah harap di isi!",
                            minlength: "Panjang NIK minimal 16!",
                            maxlength: "Panjang NIK maksimal 16!",
                            number: "Harap masukan angka!"
                        },
                        nama_ayah: {
                            required: "Nama ayah harap di isi!"
                        },
                        nik_ibu: {
                            required: "NIK ibu harap di isi!",
                            minlength: "Panjang NIK minimal 16!",
                            maxlength: "Panjang NIK maksimal 16!",
                            number: "Harap masukan angka!"
                        },
                        nama_ibu: {
                            required: "Nama ibu harap di isi!"
                        },
                        alamat_sekarang: {
                            required: "Alamat kk harap di isi!"
                        },
                        id_dusun: {
                            required: "Dusun harap di isi!"
                        },
                        id_rw: {
                            required: "RW harap di isi!"
                        },
                        id_rt: {
                            required: "RT harap di isi!"
                        },
                        alamat_sebelumnya: {
                            required: "Alamat sebelumnya harap di isi!"
                        }
                    },
                    submitHandler: function(a) {
                        a.submit()
                    }
                })
            }
        }, a(r).ready(function(a) {
            e.UTIL.setupFormValidation()
        })
    }(jQuery, window, document);
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/kependudukan/keluarga/form_tambah_data_penduduk_masuk.blade.php ENDPATH**/ ?>