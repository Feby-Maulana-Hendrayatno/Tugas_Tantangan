

<?php $__env->startSection("page_title", "Laporan Data Absen"); ?>

<?php $__env->startSection("breadcrumb"); ?>

<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
			<h1 class="m-0"> Laporan Data Absen </h1>
		</div>
		<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item">
					<a href="<?php echo e(url('/page/admin/dashboard')); ?>"> Dashboard </a>
				</li>
				<li class="breadcrumb-item active"> Laporan Data Absen </li>
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
				</div>
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="text-center">No.</th>
								<th class="text-center">NIM</th>
								<th>Nama</th>
								<th class="text-center">Hadir</th>
								<th class="text-center">Sakit</th>
								<th class="text-center">Izin</th>
								<th class="text-center">Alfa</th>
								<th class="text-center">Detail</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 0 ?>
							<?php $__currentLoopData = $data_divisi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $divisi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<?php
								$jumlah_hadir = DB::table("tb_absensi")
									->where("nim_anggota", $divisi->nim_anggota)
									->where("status_absen", 1)
									->count();

								$jumlah_sakit = DB::table("tb_absensi")
									->where("nim_anggota", $divisi->nim_anggota)
									->where("status_absen", 2)
									->count();

								$jumlah_izin = DB::table("tb_absensi")
									->where("nim_anggota", $divisi->nim_anggota)
									->where("status_absen", 3)
									->count();

								$jumlah_alfa = DB::table("tb_absensi")
									->where("nim_anggota", $divisi->nim_anggota)
									->where("status_absen", 4)
									->count();
							?>
							<tr>
								<td class="text-center"><?php echo e(++$no); ?>.</td>
								<td class="text-center">
									<?php if(empty($divisi->getAnggota->nim)): ?>
									<i><b>NULL</b></i>
									<?php else: ?>
									<?php echo e($divisi->getAnggota->nim); ?>

									<?php endif; ?>
								</td>
								<td>
									<?php if(empty($divisi->getAnggota->nama)): ?>
									<i><b>NULL</b></i>
									<?php else: ?>
									<?php echo e($divisi->getAnggota->nama); ?>

									<?php endif; ?>
								</td>
								<td class="text-center"><?php echo e($jumlah_hadir); ?></td>
								<td class="text-center"><?php echo e($jumlah_sakit); ?></td>
								<td class="text-center"><?php echo e($jumlah_izin); ?></td>
								<td class="text-center"><?php echo e($jumlah_alfa); ?></td>
								<td class="text-center">
									<?php if(empty($divisi->getAnggota->nim)): ?>
									<i><b>Tidak Bisa Detail</b></i>
									<?php else: ?>
									<a href="<?php echo e(url('/page/admin/laporan/data_absen')); ?>/<?php echo e($divisi->id_divisi); ?>/detail" class="btn btn-success btn-sm">
										<i class="fa fa-search"></i> Detail
									</a>
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
<?php echo $__env->make("page.layouts.template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Proyek-Terbaru-MPM\Contoh\resources\views//page/admin/laporan/data_absen.blade.php ENDPATH**/ ?>