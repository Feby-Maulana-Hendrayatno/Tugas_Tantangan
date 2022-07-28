

<?php $__env->startSection("page_content"); ?>

<div class="col-md-4">
	<div class="panel panel-yellow">
		<div class="panel-heading">
			Update Data Meja
		</div>
		<div class="panel-body pan">
			<form method="POST" action="<?php echo e(url('/update_meja')); ?>">
				<?php echo e(csrf_field()); ?>

				<input type="hidden" name="id" value="<?php echo e($edit->id); ?>">
				<div class="form-body pal">
					<div class="form-group">
						<label> Kode Meja </label>
						<input type="text" class="form-control" name="kode_meja" placeholder="Masukkan Kode Meja" value="<?php echo e($edit->kode_meja); ?>">
					</div>
					<div class="form-group">
						<label> Status Meja </label>
						<select class="form-control" name="status_meja">
							<option value="">- Pilih -</option>
							<?php if($edit->status_meja == "ready"): ?>
							<option value="ready" selected>Ready</option>
							<option value="terpesan">Terpesan</option>
							<?php else: ?>
							<option value="ready">Ready</option>
							<option value="terpesan" selected>Terpesan</option>
							<?php endif; ?>
						</select>
					</div>
				</div>
				<div class="form-actions text-right pal">
					<button type="submit" class="btn btn-warning btn-block">
						<i class="fa fa-fw fa-save"></i> Simpan 
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="col-md-8">
	<div class="panel panel-yellow">
		<div class="panel-heading">
			Data Meja
		</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th class="text-center">No.</th>
						<th class="text-center">Kode Meja</th>
						<th class="text-center">Status Meja</th>
						<th class="text-center">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 0 ?>

					<?php $__currentLoopData = $data_meja; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meja): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td class="text-center"><?php echo e(++$no); ?>.</td>
							<td class="text-center"><?php echo e($meja->kode_meja); ?></td>
							<td class="text-center"><?php echo e($meja->status_meja); ?></td>
							<td class="text-center">
								<a href="<?php echo e(url('/edit_meja/'.$meja->id.'/edit')); ?>" class="btn btn-warning btn-sm"><i class="fa fa-fw fa-pencil"></i> Update </a>
								<a onclick="return confirm('Mau di Hapus ?')" href="<?php echo e(url('/delete_meja/'.$meja->id.'/delete')); ?>" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash-o"></i> Delete </a>
							</td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("content.layouts", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Project4\resources\views/content/meja/update_meja.blade.php ENDPATH**/ ?>