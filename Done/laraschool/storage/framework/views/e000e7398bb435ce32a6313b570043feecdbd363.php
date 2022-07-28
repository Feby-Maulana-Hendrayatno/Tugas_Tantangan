

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('plugins/summernote')); ?>/summernote-bs4.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="">    
    <div class="card">
        <div class="card-header">
            <a href="<?php echo e(route('admin.agenda.index')); ?>" class="btn btn-success btn-sm">Kembali</a>
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('admin.agenda.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input required="" type="" name="judul" id="judul" placeholder="" class="form-control title"> 
            </div>
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="tgl_mulai">Tanggal Mulai</label>
                        <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="tgl_selesai">Tanggal Selesai</label>
                        <input type="date" name="tgl_selesai" id="tgl_selesai" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="jam_mulai">Jam Mulai</label>
                        <input type="time" name="jam_mulai" id="jam_mulai" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="jam_selesai">Jam Selesai</label>
                        <input type="time" name="jam_selesai" id="jam_selesai" class="form-control">
                    </div>
                </div>
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
    'title' => 'Tambah Agenda',
    'contentTitle' => 'Tambah Agenda'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\laraschool\resources\views/admin/agenda/create.blade.php ENDPATH**/ ?>