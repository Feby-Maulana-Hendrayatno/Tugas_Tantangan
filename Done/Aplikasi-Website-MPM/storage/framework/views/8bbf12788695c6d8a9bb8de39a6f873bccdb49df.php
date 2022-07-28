

<?php $__env->startSection("page_title", "Laporan Data Kas"); ?>

<?php $__env->startSection("breadcrumb"); ?>

<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
			<h1 class="m-0"> Laporan Data KAS </h1>
		</div>
		<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item">
					<a href="<?php echo e(url('/page/admin/dashboard')); ?>"> Dashboard </a>
				</li>
				<li class="breadcrumb-item active"> Laporan Data KAS </li>
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
						Data KAS
					</h3>
				</div>
				<div class="card-body">
					<table id="example1" class="table table-hover table-bordered">
						<thead>
							<tr>
								<th class="text-center">No.</th>
								<th class="text-center">NIM</th>
								<th>Nama</th>
								<th class="text-center"></th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 0 ?>
							<?php $__currentLoopData = $data_divisi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $divisi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="text-center"><?php echo e(++$no); ?>.</td>
								<td class="text-center"><?php echo e($divisi->getAnggota->nim); ?></td>
								<td><?php echo e($divisi->getAnggota->nama); ?></td>
								<td class="text-center">
									<a href="<?php echo e(url('/page/admin/laporan/data_kas')); ?>/<?php echo e($divisi->id_divisi); ?>/detail" class="btn btn-success btn-sm">
										<i class="fa fa-search"></i> Detail
									</a>
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
<?php echo $__env->make("page.layouts.template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Proyek-MPM-POLINDRA\Contoh\resources\views//page/admin/laporan/data_kas.blade.php ENDPATH**/ ?>