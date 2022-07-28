

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('plugins/summernote')); ?>/summernote-bs4.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('plugins/dropify')); ?>/dist/css/dropify.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="">    
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Box Artikel</h4>
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('admin.artikel.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="judul">Judul Artikel</label>
                <input required="" type="" name="judul" placeholder="" class="form-control"> 
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Thumbnail</label>
                        <input type="file" name="file" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Kategori</label>
                        <select required="" class="form-control" name="kategori_artikel_id">
                        <option selected="" disabled="">- PILIH KATEGORI -</option>
                        <?php $__currentLoopData = $kategoriArtikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($kategori->id); ?>"><?php echo e($kategori->nama_kategori); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>
            <div id="form-group">
                <label for="deskripsi">Isi Artikel</label>
                <textarea required="" name="deskripsi" id="deskripsi" class="text-dark form-control summernote"></textarea>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">UPLOAD</button>
        </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script type="text/javascript" src="<?php echo e(asset('plugins/summernote')); ?>/summernote-bs4.min.js"></script>
<script type="text/javascript" src="<?php echo e(asset('plugins/dropify')); ?>/dist/js/dropify.min.js"></script>
<script type="text/javascript">
    $(".summernote").summernote({
        height:500,
        callbacks: {
        // callback for pasting text only (no formatting)
            onPaste: function (e) {
              var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
              e.preventDefault();
              bufferText = bufferText.replace(/\r?\n/g, '<br>');
              document.execCommand('insertHtml', false, bufferText);
            }
        }
    })

    $(".summernote").on("summernote.enter", function(we, e) {
        $(this).summernote("pasteHTML", "<br><br>");
        e.preventDefault();
    });

    $('.dropify').dropify({
        messages: {
            default: 'Drag atau Drop untuk memilih gambar',
            replace: 'Ganti',
            remove:  'Hapus',
            error:   'error'
        }
    });

    $('.title').keyup(function(){
        var title = $(this).val().toLowerCase().replace(/[&\/\\#^, +()$~%.'":*?<>{}]/g,'-');
        $('.slug').val(title);
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend.app',[
	'title' => 'Tambah Artikel',
	'contentTitle' => 'Tambah Artikel'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\laraschool\resources\views/admin/artikel/create.blade.php ENDPATH**/ ?>