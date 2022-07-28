<?php $__env->startSection("page_title", "Data Siswa Terlambat"); ?>

<?php $__env->startSection("page_header"); ?>
<i class="fa fa-folder-open"></i> Data Siswa Terlambat
<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_breadcrumb"); ?>

<ol class="breadcrumb">
	<li><a href="<?php echo e(url('/page/dashboard')); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li class="active">Data Siswa Terlambat</li>
</ol>

<?php $__env->stopSection(); ?>


<?php $__env->startSection("page_content"); ?>

<?php if(session("sukses")): ?>
<div class="row">
	<div class="col-md-12">
		<div class="alert alert-success" role="alert">
			<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<strong>Berhasil!</strong> <?php echo e(session("sukses")); ?>.
		</div>
	</div>
</div>
<?php endif; ?>

<?php if(count($errors) > 0): ?>
<div class="row">
	<div class="col-md-12">
		<div class="alert alert-danger">
			<ul>
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li>
					<?php echo e($error); ?>

				</li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		</div>
	</div>
</div>
<?php endif; ?>

<div class="row">
	<div class="col-xs-12">
		<div class="box box-info">
			<div class="box-header">
				<h3 class="box-title"> Absen Siswa Terlambat </h3>
			</div>
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th class="text-center">No.</th>
							<th class="text-center">NIS</th>
							<th>Nama</th>
							<th class="text-center">Kelas</th>
							<th class="text-center">Absen Status</th>
							<th class="text-center">Keterangan</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 0 ?>

						<?php $__currentLoopData = $data_absen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $absen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="text-center"><?php echo e(++$no); ?>.</td>
								<td class="text-center"><?php echo e($absen->siswa->nis); ?></td>
								<td><?php echo e($absen->siswa->nama); ?></td>
								<td class="text-center"><?php echo e($absen->siswa->kelas->nama_kelas); ?></td>
								<form method="POST" action="<?php echo e(url('/page/update_data_siswa_terlambat')); ?>">
									<?php echo e(csrf_field()); ?>

									<input type="hidden" name="id" value="<?php echo e($absen->id); ?>">
									<td class="text-center">
										<select class="form-control" name="absen_status">
											<option value="5">
												Terlambat
											</option>
										</select>
									</td>
									<td class="text-center">
										<input type="text" class="form-control" name="keterangan" placeholder="Keterangan" value="<?php echo e($absen->keterangan); ?>">
									</td>
									<td class="text-center">
										<button type="submit" class="btn btn-success btn-sm">
											<i class="fa fa-save"></i> Simpan
										</button>
									</td>
								</form>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("content.page.layouts.theme", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Project1\resources\views/content/page/gurupiket/data_siswa_terlambat.blade.php ENDPATH**/ ?>