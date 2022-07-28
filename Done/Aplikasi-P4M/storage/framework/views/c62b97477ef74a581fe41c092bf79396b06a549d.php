<?php $__env->startSection('page_content'); ?>

<section class="content-header">
  <h1>
    Edit Berita
  </h1>
  <ol class="breadcrumb">
    <li>
      <a href="<?php echo e(url('/page/admin/dashboard')); ?>">
        <i class="fa fa-dashboard"></i> Dashboard
      </a>
    </li>
    <li>
      <a href="<?php echo e(url('/page/admin/berita')); ?>">
        Data Berita
      </a>
    </li>
    <li class="active">Tambah Berita</li>
  </ol>
</section>

<div class="content">
  <form id="editBerita" action="<?php echo e(url('/page/admin/web/artikel/'.$edit->slug)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo method_field("PUT"); ?>
    <?php echo csrf_field(); ?>
    <input type="hidden" name="oldImage" value="<?php echo e($edit->image); ?>">
    <div class="row">
      <div class="col-md-8">
        <div class="box">
          <div class="box-body">
            <div class="form-group">
              <label for="judul"> Judul </label>
              <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?php echo e($edit->judul); ?>">
              <input type="hidden" readonly class="form-control" name="slug" id="slug" placeholder="Slug" value="<?php echo e($edit->slug); ?>">
            </div>
            <div class="form-group">
              <label for="body"> Isi Konten </label>
              <textarea name="body" class="form-control" placeholder="Masukkan Body" rows="10" cols="80">
                  <?php echo e($edit->body); ?>

              </textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box">
          <div class="box-body">
            <div class="form-group">
              <label for="kategori_id"> Nama Kategori </label>
              <select name="kategori_id" class="form-control select2" id="kategori_id" style="width: 100%">
                <option value="" selected="selected">- Pilih -</option>
                <?php $__currentLoopData = $data_kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($edit->kategori_id == $kategori->id): ?>
                    <option value="<?php echo e($kategori->id); ?>" selected>
                        <?php echo e($kategori->nama); ?>

                      </option>
                    <?php else: ?>
                    <option value="<?php echo e($kategori->id); ?>">
                        <?php echo e($kategori->nama); ?>

                      </option>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
            <div class="form-group">
              <label for="image"> Gambar </label>
              <?php if($edit->image): ?>
              <img class="gambar-preview" src="<?php echo e(url('/storage/'.$edit->image)); ?>" style="width: 100%; margin-bottom: 10px">
              <?php else: ?>
              <img class="gambar-preview" style="width: 100%; margin-bottom: 10px">
              <?php endif; ?>
              <input onchange="previewImage()" type="file" class="form-control" name="image" id="image">
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-success btn-sm">
              <i class="fa fa-edit"></i> Simpan
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
              <i class="fa fa-refresh"></i> Batal
            </button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>

<script src="<?php echo e(url('/backend/template')); ?>/bower_components/ckeditor/ckeditor.js"></script>

<script type="text/javascript">

    $(function() {
        CKEDITOR.replace('body')
    })

</script>

<script type="text/javascript">

    function previewImage()
        {
            const gambar = document.querySelector("#image");
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/web/artikel/form_edit.blade.php ENDPATH**/ ?>