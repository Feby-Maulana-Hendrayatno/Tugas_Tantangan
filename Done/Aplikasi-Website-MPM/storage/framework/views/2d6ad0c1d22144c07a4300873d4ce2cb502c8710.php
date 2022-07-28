

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
				<li class="breadcrumb-item active"> Form Tambah Blog Post </li>
			</ol>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_content"); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" action="<?php echo e(url('/page/admin/post_blog/tambah')); ?>" enctype="multipart/form-data">
				<?php echo e(csrf_field()); ?>

				<div class="card">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fa fa-plus"></i> Form Tambah Blog Post
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
										<option value="<?php echo e($kategori->id_kategori); ?>">
											<?php echo e($kategori->nama_kategori); ?>

										</option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="title"> Judul </label>
									<input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="body"> Deskripsi </label>
							<textarea id="summernote" name="body">Masukkan Deksripsi</textarea>
						</div>
						<div class="form-group">
							<label for="gambar"> Gambar </label>
							<img class="img-preview img-fluid mb-3 col-sm-5">
							<input type="file" class="form-control" id="gambar" name="gambar" placeholder="Masukkan Nama Bagian" onchange="previewImage()">
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary btn-sm">
							<i class="fa fa-plus"></i> Tambah
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
<?php echo $__env->make("page.layouts.template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Proyek-Terbaru-MPM\Contoh\resources\views//page/admin/post_blog/form_tambah.blade.php ENDPATH**/ ?>