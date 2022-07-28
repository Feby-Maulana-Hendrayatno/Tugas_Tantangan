<input type="hidden" name="nik_lama" value="<?php echo e($edit->nik); ?>">
<div class="form-group">
	<label> NIK Karyawan </label>
	<input type="text" class="form-control" name="nik" placeholder="Masukkan NIK Karyawan" value="<?php echo e($edit->nik); ?>" readonly>
</div>
<div class="form-group">
	<label> Nama Karyawan </label>
	<input type="text" class="form-control" name="nama_kar" placeholder="Masukkan Nama Karyawan" value="<?php echo e($edit->nama_kar); ?>">
</div>
<div class="form-group">
	<label> Alamat Karyawan </label>
	<textarea class="form-control" name="alamat_kar" rows="5" placeholder="Masukkan Alamat Karyawan"><?php echo e($edit->alamat_kar); ?></textarea>
</div>
<div class="form-group">
	<label> No. Telepon Karyawan </label>
	<input type="text" class="form-control" name="telp_kar" placeholder="Masukkan No. Telepon" value="<?php echo e($edit->telp_kar); ?>">
</div><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Project2\resources\views/content/petugas/update_data_petugas.blade.php ENDPATH**/ ?>