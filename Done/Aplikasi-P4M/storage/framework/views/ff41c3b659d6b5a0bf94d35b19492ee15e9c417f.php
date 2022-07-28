

<?php $__env->startSection('title', 'Data Program Bantuan'); ?>

<?php $__env->startSection('page_content'); ?>

<?php
    use App\Models\Model\ProgramPeserta;
?>

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
                    <a href="<?php echo e(url('/page/admin/program_bantuan/create')); ?>" class="btn btn-social btn-primary btn-flat btn-sm" title="Tambah Data">
                        <i class="fa fa-plus"></i> Tambah
                    </a>
                    <a href="" class="btn btn-social btn-info btn-success btn-flat btn-sm" title="Panduan">
                        <i class="fa fa-arrow-circle-right"></i> Panduan
                    </a>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped table-hover" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Aksi</th>
                                    <th>Nama Program</th>
                                    <th class="text-center">Asal Dana</th>
                                    <th class="text-center">Jumlah Peserta</th>
                                    <th class="text-center">Masa Berlaku</th>
                                    <th class="text-center">Sasaran</th>
                                    <th class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data_program_bantuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($loop->iteration); ?>.</td>
                                    <td class="text-center">
                                        <a href="<?php echo e(url('/page/admin/program_bantuan/'.$data->id."/rincian")); ?>" class="btn bg-purple btn-flat btn-sm" title="Rincian">
                                            <i class="fa fa-list-ol"></i>
                                        </a>
                                        <a href="" class="btn btn-warning btn-flat btn-sm" title="Ubah Data">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="" method="POST" style="display: inline;">
                                            <?php echo method_field("DELETE"); ?>
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-danger btn-flat btn-sm" title="Hapus Data">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td><?php echo e($data->nama); ?></td>
                                    <td class="text-center"><?php echo e($data->asal_dana); ?></td>
                                    <td class="text-center">
                                        <?php
                                           echo $count = ProgramPeserta::where("program_id", $data->id)
                                                                        ->count();
                                        ?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo e($data->tanggal_mulai); ?> - <?php echo e($data->tanggal_berakhir); ?>

                                    </td>
                                    <td class="text-center">
                                        <?php if($data->sasaran == 1): ?>
                                            Penduduk Peorangan
                                        <?php elseif($data->sasaran == 2): ?>
                                            Keluarga - KK
                                        <?php elseif($data->sasaran == 3): ?>
                                            Rumah Tangga
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center">
                                        <?php if($data->status == 1): ?>
                                            Aktif
                                        <?php elseif($data->status == 0): ?>
                                            Tidak Aktif
                                        <?php endif; ?>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/program_bantuan/data_program_bantuan.blade.php ENDPATH**/ ?>