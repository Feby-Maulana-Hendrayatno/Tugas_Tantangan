<input type="hidden" name="id" value="<?php echo e($edit->id); ?>">
<div class="form-group">
    <label for="nik" class="col-sm-2 control-label"> NIK </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK" value="<?php echo e($edit->nik); ?>">
    </div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-2 control-label"> Nama </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" value="<?php echo e($edit->nama); ?>">
    </div>
</div>
<div class="form-group">
    <label for="email" class="col-sm-2 control-label"> Email </label>
    <div class="col-sm-10">
        <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email" value="<?php echo e($edit->email); ?>">
    </div>
</div>
<div class="form-group">
    <label for="jenis_kelamin" class="col-sm-2 control-label"> JK </label>
    <div class="col-sm-10">
        <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
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
<div class="form-group">
    <label for="no_hp" class="col-sm-2 control-label"> No. HP </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="0" value="<?php echo e($edit->no_hp); ?>">
    </div>
</div>
<div class="form-group">
    <label for="alamat" class="col-sm-2 control-label"> Alamat </label>
    <div class="col-sm-10">
        <textarea name="alamat" id="alamat" class="form-control" rows="5" placeholder="Masukkan Alamat"><?php echo e($edit->alamat); ?></textarea>
    </div>
</div>
<?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/pegawai/edit.blade.php ENDPATH**/ ?>