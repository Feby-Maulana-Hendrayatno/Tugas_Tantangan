<?php $__env->startSection('title', 'Data Artikel'); ?>

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

<?php if($data_kategori->count()): ?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-book"></i> Artikel
                    </h3>
                    <div class="pull-right">
                        <a href="<?php echo e(url('/page/admin/web/artikel/create')); ?>" class="btn btn-social btn-primary btn-flat btn-sm" title="Tambah Data">
                            <i class="fa fa-plus"></i> Tambah Data
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    <table id="beritaTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="">Judul Artikel</th>
                                <th class="text-center">Pengunjung</th>
                                <th class="text-center">Kategori</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data_artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                    <td class=""><?php echo e($artikel->judul); ?></td>
                                    <td class="text-center">
                                        <div class="badge btn-info"><?php echo e($artikel->getCount->count()); ?> Orang</div>
                                    </td>
                                    <td class="text-center"><?php echo e($artikel->getCategory->nama); ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo e(url('/page/admin/web/artikel/'.$artikel->slug)); ?>/edit" class="btn btn-warning btn-sm" title="Edit Data">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="<?php echo e(url('/page/admin/web/artikel/'.$artikel->slug)); ?>/komentar" class="btn bg-info btn-sm" title="Komentar">
                                            <i class="fa fa-comment-o"></i>
                                        </a>
                                        <form action="<?php echo e(url('/page/admin/web/artikel/')); ?>/<?php echo e($artikel->id); ?>" method="POST" style="display: inline;">
                                            <?php echo method_field("DELETE"); ?>
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="image" value="<?php echo e($artikel->image); ?>">
                                            <button type="submit" class="btn btn-danger btn-sm" title="Hapus Data">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </form>
                                        <a href="<?php echo e(url('/artikel/'.$artikel->slug)); ?>" class="btn btn-info btn-sm" target="_blank" title="Lihat">
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
                            Karena <b> Data Kategori </b> Masih Kosong. <a href="<?php echo e(url('/page/admin/web/kategori')); ?>">Silahkan Inputkan Data Kategori Terlebih Dahulu</a>
                        </p>
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/web/artikel/index.blade.php ENDPATH**/ ?>