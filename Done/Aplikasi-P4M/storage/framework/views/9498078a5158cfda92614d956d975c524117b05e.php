

<?php $__env->startSection('title', 'Kategori'); ?>

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
        <li>
            <a href="<?php echo e(url('/page/admin/kategori')); ?>">
                <?php echo $__env->yieldContent('title'); ?>
            </a>
        </li>
        <li class="active">Edit <?php echo $__env->yieldContent('title'); ?></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="box">
                <form action="<?php echo e(url('/page/admin/kategori')); ?>/<?php echo e($edit->slug); ?>" method="POST" id="editKategori">
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="box-header">
                        <h3 class="box-title">
                            <i class="fa fa-pencil"></i> Form Edit Kategori
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama"> Nama Kategori </label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Kategori" value="<?php echo e($edit->nama); ?>" required>
                            <label class="error hidden" for="judul">Judul harap di isi!</label>
                            <input type="hidden" class="form-control" readonly name="slug" id="slug" placeholder="Masukkan Slug" value="<?php echo e($edit->slug); ?>">
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success btn-sm" id="simpan">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-refresh"></i> Batal
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                        Data Kategori
                    </h3>
                    <div class="pull-right">
                        <a href="<?php echo e(url('/page/admin/web/kategori')); ?>" class="btn btn-danger btn-sm">
                            <i class="fa fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Nama Kategori</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data_kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($kategori->nama); ?></td>
                                <td class="text-center">
                                    <a href="<?php echo e(url('/page/admin/kategori')); ?>/<?php echo e($kategori->slug); ?>/edit" class="btn btn-warning btn-sm">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <form action="<?php echo e(url('/page/admin/kategori')); ?>/<?php echo e($kategori->slug); ?>" method="POST" style="display: inline;">
                                        <?php echo method_field('delete'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button class="btn btn-danger btn-sm" type="submit">
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
</section>


<script>
    const nama = document.querySelector('#nama');
    const slug = document.querySelector('#slug');

    nama.addEventListener('change', function() {
        fetch('/page/admin/kategori/checkSlug?nama=' + nama.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/web/kategori/edit.blade.php ENDPATH**/ ?>