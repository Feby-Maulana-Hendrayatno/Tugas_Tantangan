

<?php $__env->startSection("page_content"); ?>

<div class="col-md-12">
	<div class="panel panel-violet">
		<div class="panel-heading">
			Data Pembayaran Transaksi 
		</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th class="text-center">No.</th>
						<th class="text-center">Kode Transaksi</th>
						<th class="text-center">Status Transaksi</th>
						<th class="text-center">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 0 ?>

					<?php $__currentLoopData = $data_transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td class="text-center"><?php echo e(++$no); ?>.</td>
							<td class="text-center"><?php echo e($transaksi->kode_transaksi); ?></td>
							<td class="text-center"><?php echo e($transaksi->status_transaksi); ?></td>
							<td class="text-center">
								<a href="<?php echo e(url('/detail_pembayaran/'.$transaksi->id.'/detail')); ?>" class="btn btn-primary btn-sm">
									<i class="fa fa-fw fa-search"></i> Detail Pembayaran
								</a>
							</td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("content.layouts", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Project4\resources\views/content/transaksi/pembayaran_transaksi.blade.php ENDPATH**/ ?>