

<?php $__env->startSection("page_title", "Data Blog Post"); ?>

<?php $__env->startSection("breadcrumb"); ?>

<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
			<h1 class="m-0">Blog Post</h1>
		</div>
		<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item">
					<a href="<?php echo e(url('/page/admin/dashboard')); ?>"> Dashboard </a>
				</li>
				<li class="breadcrumb-item">
					<a href="<?php echo e(url('/page/admin/post_blog/')); ?>"> Data Blog Post </a>
				</li>
				<li class="breadcrumb-item active"> Form Edit Blog Post </li>
			</ol>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_content"); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" action="<?php echo e(url('/page/admin/post_blog/simpan')); ?>" enctype="multipart/form-data">
				<?php echo e(csrf_field()); ?>

				<input type="hidden" name="id" value="<?php echo e($edit->id); ?>">
				<input type="hidden" name="oldImage" value="<?php echo e($edit->gambar); ?>">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fa fa-edit"></i> Form Edit Blog Post
						</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="id_kategori"> Kategori </label>
									<select class="form-control select2bs4" id="id_kategori" name="id_kategori" style="width: 100%;">
										<option value="">- Pilih -</option>
										<?php $__currentLoopData = $data_kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<?php if($edit->id_kategori == $kategori->id_kategori): ?>
												<option value="<?php echo e($kategori->id_kategori); ?>" selected>
													<?php echo e($kategori->nama_kategori); ?>

												</option>
											<?php else: ?>
												<option value="<?php echo e($kategori->id_kategori); ?>">
													<?php echo e($kategori->nama_kategori); ?>

												</option>
											<?php endif; ?>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="title"> Judul </label>
									<input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul" value="<?php echo e($edit->title); ?>">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="body"> Deskripsi </label>
							<textarea id="summernote" name="body"><?php echo e($edit->body); ?></textarea>
						</div>
						<div class="form-group">
							<label for="gambar"> Gambar </label>
							<?php if($edit->gambar): ?>
							<img src="<?php echo e(url('/storage')); ?>/<?php echo e($edit->gambar); ?>" class="img-preview img-fluid mb-3 col-sm-5 d-block">
							<?php else: ?>
							<img class="img-preview img-fluid mb-3 col-sm-5">
							<?php endif; ?>
							<input type="file" class="form-control" id="gambar" name="gambar" onchange="previewImage()">
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-success btn-sm">
							<i class="fa fa-save"></i> Simpan
						</button>
						<button type="reset" class="btn btn-danger btn-sm">
							<i class="fa fa-refresh"></i> Batal
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_scripts"); ?>

<script type="text/javascript">
	function previewImage()
	{
		const image = document.querySelector('#gambar');
		const imgPreview = document.querySelector('.img-preview');

		imgPreview.style.display = 'block';

		const oFReader = new FileReader();
		oFReader.readAsDataURL(image.files[0]);

		oFReader.onload = function(oFREvent) {
			imgPreview.src = oFREvent.target.result;
		}
	}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("page.layouts.template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Proyek-Terbaru-MPM\Contoh\resources\views//page/admin/post_blog/form_edit.blade.php ENDPATH**/ ?>