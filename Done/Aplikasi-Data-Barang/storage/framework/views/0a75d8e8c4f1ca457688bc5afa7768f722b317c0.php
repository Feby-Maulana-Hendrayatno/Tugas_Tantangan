

<?php $__env->startSection("page_header", "Kategori"); ?>

<?php $__env->startSection("page_content"); ?>

<?php if(count($errors) > 0): ?>
<div class="alert alert-danger">
	<ul>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li>
			<?php echo e($error); ?>

		</li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
</div>
<?php endif; ?>

<?php if(session("sukses")): ?>
<div class="row">
	<div class="col-md-12">
		<div class="alert alert-success alert-dismissable fade-show">
			<?php echo e(session("sukses")); ?>

			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	</div>
</div>
<?php endif; ?>

<?php if(session("error")): ?>
<div class="row">
	<div class="col-md-12">
		<div class="alert alert-danger alert-dismissable fade-show">
			<?php echo e(session("error")); ?>

			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	</div>
</div>
<?php endif; ?>

<div class="row">
	<div class="col-md-4">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-plus"></i> Tambah Kategori</h6>
			</div>
			<div class="card-body">
				<form method="POST" action="<?php echo e(url('/admin/tambah_kategori')); ?>">
					<?php echo e(csrf_field()); ?>

					<div class="form-group">
						<label for="name"> Nama Kategori </label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Kategori">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-sm btn-block"><i class="fas fa-fw fa-plus"></i> Tambah </button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-bars"></i> Data Kategori </h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th class="text-center">No.</th>
								<th>Nama Kategori</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 0 ?>

							<?php $__currentLoopData = $data_kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="text-center"><?php echo e(++$no); ?>.</td>
								<td><?php echo e($kategori->name); ?></td>
								<td class="text-center">
									<?php if(count($kategori->get_goods) > 0): ?>
									<button disabled class="btn btn-warning btn-sm"><i class="fas fa-fw fa-eraser"></i> Edit </button>
									<button disabled class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash"></i> Hapus </button>
									<?php else: ?>
									<a href="<?php echo e(url('/admin/'.$kategori->id.'/edit_kategori')); ?>" class="btn btn-warning btn-sm"><i class="fas fa-fw fa-eraser"></i> Edit </a>
									<a onclick="return confirm('Yakin ? Anda Ingin Menghapus Data Ini ?')" href="<?php echo e(url('/admin/'.$kategori->id.'/hapus_kategori')); ?>" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash"></i> Hapus </a>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make("content.layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Aplikasi-Data-Barang\resources\views/content/admin/kategori/data_kategori.blade.php ENDPATH**/ ?>