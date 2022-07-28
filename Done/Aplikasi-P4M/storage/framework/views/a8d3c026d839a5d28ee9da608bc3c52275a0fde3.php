<?php $__env->startSection('title', 'Data Kotak Pesan'); ?>

<?php $__env->startSection('page_content'); ?>

<section class="content-header">
    <h1>
        <?php echo $__env->yieldContent("title"); ?>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(url('/page/admin/dashboard')); ?>">
                <i class="fa fa-home"></i> Home
            </a>
        </li>
        <li class="active"><?php echo $__env->yieldContent("title"); ?></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-envelope-o"></i> Kotak Pesan
                    </h3>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="kontaktable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">No. HP</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data_kontak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kontak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($kontak->nama); ?></td>
                                    <td class="text-center"><?php echo e($kontak->email); ?></td>
                                    <td class="text-center"><?php echo e($kontak->no_hp); ?></td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
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

<script>
    $(function (){
        $('#kontaktable').DataTable({
            columnDefs: [
                { orderable: false, targets: [0,4] }
            ],
        })
    })
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/kontak/index.blade.php ENDPATH**/ ?>