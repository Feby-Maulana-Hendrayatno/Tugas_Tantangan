<input type="hidden" name="id" value="<?php echo e($edit->id); ?>">
<input type="hidden" name="oldImage" value="<?php echo e($edit->gambar); ?>">
<div class="form-group">
    <label for="judul"> Judul </label>
    <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul" value="<?php echo e($edit->judul); ?>">
</div>
<div class="form-group">
    <label for="gambar"> Gambar </label>
    <?php if($edit->gambar): ?>
    <br>
    <img src="<?php echo e(url('/storage/'.$edit->gambar)); ?>" class="gambar-preview img-fluid mb-3 col-sm-5 d-block" style="margin-bottom: 10px">
    <?php else: ?>
    <img class="gambar-preview img-fluid mb-3" width="300">
    <?php endif; ?>
    <br>
    <input type="file" onchange="previewImage()" class="form-control" name="gambar" id="gambar">
</div>

<?php $__env->startSection("page_scripts"); ?>

<script type="text/javascript">
	function previewImage()
	{
		const gambar = document.querySelector('#gambar');
		const gambarPreview = document.querySelector('.gambar-preview');

		gambarPreview.style.display = 'block';

		const oFReader = new FileReader();
		oFReader.readAsDataURL(gambar.files[0]);

		oFReader.onload = function(oFREvent) {
			gambarPreview.src = oFREvent.target.result;
		}
	}
</script>

<?php $__env->stopSection(); ?>
<?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/galeri/edit.blade.php ENDPATH**/ ?>