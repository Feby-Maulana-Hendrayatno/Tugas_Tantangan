<input type="hidden" name="id" id="id" value="<?php echo e($edit->id); ?>">
<div class="form-group">
    <label for="nama"> Nama </label>
    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" value="<?php echo e($edit->getUser->nama); ?>">
</div>
<div class="form-group">
    <label for="email"> Email </label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email" value="<?php echo e($edit->getUser->email); ?>">
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="no_hp"> No. HP </label>
            <input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="Masukkan No. HP" value="<?php echo e($edit->getUser->no_hp); ?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="jenis_kelamin"> Jenis Kelamin </label>
            <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                <option value="">- Pilih -</option>
                <option value="L" <?php echo e($edit->getUser->jenis_kelamin == "L" ? "selected" : ""); ?>>Laki - Laki</option>
                <option value="P" <?php echo e($edit->getUser->jenis_kelamin == "P" ? "selected" : ""); ?>>Perempuan</option>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="tempat_lahir"> Tempat Lahir </label>
            <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" value="<?php echo e($edit->getUser->tempat_lahir); ?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="tanggal_lahir"> Tanggal Lahir </label>
            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo e($edit->getUser->tanggal_lahir); ?>">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="nama_ayah"> Nama Ayah </label>
            <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" placeholder="Masukkan Nama Ayah" value="<?php echo e($edit->nama_ayah); ?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="nama_ibu"> Nama Ibu </label>
            <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Masukkan Nama Ibu" value="<?php echo e($edit->nama_ibu); ?>">
        </div>
    </div>
</div>
<div class="form-group">
    <label for="alamat"> Alamat </label>
    <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10" placeholder="Masukkan Alamat"><?php echo e($edit->getUser->alamat); ?></textarea>
</div>
<div class="form-group">
    <label for="gambar"> Gambar </label>
    <input type="file" class="form-control" name="gambar" id="gambar">
</div>
<?php /**PATH E:\FILE KULIAH\SEMESTER 4\TUGAS KULIAH TAHUN AJARAN 2021 - 2022\PROYEK 3\RTQ-WEB\RumahTahfidz\resources\views/app/administrator/santri/v_edit.blade.php ENDPATH**/ ?>