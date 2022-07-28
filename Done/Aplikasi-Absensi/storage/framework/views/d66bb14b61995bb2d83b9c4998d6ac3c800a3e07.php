<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label class="control-label"> NIP </label>
			<input type="text" class="form-control" name="nip" placeholder="Masukkan NIP" value="<?php echo e($edit->nip); ?>" readonly>
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
	<div class="col-md-6">
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
	<div class="col-md-6">
		<div class="form-group">
			<label class="control-label"> No. HP </label>
			<input type="text" class="form-control" name="no_hp" placeholder="Masukkan No. HP" value="<?php echo e($edit->no_hp); ?>" autocomplete="off">
		</div>
	</div>
</div>
<div class="form-group">
	<label class="control-label"> Alamat </label>
	<textarea class="form-control" name="alamat" placeholder="Masukkan Alamat" rows="5"><?php echo e($edit->alamat); ?></textarea>
</div>
<?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Project1\resources\views/content/page/admin/guru/edit_data_guru.blade.php ENDPATH**/ ?>