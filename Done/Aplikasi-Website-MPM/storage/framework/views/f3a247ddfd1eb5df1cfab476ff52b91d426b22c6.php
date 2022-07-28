<input type="hidden" name="id_absensi" value="<?php echo e($edit->id_absensi); ?>">
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label> Nama Anggota </label>
			<select class="form-control select3bs4" name="nim_anggota" style="width: 100%;" required>
				<option selected="selected"> - Pilih - </option>
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
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label> Status Absen </label>
			<select class="form-control" name="status_absen" required>
				<?php if($edit->status_absen == 1): ?>
				<option value="">- Pilih -</option>
				<option value="1" selected>Hadir</option>
				<option value="2">Sakit</option>
				<option value="3">Izin</option>
				<option value="4">Alfa</option>
				<?php elseif($edit->status_absen == 2): ?>
				<option value="">- Pilih -</option>
				<option value="1">Hadir</option>
				<option value="2" selected>Sakit</option>
				<option value="3">Izin</option>
				<option value="4">Alfa</option>
				<?php elseif($edit->status_absen == 3): ?>
				<option value="">- Pilih -</option>
				<option value="1">Hadir</option>
				<option value="2">Sakit</option>
				<option value="3" selected>Izin</option>
				<option value="4">Alfa</option>
				<?php elseif($edit->status_absen == 4): ?>
				<option value="">- Pilih -</option>
				<option value="1">Hadir</option>
				<option value="2">Sakit</option>
				<option value="3">Izin</option>
				<option value="4" selected>Alfa</option>
				<?php else: ?>
				<option value="">- Pilih -</option>
				<option value="1">Hadir</option>
				<option value="2">Sakit</option>
				<option value="3">Izin</option>
				<option value="4">Alfa</option>
				<?php endif; ?>
			</select>
		</div>
	</div>
</div>
<div class="form-group">
	<label> Tanggal Absen </label>
	<input type="date" class="form-control" name="tanggal_absen" value="<?php echo e($edit->tanggal_absen); ?>" required>
</div>
<div class="form-group">
	<label> Keterangan </label>
	<textarea class="form-control" name="keterangan" placeholder="Masukkan Keterangan" rows="4"><?php echo e($edit->keterangan); ?></textarea>
</div><?php /**PATH C:\Users\ASUS\Desktop\Proyek-Terbaru-MPM\Contoh\resources\views/page/bph/absen/edit_absen_pertanggal.blade.php ENDPATH**/ ?>