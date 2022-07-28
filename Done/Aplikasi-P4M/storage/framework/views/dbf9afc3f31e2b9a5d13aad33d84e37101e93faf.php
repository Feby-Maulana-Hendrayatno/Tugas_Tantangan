

<?php $__env->startSection('page_content'); ?>

<section class="content-header">
    <h1>
        Akun
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(url('/page/admin/dashboard')); ?>">
                <i class="fa fa-dashboard"></i> Dashboard
            </a>
        </li>
        <li class="active">Data Akun</li>
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
                    <h3 class="box-title">
                        Data Akun
                    </h3>
                    <div class="pull-right">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-default">
                            <i class="fa fa-plus"></i> Tambah Data
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Hak Akses</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data_akun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $akun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($loop->iteration); ?>.</td>
                                    <td><?php echo e($akun->name); ?></td>
                                    <td><?php echo e($akun->username); ?></td>
                                    <td class="text-center"><?php echo e($akun->email); ?></td>
                                    <td class="text-center"><?php echo e($akun->getHakAkses->nama_hak_akses); ?></td>
                                    <td class="text-center">
                                        <button onclick="editDataAkun(<?php echo e($akun->id); ?>)" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default-edit">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        
                                        <?php if($akun->username == auth()->user()->username): ?>
                                        
                                        <?php else: ?>
                                        <form action="<?php echo e(url('page/admin/pengaturan/akun/'.$akun->id)); ?>" method="POST" style="display: inline;">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field("delete"); ?>
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </form>
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

<!-- Tambah Data -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">
                    <i class="fa fa-plus"></i> Tambah Data Akun
                </h4>
            </div>
            <form id="tambahAkun" action="<?php echo e(url('/page/admin/pengaturan/akun')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name"> Name </label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="username"> Username </label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email"> Email </label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password"> Password </label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="hak_akses"> Hak Akses </label>
                                <select name="hak_akses_id" class="form-control select2" id="hak_akses_id" style="width: 100%;">
                                    <option value="" selected>- Pilih -</option>
                                    <?php $__currentLoopData = $data_hak_akses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hak_akses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($hak_akses->id); ?>">
                                        <?php echo e($hak_akses->nama_hak_akses); ?>

                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="gambar"> Gambar </label>
                                <img class="gambar-preview" style="width: 300px;">
                                <input onchange="previewImage()" type="file" class="form-control" name="gambar" id="gambar">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">
                        <i class="fa fa-refresh"></i> Batal
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Tambah
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END -->

<!-- Edit Data -->
<div class="modal fade" id="modal-default-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">
                    <i class="fa fa-plus"></i> Edit Data Akun
                </h4>
            </div>
            <form id="editAkun" action="<?php echo e(url('/page/admin/pengaturan/akun')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('patch'); ?>
                <div class="modal-body" id="modal-content-edit">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">
                        <i class="fa fa-refresh"></i> Batal
                    </button>
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>

<script type="text/javascript">
    
    function editDataAkun(id)
    {
        $.ajax({
            url : "<?php echo e(url('/page/admin/pengaturan/akun/edit')); ?>",
            type : "GET",
            data : { id : id },
            success : function(data) {
                $("#modal-content-edit").html(data);
                return true;
            }
        })
    }
    
    function previewImage()
    {
        const gambar = document.querySelector("#gambar");
        const gambarPreview = document.querySelector(".gambar-preview");
        
        gambarPreview.style.display = "block";
        
        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);
        
        oFReader.onload = function(oFREvent) {
            gambarPreview.src = oFREvent.target.result;
        }
    }
    
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/akun/index.blade.php ENDPATH**/ ?>