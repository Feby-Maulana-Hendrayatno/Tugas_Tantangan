<?php $__env->startSection('title', 'Keluarga'); ?>

<?php $__env->startSection('page_content'); ?>

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
                    <div class="btn-group btn-group-vertical">
                        <a class="btn btn-social btn-flat btn-primary btn-sm" data-toggle="dropdown">
                            <i class="fa fa-plus"></i> Tambah KK Baru
                        </a>
                        <ul class="dropdown-menu" role="menu">
							<li>
								<a href="<?php echo e(url('/page/admin/kependudukan/keluarga/form_tambah_penduduk_masuk')); ?>" class="btn btn-social btn-flat btn-block btn-sm" title="Tambah Data Penduduk Masuk"><i class="fa fa-plus"></i> Tambah Penduduk Masuk</a>
							</li>
							<li>
								<a href="https://demo.opensid.or.id/keluarga/form_old" class="btn btn-social btn-flat btn-block btn-sm" title="Tambah Data KK dari keluarga yang sudah ter-input" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Tambah Data Kepala Keluarga"><i class="fa fa-plus"></i> Dari Penduduk Sudah Ada</a>
							</li>
						</ul>
                    </div>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Foto</th>
                                    <th>Nomor KK</th>
                                    <th>Kepala Keluarga</th>
                                    <th class="text-center">NIK</th>
                                    <th class="text-center">Jumlah Anggota</th>
                                    <th class="text-center">Tanggal Terdaftar</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/kependudukan/keluarga/data_keluarga.blade.php ENDPATH**/ ?>