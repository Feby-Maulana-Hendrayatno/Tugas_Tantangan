

<?php $__env->startSection('title', 'Data Struktur Pemerintahan'); ?>

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

<?php if($data_jabatan->count()): ?>
<?php if($data_pegawai->count()): ?>
<section class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-plus"></i> Tambah Struktur Pemerintahan
                    </h3>
                </div>
                <form id="tambahStruktur" action="<?php echo e(url('/page/admin/pemerintahan/struktur_pemerintahan')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="jabatan_id"> Jabatan </label>
                            <select name="jabatan_id" id="jabatan_id" class="form-control select2" style="width: 100%">
                                <option value="" selected>- Pilih -</option>
                                <?php $__currentLoopData = $data_jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                $cek_jabatan = App\Models\Model\StrukturPemerintahan::where('jabatan_id', $data->id)->first();
                                ?>
                                <?php if(!$cek_jabatan): ?>
                                <option value="<?php echo e($data->id); ?>">
                                    <?php echo e($data->nama_jabatan); ?>

                                </option>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pegawai_id"> Pegawai </label>
                            <select name="pegawai_id" id="pegawai_id" class="form-control select2" style="width: 100%;">
                                <option value="" selected>- Pilih -</option>
                                
                                    <?php $__currentLoopData = $data_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(empty($pegawai->id_penduduk)): ?>
                                    <option value="<?php echo e($pegawai->id); ?>"><?php echo e($pegawai->nama); ?></option>
                                    <?php else: ?>
                                    <option value="<?php echo e($pegawai->id); ?>"><?php echo e($penduduk->nama); ?></option>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="staf_id"> Turunan </label>
                                <select name="staf_id" id="staf_id" class="form-control select2" style="width: 100%">
                                    <option value="" selected>- Pilih -</option>
                                    <?php $__currentLoopData = $data_jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>">
                                        <?php echo e($data->nama_jabatan); ?>

                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-social btn-primary btn-flat btn-sm" title="Tambah Data">
                                <i class="fa fa-plus"></i> Tambah
                            </button>
                            <button type="reset" class="btn btn-social btn-warning btn-flat btn-sm" title="Reset">
                                <i class="fa fa-refresh"></i> Reset
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">
                            <i class="fa fa-sign-out"></i> Struktur Pemerintahan
                        </h3>
                        <div class="pull-right">
                            <a href="<?php echo e(url('/page/admin/pemerintahan/struktur_pemerintahan/show')); ?>" class="btn btn-social btn-default btn-flat btn-sm" title="Lihat Struktur">
                                <i class="fa fa-search"></i> Lihat Struktur Pemerintahan
                            </a>
                            <a href="<?php echo e(url('/page/admin/pemerintahan/struktur-organisasi')); ?>" target="_blank" class="btn btn-social btn-info btn-flat btn-sm pull-right" style="margin-left: 5px" title="Lihat">
                                <i class="fa fa-eye"></i> Preview
                            </a>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th>Jabatan</th>
                                        <th>Pegawai</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $data_struktur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($data->getJabatan->nama_jabatan); ?></td>
                                        <td><?php echo e($data->getPegawai->nama); ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo e(url('/page/admin/pemerintahan/struktur_pemerintahan/'.$data->id)); ?>/edit" class="btn btn-warning btn-sm" title="Ubah data">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="<?php echo e(url('/page/admin/pemerintahan/struktur_pemerintahan/'.$data->id)); ?>" method="POST" style="display: inline;">
                                                <?php echo method_field("DELETE"); ?>
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-danger btn-sm" title="Hapus Data">
                                                    <i class="fa fa-trash-o"></i>
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
    </section>
    <?php else: ?>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-danger">
                    <div class="box-header">
                        <i class="fa fa-bullhorn"></i>
                        <h3 class="box-title">Perhatian</h3>
                    </div>
                    <div class="box-body">
                        <div class="callout callout-danger">
                            <h4>Tidak Bisa Menginputkan Data</h4>

                            <p>
                                Karena <b> Data Pegawai </b> Masih Kosong. <a href="<?php echo e(url('/page/admin/pemerintahan/pegawai')); ?>">Silahkan Inputkan Data Pegawai Terlebih Dahulu</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <?php else: ?>
    <?php if($data_pegawai->count()): ?>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-danger">
                    <div class="box-header">
                        <i class="fa fa-bullhorn"></i>
                        <h3 class="box-title">Perhatian</h3>
                    </div>
                    <div class="box-body">
                        <div class="callout callout-danger">
                            <h4>Tidak Bisa Menginputkan Data</h4>

                            <p>
                                Karena <b> Data Jabatan </b> Masih Kosong. <a href="<?php echo e(url('/page/admin/pemerintahan/jabatan')); ?>">Silahkan Inputkan Data Jabatan Terlebih Dahulu</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php else: ?>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-danger">
                    <div class="box-header">
                        <i class="fa fa-bullhorn"></i>
                        <h3 class="box-title">Perhatian</h3>
                    </div>
                    <div class="box-body">
                        <div class="callout callout-danger">
                            <h4>Tidak Bisa Menginputkan Data</h4>

                            <p>
                                Karena <b> Data Jabatan </b> Masih Kosong. <a href="<?php echo e(url('/page/admin/pemerintahan/jabatan')); ?>">Silahkan Inputkan Data Jabatan Terlebih Dahulu</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <?php endif; ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('page_scripts'); ?>
    <script>
        (function($,W,D) {
            var JQUERY4U = {};
            JQUERY4U.UTIL =
            {
                setupFormValidation: function()
                {
                    $("#tambahStruktur").validate({
                        ignore: "",
                        rules: {
                            jabatan_id: {
                                required: true
                            },
                            pegawai_id: {
                                required: true
                            },
                        },

                        messages: {
                            jabatan_id: {
                                required: "Jabatan harap di isi!"
                            },
                            pegawai_id: {
                                required: "Pegawai harap di isi!"
                            },
                        },

                        submitHandler: function(form) {
                            form.submit();
                        }
                    });
                }
            }

            $(D).ready(function($) {
                JQUERY4U.UTIL.setupFormValidation();
            });

        })(jQuery, window, document);
    </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/pemerintahan/struktur_pemerintahan/index.blade.php ENDPATH**/ ?>