<input type="hidden" name="id" value="<?php echo e($edit->id); ?>">
<div class="form-group">
    <label for="jenis_organisasi"> Jenis Organisasi </label>
    <input type="text" name="jenis_organisasi" class="form-control" id="jenis_organisasi" placeholder="Masukkan Jenis Organisasi" value="<?php echo e($edit->jenis_organisasi); ?>">
</div>
<div class="form-group">
    <label for="jumlah_anggota"> Jumlah Anggota </label>
    <input type="number" name="jumlah_anggota" class="form-control" id="jumlah_anggota" placeholder="0" value="<?php echo e($edit->jumlah_anggota); ?>">
</div>
<div class="form-group">
    <label for="lokasi"> Lokasi </label>
    <input type="text" name="lokasi" class="form-control" id="lokasi" placeholder="Masukkan Lokasi" value="<?php echo e($edit->lokasi); ?>">
</div>
<?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/potensi/sdk/edit.blade.php ENDPATH**/ ?>