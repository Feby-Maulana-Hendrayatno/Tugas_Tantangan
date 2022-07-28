<?php $__env->startSection("page_title", "Data Laporan"); ?>

<?php $__env->startSection("page_header"); ?>
<a href="<?php echo e(url('/page/laporan_perhari')); ?>" class="btn btn-bitbucket btn-sm">
	Laporan Perhari
</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_breadcrumb"); ?>

<ol class="breadcrumb">
	<li><a href="<?php echo e(url('/page/dashboard')); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li class="active">Data Laporan</li>
</ol>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_content"); ?>

<?php if(Auth::user()->role == 1): ?>
<div class="row">
	<div class="col-xs-12">
		<div class="box box-info">
			<div class="box-header">
				<div class="row">
					<div class="col-md-10">
						<h3 class="box-title"><i class="fa fa-folder-open"></i> Total Absen Keseluruhan Siswa</h3>
					</div>
					<div class="col-md-2">
						<a class="btn btn-primary btn-sm" href="<?php echo e(url('/page/lihat_data_laporan_keseluruhan')); ?>">
							<i class="fa fa-search"></i>
							Lihat Data Print
						</a>
					</div>
				</div>
			</div>
			<div class="box-body" id="print-1">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th class="text-center">No.</th>
							<th class="text-center">NIS</th>
							<th>Nama</th>
							<th class="text-center">Kelas</th>
							<th class="text-center">Hadir</th>
							<th class="text-center">Sakit</th>
							<th class="text-center">Izin</th>
							<th class="text-center">Alfa</th>
							<th class="text-center">Terlambat</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 0 ?>

						<?php $__currentLoopData = $data_absen_siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td class="text-center"><?php echo e(++$no); ?>.</td>
							<td class="text-center"><?php echo e($siswa->nis); ?></td>
							<td><?php echo e($siswa->nama); ?></td>
							<td class="text-center"><?php echo e($siswa->kelas->nama_kelas); ?></td>
							<td class="text-center">
								<?php
								$hadir = DB::table("absen")
								->join("siswa", "absen.nis_siswa", "=", "siswa.nis")
								->where("absen_status", 1)
								->where("nis", $siswa->nis)
								->count();
								echo $hadir;
								?>
							</td>
							<td class="text-center">
								<?php
								$sakit = DB::table("absen")
								->join("siswa", "absen.nis_siswa", "=", "siswa.nis")
								->where("absen_status", 2)
								->where("nis", $siswa->nis)
								->count();
								echo $sakit;
								?>
							</td>
							<td class="text-center">
								<?php
								$izin = DB::table("absen")
								->join("siswa", "absen.nis_siswa", "=", "siswa.nis")
								->where("absen_status", 3)
								->where("nis", $siswa->nis)
								->count();
								echo $izin;
								?>
							</td>
							<td class="text-center">
								<?php
								$alfa = DB::table("absen")
								->join("siswa", "absen.nis_siswa", "=", "siswa.nis")
								->where("absen_status", 4)
								->where("nis", $siswa->nies)
								->count();
								echo $alfa;
								?>
							</td>
							<td class="text-center">
								<?php
								$terlambat = DB::table("absen")
								->join("siswa", "absen.nis_siswa", "=", "siswa.nis")
								->where("absen_status", 5)
								->where("nis", $siswa->nis)
								->count();
								echo $terlambat;
								?>
							</td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
				<div class="pull-right">
					<?php echo e($data_absen_siswa->links()); ?>

				</div>
			</div>
		</div>
	</div>
</div>
<?php elseif(Auth::user()->role == 2): ?>
<div class="row">
	<div class="col-xs-12">
		<div class="box box-info">
			<div class="box-header">
				<div class="row">
					<div class="col-md-9">
						<h3 class="box-title">Data Laporan Keseluruhan Siswa <b><?php echo e($kelas->nama_kelas); ?></b></h3>
					</div>
					<div class="col-md-3">
						<a href="<?php echo e(url('/page/lihat_keseluruhan_laporan_perkelas')); ?>" class="btn btn-primary btn-sm">
							<i class="fa fa-search"></i> Lihat Laporan Keseluruhan
						</a>
					</div>
				</div>
			</div>
			<div class="box-body">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th class="text-center">No.</th>
							<th class="text-center">NIS</th>
							<th>Nama</th>
							<th class="text-center">Kelas</th>
							<th class="text-center">Hadir</th>
							<th class="text-center">Sakit</th>
							<th class="text-center">Izin</th>
							<th class="text-center">Alfa</th>
							<th class="text-center">Terlambat</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 0 ?>

						<?php $__empty_1 = true; $__currentLoopData = $data_siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
						<tr>
							<td class="text-center"><?php echo e(++$no); ?>.</td>
							<td class="text-center"><?php echo e($siswa->nis); ?></td>
							<td><?php echo e($siswa->nama); ?></td>
							<td class="text-center"><?php echo e($siswa->kelas->nama_kelas); ?></td>
							<td class="text-center">
								<?php
								$hadir = DB::table("absen")
								->join("siswa", "absen.nis_siswa", "=", "siswa.nis")
								->where("absen_status", 1)
								->where("nis", $siswa->nis)
								->count();
								echo $hadir;
								?>
							</td>
							<td class="text-center">
								<?php
								$sakit = DB::table("absen")
								->join("siswa", "absen.nis_siswa", "=", "siswa.nis")
								->where("absen_status", 2)
								->where("nis", $siswa->nis)
								->count();
								echo $sakit;
								?>
							</td>
							<td class="text-center">
								<?php
								$izin = DB::table("absen")
								->join("siswa", "absen.nis_siswa", "=", "siswa.nis")
								->where("absen_status", 3)
								->where("nis", $siswa->nis)
								->count();
								echo $izin;
								?>
							</td>
							<td class="text-center">
								<?php
								$alfa = DB::table("absen")
								->join("siswa", "absen.nis_siswa", "=", "siswa.nis")
								->where("absen_status", 4)
								->where("nis", $siswa->nis)
								->count();
								echo $alfa;
								?>
							</td>
							<td class="text-center">
								<?php
								$terlambat = DB::table("absen")
								->join("siswa", "absen.nis_siswa", "=", "siswa.nis")
								->where("absen_status", 5)
								->where("nis", $siswa->nis)
								->count();
								echo $terlambat;
								?>
							</td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
						<tr>
							<td colspan="9" class="text-center">
								<b>
									<i> Data Saat Ini Masih Kosong</i>
								</b>
							</td>
						</tr>
						<?php endif; ?>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="9" class="text-center">
								Wali Kelas : <b><?php echo e(Auth::user()->name); ?></b>
							</td>
						</tr>
					</tfoot>
				</table>
				<div class="pull-right">
					<?php echo e($data_siswa->links()); ?>

				</div>
			</div>
		</div>
	</div>
</div>

<?php else: ?>

<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("content.page.layouts.theme", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Project1\resources\views/content/page/report/data_laporan.blade.php ENDPATH**/ ?>