

<?php $__env->startSection("page_content"); ?>

<div class="row mt">
	<div class="col-md-12">
		<div class="content-panel">
			<h4><i class="fa fa-money"></i> Data Transaksi</h4>
			<section id="unseen">
				<table id="data" class="table table-bordered table-striped table-condensed">
					<thead>
						<tr>
							<th class="text-center">No.</th>
							<th class="text-center">No. Transaksi</th>
							<th class="text-center">Tanggal Pesan</th>
							<th>Nama Pelanggan</th>
							<th class="text-center">Telepon Pelanggan</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 0 ?>

						<?php $__currentLoopData = $data_pelanggan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelanggan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="text-center"><?php echo e(++$no); ?>.</td>
								<td class="text-center"><?php echo e($pelanggan->re_transaksi->no_transaksi); ?></td>
								<td class="text-center"><?php echo e($pelanggan->re_transaksi->tgl_pesan); ?></td>
								<td><?php echo e($pelanggan->nama_pel); ?></td>
								<td class="text-center"><?php echo e($pelanggan->telp_pel); ?></td>
								<td class="text-center">
									<a href="<?php echo e(url('/detail_pelanggan_transaksi/'.$pelanggan->id.'/detail_trans')); ?>" class="btn btn-info btn-sm">
										<i class="fa fa-search"></i> Detail
									</a>
								</td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</section>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("content.layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Project2\resources\views/content/transaksi/data_transaksi.blade.php ENDPATH**/ ?>