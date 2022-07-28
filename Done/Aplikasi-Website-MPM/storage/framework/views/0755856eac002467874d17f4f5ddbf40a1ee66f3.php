

<?php $__env->startSection("page_title", "Data Proker"); ?>

<?php $__env->startSection("breadcrumb"); ?>

<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
			<h1 class="m-0">Proker</h1>
		</div>
		<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item">
					<a href="<?php echo e(url('/page/admin/dashboard')); ?>"> Dashboard </a>
				</li>
				<li class="breadcrumb-item">
					<a href="<?php echo e(url('/page/admin/proker/')); ?>"> Data Proker </a>
				</li>
				<li class="breadcrumb-item active"> Form Edit Data Proker </li>
			</ol>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_content"); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" action="<?php echo e(url('/page/admin/proker/simpan')); ?>">
				<?php echo e(csrf_field()); ?>

				<input type="hidden" name="id_users" value="1">
				<input type="hidden" name="id_proker" value="<?php echo e($edit->id_proker); ?>">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fa fa-edit"></i> Edit Data Proker
						</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="nama_proker"> Nama Proker </label>
									<input type="text" class="form-control" id="nama_proker" name="nama_proker" placeholder="Masukkan Nama Proker" value="<?php echo e($edit->nama_proker); ?>">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="waktu"> Waktu </label>
									<input type="text" class="form-control" id="waktu" name="waktu" placeholder="Masukkan Waktu" value="<?php echo e($edit->waktu); ?>">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="waktu"> Target </label>
							<textarea id="summernote" name="target">
								<?php echo e($edit->target); ?>

							</textarea>
						</div>
						<div class="form-group">
							<label for="waktu"> Parameter </label>
							<textarea id="summernote1" name="parameter">
								<?php echo e($edit->parameter); ?>

							</textarea>
						</div>
						<div class="form-group">
							<label for="metode"> Metode </label>
							<textarea id="summernote2" name="metode">
								<?php echo e($edit->metode); ?>

							</textarea>
						</div>
						<div class="form-group">
							<label for="metode"> Sasaran </label>
							<textarea id="summernote3" name="sasaran">
								<?php echo e($edit->sasaran); ?>

							</textarea>
						</div>
						<div class="form-group">
							<label for="metode"> Kebutuhan </label>
							<textarea id="summernote4" name="kebutuhan">
								<?php echo e($edit->kebutuhan); ?>

							</textarea>
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-success btn-sm">
							<i class="fa fa-pencil"></i> Simpan
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
<?php echo $__env->make("page.layouts.template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Proyek-Terbaru-MPM\Contoh\resources\views//page/admin/proker/form_edit.blade.php ENDPATH**/ ?>