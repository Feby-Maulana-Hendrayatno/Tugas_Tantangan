

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
				<li class="breadcrumb-item active">Data Proker</li>
			</ol>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_content"); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">
						Data Role
					</h3>
					<a href="<?php echo e(url('/page/admin/proker/form_tambah')); ?>" class="btn btn-primary btn-sm pull-right">
						<i class="fa fa-plus"></i> Tambah Data
					</a>
				</div>
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="text-center">No.</th>
								<th class="text-center">Proker</th>
								<th class="text-center">Waktu</th>
								<th class="text-center">Target</th>
								<th class="text-center">Sasaran</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 0 ?>
							<?php $__currentLoopData = $data_proker; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="text-center"><?php echo e(++$no); ?>.</td>
								<td class="text-center"><?php echo e($proker->nama_proker); ?></td>
								<td class="text-center"><?php echo e($proker->waktu); ?></td>
								<td class="text-center"><?php echo e($proker->target); ?></td>
								<td class="text-center"><?php echo e($proker->sasaran); ?></td>
								<td class="text-center">
									<a href="<?php echo e(url('/page/admin/proker/edit')); ?>/<?php echo e($proker->id_proker); ?>" class="btn btn-warning btn-sm">
										<i class="fa fa-edit"></i>
									</a>
									<form method="POST" action="<?php echo e(url('/page/admin/hapus')); ?>" class="d-inline">
										<?php echo e(csrf_field()); ?>

										<input type="hidden" name="id_proker" value="<?php echo e($proker->id_proker); ?>">
										<button type="submit" class="btn btn-danger btn-sm">
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
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("page.layouts.template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Proyek-Terbaru-MPM\Contoh\resources\views//page/admin/proker/data_proker.blade.php ENDPATH**/ ?>