<input type="hidden" name="id" value="<?php echo e($edit->id); ?>">
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label class="control-label"> Nama Kelas </label>
			<input type="text" class="form-control" name="nama_kelas" placeholder="Masukkan Nama Kelas" value="<?php echo e($edit->nama_kelas); ?>" autocomplete="off">
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label class="control-label"> Nama Wali Kelas </label>
			<select class="form-control" name="nip_wali_kelas">
				<option value="" disabled>- Pilih -</option>
				<?php $__currentLoopData = $data_guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($edit->nip_wali_kelas == $guru->nip): ?>
					<option value="<?php echo e($guru->nip); ?>" selected>
						<?php echo e($guru->nama); ?>

					</option>
					<?php else: ?>
						<?php if($guru->kelas == ""): ?>
						<option value="<?php echo e($guru->nip); ?>">
							<?php echo e($guru->nama); ?>

						</option>
						<?php endif; ?>
					<?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
		</div>
	</div>
</div>
<?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Project1\resources\views/content/page/admin/kelas/edit_data_kelas.blade.php ENDPATH**/ ?>