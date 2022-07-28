<input type="hidden" name="id" value="<?php echo e($edit->id); ?>">
<input type="hidden" name="nip_lama" value="<?php echo e($edit->nip_guru); ?>">
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label class="control-label"> Nama Guru </label>
			<select class="form-control" name="nip_guru">
				<option value="" disabled>- Pilih -</option>
				<?php $__currentLoopData = $data_guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($edit->nip_guru == $guru->nip): ?>
					<option value="<?php echo e($guru->nip); ?>" selected>
						<?php echo e($guru->nama); ?>

					</option>
					<?php else: ?>
					<option value="<?php echo e($guru->nip); ?>">
						<?php echo e($guru->nama); ?>

					</option>
					<?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label class="control-label"> Hari </label>
			<select class="form-control" name="hari">
				<option value="" disabled>- Pilih -</option>
				<?php if($edit->hari == "Senin"): ?>
				<option value="Senin" selected>Senin</option>
				<option value="Selasa">Selasa</option>
				<option value="Rabu">Rabu</option>
				<option value="Kamis">Kamis</option>
				<option value="Jum'at">Jum'at</option>
				<?php elseif($edit->hari == "Selasa"): ?>
				<option value="Senin">Senin</option>
				<option value="Selasa" selected>Selasa</option>
				<option value="Rabu">Rabu</option>
				<option value="Kamis">Kamis</option>
				<option value="Jum'at">Jum'at</option>
				<?php elseif($edit->hari == "Rabu"): ?>
				<option value="Senin">Senin</option>
				<option value="Selasa">Selasa</option>
				<option value="Rabu" selected>Rabu</option>
				<option value="Kamis">Kamis</option>
				<option value="Jum'at">Jum'at</option>
				<?php elseif($edit->hari == "Kamis"): ?>
				<option value="Senin">Senin</option>
				<option value="Selasa">Selasa</option>
				<option value="Rabu">Rabu</option>
				<option value="Kamis" selected>Kamis</option>
				<option value="Jum'at">Jum'at</option>
				<?php elseif($edit->hari == "Jum'at"): ?>
				<option value="Senin">Senin</option>
				<option value="Selasa">Selasa</option>
				<option value="Rabu">Rabu</option>
				<option value="Kamis">Kamis</option>
				<option value="Jum'at" selected>Jum'at</option>
				<?php else: ?>
				<option value="Senin">Senin</option>
				<option value="Selasa">Selasa</option>
				<option value="Rabu">Rabu</option>
				<option value="Kamis">Kamis</option>
				<option value="Jum'at">Jum'at</option>
				<?php endif; ?>
			</select>
		</div>
	</div>
</div>
<?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Project1\resources\views/content/page/admin/guru_piket/edit_data_guru_piket.blade.php ENDPATH**/ ?>