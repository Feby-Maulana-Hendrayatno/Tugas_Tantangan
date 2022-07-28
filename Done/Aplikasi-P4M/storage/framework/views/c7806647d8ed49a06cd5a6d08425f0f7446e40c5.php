

<?php $__env->startSection('title', 'Tambah Penduduk'); ?>

<?php $__env->startSection('page_content'); ?>

<link rel="stylesheet" href="<?php echo e(url('backend/template/plugins/timepicker/bootstrap-timepicker.min.css')); ?>">

<style>
  .subtitle_head {
    padding: 10px 50px 10px 5px;
    background-color: #b5f2a2;
    margin: 15px 0px 10px 0px;
    text-align: left;
    color: #555;
  }
</style>

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
    <li>
      <a href="<?php echo e(url('/page/admin/kependudukan/penduduk')); ?>">Dashboard</a>
    </li>
    <li class="active"><?php echo $__env->yieldContent('title'); ?></li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-12">
      <?php if($errors->any()): ?>
      <div class="alert alert-danger">
        <ul>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
      <?php endif; ?>
      <div class="box">
        <div class="box-header">
          <a href="<?php echo e(url('page/admin/kependudukan/penduduk')); ?>" class="btn btn-social btn-flat btn-info btn-sm"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a>
        </div>
        <form action="<?php echo e(url('page/admin/kependudukan/penduduk')); ?>" method="post">
          <?php echo csrf_field(); ?>
          <div class="box-body">
            <div class="form-group subtitle_head text-uppercase">
              <strong>Data Diri :</strong>
            </div>
            
            <div class="row">
              <div class="form-group col-md-5">
                <label for="nik">NIK</label>
                <input type="text" name="nik" class="form-control input-sm" id="nik" value="<?php echo e(old('nik')); ?>">
              </div>
              <div class="form-group col-md-7">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control input-sm" id="nama" value="<?php echo e(old('nama')); ?>">
              </div>
            </div>
            
            <div class="row">
              <div class="form-group col-md-3">
                <label for="kk_sebelumnya">No. KK Sebelumnya</label>
                <input type="text" name="kk_sebelumnya" class="form-control input-sm" id="kk_sebelumnya" value="<?php echo e(old('kk_sebelumnya')); ?>">
              </div>
              <div class="form-group col-md-3">
                <label for="id_hubungan">Hubungan dalam keluarga</label>
                <select name="id_hubungan" id="id_hubungan" class="form-control input-sm">
                  <?php $__currentLoopData = $data_hubungan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hubungan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($hubungan->id); ?>" <?php echo e(old('id_hubungan')==$hubungan->id ? 'selected' : ''); ?>><?php echo e($hubungan->nama); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="id_sex">Jenis Kelamin</label>
                <select name="id_sex" id="id_sex" class="form-control input-sm">
                  <?php $__currentLoopData = $data_kelamin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelamin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($kelamin->id); ?>" <?php echo e(old('id_sex')==$kelamin->id ? 'selected' : ''); ?>><?php echo e($kelamin->nama); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="id_agama">Agama</label>
                <select name="id_agama" id="id_agama" class="form-control input-sm">
                  <?php $__currentLoopData = $data_agama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agama): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($agama->id); ?>" <?php echo e(old('id_agama')==$agama->id ? 'selected' : ''); ?>><?php echo e($agama->nama); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
            </div>
            
            <div class="form-group subtitle_head text-uppercase">
              <strong>Data Kelahiran :</strong>
            </div>
            
            <div class="row">
              
              <div class="col-md-6">
                <div class="form-group">
                  <label for="tempat_lahir">Tempat Lahir</label>
                  <input type="text" class="form-control input-sm" id="tempat_lahir" name="tempat_lahir" value="<?php echo e(old('tempat_lahir')); ?>">
                </div>
              </div>
              
              <div class="col-md-3">
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker" name="tgl_lahir" value="<?php echo e(old('tgl_lahir')); ?>">
                  </div>
                </div>
              </div>
              
              <div class="col-md-3">
                <div class="bootstrap-timepicker">
                  <div class="form-group">
                    <label>Waktu Lahir</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                      </div>
                      <input type="text" class="form-control timepicker" name="waktu_lahir"  value="<?php echo e(old('waktu_lahir')); ?>">
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            
            <div class="row">
              
              <div class="col-md-3">
                <div class="form-group">
                  <label for="kelahiran_ke">Anak Ke</label>
                  <input type="number" class="form-control input-sm" id="kelahiran_ke" name="kelahiran_ke"  value="<?php echo e(old('kelahiran_ke')); ?>">
                </div>
              </div>
              
              <div class="col-md-3">
                <div class="form-group">
                  <label for="jumlah_saudara">Jumlah Saudara</label>
                  <input type="number" class="form-control input-sm" id="jumlah_saudara" name="jumlah_saudara"  value="<?php echo e(old('jumlah_saudara')); ?>">
                </div>
              </div>
              
              <div class="col-md-3">
                <div class="form-group">
                  <label for="berat_lahir">Berat Lahir <code>(Gram)</code> </label>
                  <input type="text" class="form-control input-sm" id="berat_lahir" name="berat_lahir" value="<?php echo e(old('berat_lahir')); ?>">
                </div>
              </div>
              
              <div class="col-md-3">
                <div class="form-group">
                  <label for="panjang_lahir">Panjang Lahir <code>(Cm)</code> </label>
                  <input type="text" class="form-control input-sm" id="panjang_lahir" name="panjang_lahir"  value="<?php echo e(old('panjang_lahir')); ?>">
                </div>
              </div>
              
            </div>
            
            <div class="form-group subtitle_head text-uppercase">
              <strong>Pendidikan, Pekerjaan dan Kewarganegaraan :</strong>
            </div>
            
            <div class="row">
              
              <div class="col-md-4">
                <div class="form-group">
                  <label for="id_pendidikan">Pendidikan</label>
                  <select name="id_pendidikan" id="id_pendidikan" class="form-control input-sm">
                    <?php $__currentLoopData = $data_pendidikan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pendidikan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($pendidikan->id); ?>" <?php echo e(old('id_pendidikan')==$pendidikan->id ? 'selected' : ''); ?>><?php echo e($pendidikan->nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="form-group">
                  <label for="id_pekerjaan">Pekerjaan</label>
                  <select name="id_pekerjaan" id="id_pekerjaan" class="form-control input-sm">
                    <?php $__currentLoopData = $data_pekerjaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pekerjaan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($pekerjaan->id); ?>"  <?php echo e(old('id_pekerjaan')==$pekerjaan->id ? 'selected' : ''); ?>><?php echo e($pekerjaan->nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="form-group">
                  <label for="id_warga_negara">Status Warga</label>
                  <select name="id_warga_negara" id="id_warga_negara" class="form-control input-sm">
                    <?php $__currentLoopData = $data_warganegara; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warganegara): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($warganegara->id); ?>"  <?php echo e(old('id_warga_negara')==$warganegara->id ? 'selected' : ''); ?>><?php echo e($warganegara->nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>
              
            </div>
            
            <div class="form-group subtitle_head text-uppercase">
              <strong>Data Orang Tua :</strong>
            </div>
            
            <div class="row">
              
              <div class="col-md-5">
                <div class="form-group">
                  <label for="nik_ayah">NIK Ayah</label>
                  <input type="text" name="nik_ayah" class="form-control input-sm" id="nik_ayah" value="<?php echo e(old('nik_ayah')); ?>">
                </div>
              </div>
              <div class="col-md-7">
                <div class="form-group">
                  <label for="nama_ayah">Nama Ayah</label>
                  <input type="text" value="<?php echo e(old('nama_ayah')); ?>" name="nama_ayah" class="form-control input-sm" id="nama_ayah">
                </div>
              </div>
              
            </div>
            
            <div class="row">
              
              <div class="col-md-5">
                <div class="form-group">
                  <label for="nik_ibu">NIK Ibu</label>
                  <input type="text" name="nik_ibu" value="<?php echo e(old('nik_ibu')); ?>" class="form-control input-sm" id="nik_ibu">
                </div>
              </div>
              <div class="col-md-7">
                <div class="form-group">
                  <label for="nama_ibu">Nama Ibu</label>
                  <input type="text" name="nama_ibu" value="<?php echo e(old('nama_ibu')); ?>" class="form-control input-sm" id="nama_ibu">
                </div>
              </div>
              
            </div>
            
            <div class="form-group subtitle_head text-uppercase">
              <strong>Status Perkawinan dan Kesehatan :</strong>
            </div>
            
            <div class="row">
              
              <div class="col-md-6">
                <div class="form-group">
                  <label for="status_kawin">Status Perkawinan</label>
                  <select class="form-control input-sm" name="status_kawin" id="status_kawin">
                    <?php $__currentLoopData = $data_kawin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kawin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($kawin->id); ?>" <?php echo e(old('id_status_kawin')==$kawin->id ? 'selected' : ''); ?>><?php echo e($kawin->nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="form-group">
                  <label for="id_golongan_darah">Golongan Darah</label>
                  <select name="id_golongan_darah" id="id_golongan_darah" class="form-control input-sm">
                    <?php $__currentLoopData = $data_darah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $darah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($darah->id); ?>" <?php echo e(old('id_golongan_darah')==$darah->id ? 'selected' : ''); ?>><?php echo e($darah->nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>
              
            </div>

            <div class="form-group subtitle_head text-uppercase">
              <strong>Alamat :</strong>
            </div>

            <div class="row">
              
              <div class="col-md-3">
                <div class="form-group">
                  <label for="telepon">Telepon</label>
                  <input type="text" class="form-control input-sm" name="telepon" id="telepon" value="<?php echo e(old('telepon')); ?>">
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="id_dusun">Dusun</label>
                  <select name="id_dusun" id="id_dusun" class="form-control input-sm">
                    <?php $__currentLoopData = $data_dusun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dusun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($dusun->id); ?>" <?php echo e($dusun->id == old('id_dusun')); ?>><?php echo e($dusun->dusun); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="id_rt">RT</label>
                  <select name="id_rt" id="id_rt" class="form-control input-sm">
                    <?php $__currentLoopData = $data_rt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($rt->id); ?>" <?php echo e($rt->id == old('id_rt')); ?>><?php echo e($rt->rt); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>
              
              <div class="col-md-3">
                <div class="form-group">
                  <label for="id_rw">RW</label>
                  <select name="id_rw" id="id_rw" class="form-control input-sm">
                    <?php $__currentLoopData = $data_rw; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rw): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($rw->id); ?>" <?php echo e($rw->id == old('id_rw')); ?>><?php echo e($rw->rw); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>

            </div>

          </div>
          
          <div class="box-footer">
            <button type="reset" class="btn btn-social btn-flat btn-warning btn-sm"><i class="fa fa-refresh"></i> Reset</button>
            
            <button class="btn btn-social btn-flat btn-info btn-sm pull-right"><i class="fa fa-check"></i> Simpan</button>
          </div>
          
        </form>
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
    $('#datepicker').datetimepicker({
      locale:'id',
      format: 'YYYY-MM-DD'
    });
    
    $('.timepicker').datetimepicker({
      format: 'HH:mm',
      locale:'id'
    });
  })
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/penduduk/create.blade.php ENDPATH**/ ?>