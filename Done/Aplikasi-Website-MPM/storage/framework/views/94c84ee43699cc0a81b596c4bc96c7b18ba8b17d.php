<input type="hidden" name="id_kas" value="<?php echo e($edit->id_kas); ?>">
<div class="form-group">
	<label for="nim_anggota"> Nama Anggota </label>
	<select class="form-control" id="nim_anggota" name="nim_anggota">
		<option value="">- Pilih -</option>
		<?php $__currentLoopData = $data_divisi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $divisi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($edit->nim_anggota == $divisi->getAnggota->nim): ?>
			<option value="<?php echo e($divisi->getAnggota->nim); ?>" selected>
				<?php echo e($divisi->getAnggota->nama); ?>

			</option>
			<?php else: ?>
			<option value="<?php echo e($divisi->getAnggota->nim); ?>">
				<?php echo e($divisi->getAnggota->nama); ?>

			</option>
			<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</select>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label for="bayar"> Bayar </label>
			<input type="number" class="form-control" id="bayar" name="bayar" placeholder="0" value="<?php echo e($edit->bayar); ?>">
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="tanggal"> Tanggal </label>
			<input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="0" value="<?php echo e($edit->tanggal); ?>">
		</div>
	</div>
</div>
<div class="form-group">
	<label for="keterangan"> Keterangan </label>
	<textarea class="form-control" id="keterangan" name="keterangan" rows="4" placeholder="Masukkan Keterangan"><?php echo e($edit->keterangan); ?></textarea>
</div><?php /**PATH C:\Users\ASUS\Desktop\Proyek-Terbaru-MPM\Contoh\resources\views/page/bph/kas/edit_data_kas_pertanggal.blade.php ENDPATH**/ ?>