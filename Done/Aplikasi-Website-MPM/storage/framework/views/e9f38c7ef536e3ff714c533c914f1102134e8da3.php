<div class="form-group">
	<label for="nim"> NIM </label>
	<input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM" value="<?php echo e($edit->nim); ?>" readonly>
</div>
<div class="form-group">
	<label for="nama"> Nama </label>
	<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="<?php echo e($edit->nama); ?>">
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label for="jenis_kelamin"> Jenis Kelamin </label>
			<select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
				<option value="">- Pilih -</option>
				<?php if($edit->jenis_kelamin == "L"): ?>
				<option value="L" selected>Laki - Laki</option>
				<option value="P">Perempuan</option>
				<?php elseif($edit->jenis_kelamin == "P"): ?>
				<option value="L">Laki - Laki</option>
				<option value="P" selected>Perempuan</option>
				<?php else: ?>
				<option value="L">Laki - Laki</option>
				<option value="P">Perempuan</option>
				<?php endif; ?>
			</select>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="agama"> Agama </label>
			<select class="form-control" id="agama" name="agama">
				<option value="">- Pilih -</option>
				<?php if($edit->agama == "islam"): ?>
				<option value="islam" selected> Islam </option>
				<option value="kristen"> Kristen </option>
				<option value="hindu"> Hindu </option>
				<option value="buddha"> Buddha </option>
				<option value="konghucu"> Konghucu </option>
				<?php elseif($edit->agama == "kristen"): ?>
				<option value="islam"> Islam </option>
				<option value="kristen" selected> Kristen </option>
				<option value="hindu"> Hindu </option>
				<option value="buddha"> Buddha </option>
				<option value="konghucu"> Konghucu </option>
				<?php elseif($edit->agama == "hindu"): ?>
				<option value="islam"> Islam </option>
				<option value="kristen"> Kristen </option>
				<option value="hindu" selected> Hindu </option>
				<option value="buddha"> Buddha </option>
				<option value="konghucu"> Konghucu </option>
				<?php elseif($edit->agama == "buddha"): ?>
				<option value="islam"> Islam </option>
				<option value="kristen"> Kristen </option>
				<option value="hindu" selected> Hindu </option>
				<option value="buddha"> Buddha </option>
				<option value="konghucu"> Konghucu </option>
				<?php elseif($edit->agama == "konghucu"): ?>
				<option value="islam"> Islam </option>
				<option value="kristen"> Kristen </option>
				<option value="hindu"> Hindu </option>
				<option value="buddha"> Buddha </option>
				<option value="konghucu" selected> Konghucu </option>
				<?php else: ?>
				<option value="islam"> Islam </option>
				<option value="kristen"> Kristen </option>
				<option value="hindu"> Hindu </option>
				<option value="buddha"> Buddha </option>
				<option value="konghucu"> Konghucu </option>
				<?php endif; ?>
			</select>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label for="no_hp"> No. HP </label>
			<input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="0" value="<?php echo e($edit->no_hp); ?>">
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="id_kelas"> Kelas </label>
			<select class="form-control" id="id_kelas" name="id_kelas">
				<option value="">- Pilih -</option>
				<?php $__currentLoopData = $data_kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($edit->id_kelas == $kelas->id_kelas): ?>
					<option value="<?php echo e($kelas->id_kelas); ?>" selected>
						<?php echo e($kelas->nama_kelas); ?>

					</option>
					<?php else: ?>
					<option value="<?php echo e($kelas->id_kelas); ?>">
						<?php echo e($kelas->nama_kelas); ?>

					</option>
					<?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
		</div>
	</div>
</div>
<div class="form-group">
	<label for="alamat"> Alamat </label>
	<textarea class="form-control" id="alamat" name="alamat" rows="5" placeholder="Masukkan Alamat"><?php echo e($edit->alamat); ?></textarea>
</div><?php /**PATH C:\Users\ASUS\Desktop\Proyek-Terbaru-MPM\Contoh\resources\views/page/admin/anggota/edit_data_anggota.blade.php ENDPATH**/ ?>