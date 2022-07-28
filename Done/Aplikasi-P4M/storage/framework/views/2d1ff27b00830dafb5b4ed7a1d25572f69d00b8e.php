<?php $__env->startSection('title', 'Sarana Agama'); ?>

<?php $__env->startSection('page_content'); ?>

<?php
    function selected($a, $b, $opt=0)
	{
		if ($a == $b)
		{
			if ($opt)
				echo "checked='checked'";
			else echo "selected='selected'";
		}
	}
?>

<section class="content-header">
    <h1>
        <?php echo $__env->yieldContent('title'); ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/page/admin">Dashboard</a></li>
        <li class="active"><?php echo $__env->yieldContent('title'); ?></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <a href="<?php echo e(url('/page/admin/program_bantuan')); ?>" class="btn btn-social btn-primary btn-flat btn-sm">
                        <i class="fa fa-arrow-left"></i> Kembali ke Daftar Program Bantuan
                    </a>
                    <a href="<?php echo e(url('/page/admin/program_bantuan/'.$detail->id.'/rincian')); ?>" class="btn btn-social btn-info btn-flat btn-sm">
                        <i class="fa fa-arrow-left"></i> Kembali ke Rincian Program Bantuan
                    </a>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5>
                                <b>Rincian Program</b>
                            </h5>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <tbody>
                                        <tr>
                                            <td width="20%">Nama Program</td>
                                            <td width="1%">:</td>
                                            <td>
                                                <?php echo e($detail->nama); ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sasaran Peserta</td>
                                            <td>:</td>
                                            <td>
                                                <?php if($detail->sasaran == 1): ?>
                                                Penduduk Perorangan
                                                <?php elseif($detail->sasaran == 2): ?>
                                                Keluarga - KK
                                                <?php elseif($detail->sasaran == 3): ?>
                                                Rumah Tangga
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Masa Berlaku</td>
                                            <td>:</td>
                                            <td>
                                                <?php echo e($detail->tanggal_mulai); ?> - <?php echo e($detail->tanggal_berakhir); ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan</td>
                                            <td>:</td>
                                            <td>
                                                <?php echo e($detail->deskripsi); ?>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5>
                                        <b>Tambah Peserta Program</b>
                                    </h5>
                                    <hr>
                                    <form id="main" name="main" method="POST" class="form-horizontal">
                                        <?php echo method_field("PUT"); ?>
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <label for="" class="col-sm-4 col-lg-3 "> Cari Nama Kepala Rumah Tangga</label>
                                            <div class="col-sm-9">
                                                <select name="nik" id="nik" class="form-control input-sm select2" onchange="formAction('main')" width="100%">
                                                    <option value="">- Pilih -</option>
                                                    <?php $__currentLoopData = $data_keluarga; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keluarga): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($keluarga->getDataPenduduk->nik); ?>">
                                                            NIK : <?php echo e($keluarga->getDataPenduduk->nik); ?> - <?php echo e($keluarga->getDataPenduduk->nama); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <?php if(empty($detail_keluarga)): ?>

                                        <?php else: ?>
                                            <?php if($detail_keluarga->nik_kepala): ?>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="box box-info box-solid">
                                                            <div class="box-header">
                                                                <i class="fa fa-user"></i>
                                                                <h3 class="box-title">
                                                                    Konfirmasi Peserta
                                                                </h3>
                                                            </div>
                                                            <div class="box-body">
                                                                <div class="form-group">
                                                                    <label class="col-sm-4 col-lg-5"> NIK Penduduk </label>
                                                                    <div class="col-sm-7">
                                                                        <input type="text" class="form-control input-sm" disabled value="<?php echo e($detail_keluarga->getDataPenduduk->nik); ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="" class="col-sm-4 col-lg-5"> Nama Peserta </label>
                                                                    <div class="col-sm-7">
                                                                        <input type="text" class="form-control input-sm" disabled value="<?php echo e($detail_keluarga->getDataPenduduk->nama); ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="" class="col-sm-4 col-lg-5"> Nomer KK </label>
                                                                    <div class="col-sm-7">
                                                                        <input type="text" class="form-control input-sm" disabled value="<?php echo e($detail_keluarga->no_kk); ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="" class="col-sm-4 col-lg-5"> Nama Kepala Keluarga </label>
                                                                    <div class="col-sm-7">
                                                                        <input type="text" class="form-control input-sm" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="" class="col-sm-4 col-lg-5"> Status KK </label>
                                                                    <div class="col-sm-7">
                                                                        <input type="text" class="form-control input-sm" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="" class="col-sm-4 col-lg-5"> Alamat Peserta </label>
                                                                    <div class="col-sm-7">
                                                                        <input type="text" class="form-control input-sm" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="" class="col-sm-4 col-lg-5"> Tempat Tanggal, Lahir Peserta </label>
                                                                    <div class="col-sm-7">
                                                                        <input type="text" class="form-control input-sm" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="" class="col-sm-4 col-lg-5"> Jenis Kelamin Peserta </label>
                                                                    <div class="col-sm-7">
                                                                        <input type="text" class="form-control input-sm" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="" class="col-sm-4 col-lg-5"> Umur Peserta </label>
                                                                    <div class="col-sm-7">
                                                                        <input type="text" class="form-control input-sm" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="" class="col-sm-4 col-lg-5"> Pendidikan Peserta </label>
                                                                    <div class="col-sm-7">
                                                                        <input type="text" class="form-control input-sm" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="" class="col-sm-4 col-lg-5"> Warga Negara / Agama Peserta </label>
                                                                    <div class="col-sm-7">
                                                                        <input type="text" class="form-control input-sm" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="" class="col-sm-4 col-lg-5"> Bantuan Peserta Yang Sedang Diterima </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="box box-success box-solid">
                                                            <div class="box-header">
                                                                <i class="fa fa-credit-card"></i>
													            <h3 class="box-title">
                                                                    Identitas Pada Kartu Peserta
                                                                </h3>
                                                            </div>
                                                            <form action="<?php echo e(url('/page/admin/program_bantuan/tambah_data_peserta_bantuan')); ?>" method="POST" class="form-horizontal">
                                                                <?php echo csrf_field(); ?>
                                                                <input type="hidden" name="peserta" value="<?php echo e($detail_keluarga->no_kk); ?>">
                                                                <input type="hidden" name="program_id" value="<?php echo e($detail->id); ?>">
                                                                <input type="hidden" name="kartu_id_penduduk" value="<?php echo e($detail->id); ?>">
                                                                <div class="box-body">
                                                                    <div class="form-group">
                                                                        <label for="" class="col-sm-4 col-lg-4"> Nomor Kartu Peserta </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" name="" class="form-control input-sm" placeholder="Masukkan Nomor Kartu Peserta">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="kartu_peserta" class="col-sm-4 col-lg-4">Gambar Kartu Peserta</label>
                                                                        <div class="col-sm-8">
                                                                            <input type="file" name="kartu_peserta" id="kartu_peserta" class="form-control input-sm">
                                                                            <span class="help-block"><code> Kosongkan jika tidak ingin mengunggah gambar</code></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="kartu_nik" class="col-sm-4 col-lg-4"> NIK </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" name="kartu_nik" id="kartu_nik" class="form-control input-sm" placeholder="Masukkan NIK" value="<?php echo e($detail_keluarga->getDataPenduduk->nik); ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="kartu_nama" class="col-sm-4 col-lg-4"> Nama </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" name="kartu_nama" id="kartu_nama" class="form-control input-sm" placeholder="Masukkan Nama" value="<?php echo e($detail_keluarga->getDataPenduduk->nama); ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="kartu_tempat_lahir" class="col-sm-4 col-lg-4"> Tempat Lahir </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" name="kartu_tempat_lahir" id="kartu_tempat_lahir" class="form-control input-sm" placeholder="Masukkan Tempat Lahir" value="<?php echo e($detail_keluarga->getDataPenduduk->tempat_lahir); ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="kartu_tanggal_lahir" class="col-sm-4 col-lg-4"> Tanggal Lahir </label>
                                                                        <div class="col-sm-8">
                                                                            <div class="input-group date">
                                                                                <div class="input-group-addon">
                                                                                    <i class="fa fa-calendar"></i>
                                                                                </div>
                                                                                <input type="text" class="form-control pull-right datepicker" name="kartu_tanggal_lahir" placeholder="Tgl. Mulai" value="<?php echo e($detail_keluarga->getDataPenduduk->tgl_lahir); ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="kartu_alamat" class="col-sm-4 col-lg-4"> Alamat </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" name="kartu_alamat" id="kartu_alamat" class="form-control input-sm" placeholder="Masukkan Data Alamat" value="<?php echo e($detail_keluarga->getDataPenduduk->alamat); ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="box-footer">
                                                                    <button type="reset" class="btn btn-social btn-danger btn-flat btn-sm">
                                                                        <i class="fa fa-times"></i> Batal
                                                                    </button>
                                                                    <button type="submit" class="btn btn-social btn-primary btn-flat btn-sm pull-right">
                                                                        <i class="fa fa-check"></i> Tambah
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>

<script src="<?php echo e(url('backend/template/bower_components/moment/min/moment.min.js')); ?>"></script>
<script src="<?php echo e(url('backend/template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')); ?>"></script>
<script src="<?php echo e(url('backend/template/plugins/timepicker/bootstrap-datetimepicker.min.js')); ?>"></script>

<script>
    $(function() {
        $('.datepicker').datetimepicker({
            locale:'id',
            format: 'YYYY-MM-DD'
        });
    })

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
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/program_bantuan/tambah_peserta.blade.php ENDPATH**/ ?>