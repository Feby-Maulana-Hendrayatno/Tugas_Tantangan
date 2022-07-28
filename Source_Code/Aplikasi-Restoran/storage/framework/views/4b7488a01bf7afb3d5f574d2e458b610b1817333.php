

<?php $__env->startSection("page_content"); ?>

<div class="col-md-12">
	<div class="panel panel-violet">
		<div class="panel-heading">
			Data Transaksi
		</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th class="text-center">No.</th>
						<th>Nama Pembeli</th>
						<th class="text-center">No. Telepon</th>
						<th class="text-center">Status Pemesanan</th>
						<th class="text-center">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 0 ?>

					<?php $__currentLoopData = $data_pemesanan_menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pemesanan_menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td class="text-center"><?php echo e(++$no); ?>.</td>
							<td><?php echo e($pemesanan_menu->nama_pembeli); ?></td>
							<td class="text-center"><?php echo e($pemesanan_menu->no_hp); ?></td>
							<td class="text-center"><?php echo e($pemesanan_menu->status_order); ?></td>
							<td class="text-center">
								<?php if(count($pemesanan_menu->relasi_ke_transaksi) > 0): ?>
								<button disabled class="btn btn-danger btn-sm">
									<i class="fa fa-money"></i> Sudah Bayar
								</button>
								<?php else: ?>
								<a href="<?php echo e(url('/bayar_transaksi/'.$pemesanan_menu->id.'/bayar')); ?>" class="btn btn-success btn-sm">
									<i class="fa fa-money"></i> Bayar
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make("content.layouts", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Project4\resources\views/content/transaksi/data_transaksi.blade.php ENDPATH**/ ?>