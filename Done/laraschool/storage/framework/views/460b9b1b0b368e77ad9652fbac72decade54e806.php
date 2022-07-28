

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('plugins/summernote')); ?>/summernote-bs4.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="">    
    <div class="card">
        <div class="card-header">
            <a href="<?php echo e(route('admin.pengumuman.index')); ?>" class="btn btn-success btn-sm">Kembali</a>
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('admin.pengumuman.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input required="" type="" name="judul" placeholder="" class="form-control title"> 
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea required="" name="deskripsi" id="deskripsi" class="text-dark form-control summernote"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">UPLOAD</button>    
            </div> 
        </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script type="text/javascript" src="<?php echo e(asset('plugins/summernote')); ?>/summernote-bs4.min.js"></script>
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
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend.app',[
    'title' => 'Tambah Pengumuman',
    'contentTitle' => 'Tambah Pengumuman'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\laraschool\resources\views/admin/pengumuman/create.blade.php ENDPATH**/ ?>