<?php $__env->startSection("page_title", "Data Absen"); ?>

<?php $__env->startSection("page_header"); ?>
<i class="fa fa-pencil"></i> Update Data Absen
<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_breadcrumb"); ?>

<ol class="breadcrumb">
	<li><a href="<?php echo e(url('/page/dashboard')); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li class="active">Update Data Absen</li>
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
				<h3 class="box-title"><i class="fa fa-folder-open"></i> Absen Siswa </h3>
			</div>
			<div class="box-body">
				<table class="table table-bordered table-striped table-responsive">
					<thead>
						<tr>
							<th class="text-center">No.</th>
							<th class="text-center">NIS</th>
							<th>Nama</th>
							<th class="text-center">Kelas</th>
							<th class="text-center">Status Absen</th>
							<th class="text-center">Tanggal Absen</th>
							<th class="text-center">Keterangan</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 0 ?>

						<?php $__empty_1 = true; $__currentLoopData = $data_absen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $absen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
						<tr>
							<td class="text-center"><?php echo e(++$no); ?>.</td>
							<td class="text-center"><?php echo e($absen->siswa->nis); ?></td>
							<td><?php echo e($absen->siswa->nama); ?></td>
							<td class="text-center"><?php echo e($absen->siswa->kelas->nama_kelas); ?></td>
							<form method="POST" action="<?php echo e(url('/page/update_data_absen')); ?>">
								<?php echo e(csrf_field()); ?>

								<?php echo e(method_field('PUT')); ?>

								<input type="hidden" name="id" value="<?php echo e($absen->id); ?>">
								<input type="hidden" name="nis_siswa" value="<?php echo e($absen->nis_siswa); ?>">
								<td class="text-center">
									<select class="form-control" name="absen_status">
										<option value="" disabled>- Pilih -</option>
										<?php if($absen->absen_status == 1): ?>
										<option value="1" selected>Hadir</option>
										<option value="2">Sakit</option>
										<option value="3">Izin</option>
										<option value="4">Alfa</option>
										<?php elseif($absen->absen_status == 2): ?>
										<option value="1">Hadir</option>
										<option value="2" selected>Sakit</option>
										<option value="3">Izin</option>
										<option value="4">Alfa</option>
										<?php elseif($absen->absen_status == 3): ?>
										<option value="1">Hadir</option>
										<option value="2">Sakit</option>
										<option value="3" selected>Izin</option>
										<option value="4">Alfa</option>
										<?php elseif($absen->absen_status == 4): ?>
										<option value="1">Hadir</option>
										<option value="2">Sakit</option>
										<option value="3">Izin</option>
										<option value="4" selected>Alfa</option>
										<?php else: ?>
										<option value="5" selected>Terlambat</option>
										<?php endif; ?>
									</select>
								</td>
								<td class="text-center">
									<input type="date" class="form-control" name="absen_date" value="<?php echo e($absen->absen_date); ?>">
								</td>
								<td class="text-center">
									<input type="text" class="form-control" name="keterangan" placeholder="Masukkan Keterangan" value="<?php echo e($absen->keterangan); ?>">
								</td>
								<?php if($absen->absen_status == 5): ?>
								<td class="text-center">
									<button disabled class="btn btn-info btn-sm">
										<i class="fa fa-save"></i> Simpan
									</button>
								</td>
								<?php else: ?>
								<td class="text-center">
									<button type="submit" class="btn btn-info btn-sm">
										<i class="fa fa-save"></i> Simpan
									</button>
								</td>
								<?php endif; ?>
							</form>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
						<tr>
							<td class="text-center" colspan="7">
								<b>
									<i> Data Saat Ini Masih Kosong</i>
								</b>
							</td>
						</tr>
						<?php endif; ?>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="6">
								Wali Kelas : <b><?php echo e(Auth::user()->name); ?></b>
							</td>
							<td class="text-center">
								Total Siswa : <b><?php echo e($total); ?></b>
							</td>
						</tr>
					</tfoot>
				</table>
				<div class="pull-right">
					<?php echo e($data_absen->links()); ?>

				</div>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("content.page.layouts.theme", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Project1\resources\views/content/page/walikelas/absen/data_absen.blade.php ENDPATH**/ ?>