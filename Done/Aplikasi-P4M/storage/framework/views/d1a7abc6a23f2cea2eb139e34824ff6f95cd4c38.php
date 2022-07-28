<?php $__env->startSection('page_content'); ?>

<section class="content-header">
    <h1>
        Berita
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(url('/page/admin/dashboard')); ?>">
                <i class="fa fa-dashboard"></i> Dashboard
            </a>
        </li>
        <li class="active">Data Berita</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                        Data Berita
                    </h3>
                    <div class="pull-right">
                        <a href="<?php echo e(url('/page/admin/web/artikel/create')); ?>" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus"></i> Tambah Data
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    <table id="beritaTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Judul Berita</th>
                                <th class="text-center">Kategori</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data_artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                    <td class="text-center"><?php echo e($artikel->judul); ?></td>
                                    <td class="text-center"><?php echo e($artikel->getCategory->nama); ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo e(url('/page/admin/web/artikel/'.$artikel->slug)); ?>/edit" class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="<?php echo e(url('/page/admin/web/artikel/')); ?>/<?php echo e($artikel->slug); ?>" method="POST" style="display: inline;">
                                            <?php echo method_field("DELETE"); ?>
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </form>
                                        <a href="<?php echo e(url('/berita/'.$artikel->slug)); ?>" class="btn btn-info btn-sm" target="_blank">
                                            <i class="fa fa-eye"></i>
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
</section>


<script>
    $(function (){
        $('#beritaTable').DataTable({
            columnDefs: [
                { orderable: false, targets: [0,3] }
            ],
        })
    })
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/artikel/index.blade.php ENDPATH**/ ?>