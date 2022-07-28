<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label class="control-label"> NIS </label>
			<input type="text" class="form-control" name="nis" placeholder="Masukkan NIS" value="<?php echo e($edit->nis); ?>" readonly autocomplete="off">
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label class="control-label"> Nama </label>
			<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" value="<?php echo e($edit->nama); ?>" autocomplete="off">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="form-group">
			<label class="control-label"> Nama Kelas </label>
			<select class="form-control" name="id_kelas">
				<option value="" disabled selected>- Pilih -</option>
				<?php $__currentLoopData = $data_kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($edit->id_kelas == $kelas->id): ?>
					<option value="<?php echo e($kelas->id); ?>" selected>
						<?php echo e($kelas->nama_kelas); ?>

					</option>
					<?php else: ?>
					<option value="<?php echo e($kelas->id); ?>">
						<?php echo e($kelas->nama_kelas); ?>

					</option>
					<?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label class="control-label"> No. Telepon </label>
			<input type="text" class="form-control" name="no_telp" placeholder="Masukkan No. Telepon" value="<?php echo e($edit->no_telp); ?>" autocomplete="off">
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label class="control-label"> Jenis Kelamin </label>
			<select class="form-control" name="jenis_kelamin">
				<option value="" disabled selected>- Pilih -</option>
				<?php if($edit->jenis_kelamin == "Laki - Laki"): ?>
				<option value="Laki - Laki" selected>Laki - Laki</option>
				<option value="Perempuan">Perempuan</option>
				<?php elseif($edit->jenis_kelamin == "Perempuan"): ?>
				<option value="Laki - Laki">Laki - Laki</option>
				<option value="Perempuan" selected>Perempuan</option>
				<?php else: ?>
				<option value="Laki - Laki">Laki - Laki</option>
				<option value="Perempuan">Perempuan</option>
				<?php endif; ?>
			</select>
		</div>
	</div>
</div>
<div class="form-group">
	<label class="control-label">Alamat</label>
	<textarea class="form-control" name="alamat" placeholder="Masukkan Alamat" rows="4"><?php echo e($edit->alamat); ?></textarea>
</div>
<?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Project1\resources\views/content/page/admin/siswa/edit_data_siswa.blade.php ENDPATH**/ ?>