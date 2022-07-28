

<?php $__env->startSection('title', 'Data Galeri'); ?>

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

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-image"></i> Image
                    </h3>
                    <div class="pull-right">
                        <button type="button" class="btn btn-social btn-primary btn-flat btn-sm" data-toggle="modal" data-target="#modal-default" title="Tambah Data">
                            <i class="fa fa-plus"></i> Tambah Data
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <table id="galeriTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Judul Galeri</th>
                                <th class="text-center">Gambar</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data_galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galeri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-center"><?php echo e($loop->iteration); ?>.</td>
                                <td class="text-center"><?php echo e($galeri->judul); ?></td>
                                <td class="text-center">
                                    <img src="<?php echo e(url('storage/'.$galeri->gambar)); ?>" alt="" width="100" height="70">
                                </td>
                                <td class="text-center">
                                    <button onclick="editDataGaleri(<?php echo e($galeri->id); ?>)" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default-edit" title="Edit Data">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <form action="<?php echo e(url('/page/admin/web/galeri/'.$galeri->id)); ?>" method="POST" style="display: inline;">
                                        <?php echo method_field("DELETE"); ?>
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="gambar" value="<?php echo e($galeri->gambar); ?>">
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
                    <i class="fa fa-plus"></i> Tambah <?php echo $__env->yieldContent('title'); ?>
                </h4>
            </div>
            <form action="<?php echo e(url('/page/admin/web/galeri')); ?>" method="POST" enctype="multipart/form-data" id="formTambahGaleri">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="judul"> Judul </label>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul">
                    </div>
                    <div class="form-group">
                        <label for="gambar"> Gambar </label>
                        <div class="box-profile">
                            <img class="penduduk profile-user-img img-responsive gambar-preview" style="border-radius: 50%; width: 200px; height: 200px; margin-bottom: 15px" src="<?php echo e(url('/gambar/upload.png')); ?>" alt="Foto Penduduk">
                            <div class="input-group input-group-sm">
                                <input  type="text" class="form-control" id="file_path4" placeholder="Masukkan Gambar">
                                <input type="file" class="hidden" id="gambar" name="gambar" onchange="previewImage()">
                                <span class="input-group-btn">
                                    <button  type="button" class="btn btn-info btn-flat" id="file_browser4">
                                        <i class="fa fa-upload"></i> Upload
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-social btn-warning btn-flat btn-sm pull-left" title="Reset">
                        <i class="fa fa-refresh"></i> Reset
                    </button>
                    <button type="submit" class="btn btn-social btn-primary btn-flat btn-sm" title="Tambah Data">
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
                    <i class="fa fa-edit"></i> Edit <?php echo $__env->yieldContent('title'); ?>
                </h4>
            </div>
            <form action="<?php echo e(url('/page/admin/web/galeri/simpan')); ?>" method="POST" enctype="multipart/form-data" id="formEditGaleri">
                <?php echo method_field("PUT"); ?>
                <?php echo csrf_field(); ?>
                <div class="modal-body" id="modal-content-edit">

                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-social btn-warning btn-flat btn-sm pull-left" title="Reset">
                        <i class="fa fa-refresh"></i> Reset
                    </button>
                    <button type="submit" class="btn btn-social btn-success btn-flat btn-sm" title="Simpan Data">
                        <i class="fa fa-edit"></i> Simpan
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

    function editDataGaleri(id)
    {
        $.ajax({
            url : "<?php echo e(url('/page/admin/web/galeri/edit')); ?>",
            type : "GET",
            data : { id : id },
            success : function(data) {
                $("#modal-content-edit").html(data);
                return true;
            }
        });
    }

    $(function (){
        $('#galeriTable').DataTable({
            columnDefs: [
            { orderable: false, targets: [0,2,3] }
            ],
        })
    })

    $('#file_browser4').click(function(e)
    {
        e.preventDefault();
        $('#gambar').click();
    });
    $('#gambar').change(function()
    {
        $('#file_path4').val($(this).val());
    });
    $('#file_path4').click(function()
    {
        $('#file_browser4').click();
    });

</script>

<script>
    (function($,W,D) {
        var JQUERY4U = {};
        JQUERY4U.UTIL =
        {
            setupFormValidation: function()
            {
                $("#formTambahGaleri").validate({
                    ignore: "",
                    rules: {
                        judul: {
                            required: true
                        },
                        gambar: {
                            required: true,
                            accept: "image/*"
                        }
                    },

                    messages: {
                        judul: {
                            required: "Judul harap di isi!"
                        },
                        gambar: {
                            required: "Gambar harap di isi!",
                            accept: "Tipe file harus gambar (jpg, png, jpeg)"
                        },
                    },

                    submitHandler: function(form) {
                        form.submit();
                    }
                });

                $("#formEditGaleri").validate({
                    ignore: "",
                    rules: {
                        judul: {
                            required: true
                        },
                        gambar: {
                            accept: "image/*"
                        }
                    },

                    messages: {
                        judul: {
                            required: "Judul harap di isi!"
                        },
                        gambar: {
                            accept: "Tipe file harus gambar (jpg, png, jpeg)"
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/web/galeri/index.blade.php ENDPATH**/ ?>