<input type="hidden" name="id" value="<?php echo e($edit->id); ?>">
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="dusun"> Dusun </label>
            <input type="text" class="form-control" name="dusun" id="dusun" placeholder="0" value="<?php echo e($edit->dusun); ?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="tahun"> Tahun </label>
            <input type="text" class="form-control" name="tahun" id="tahun" placeholder="0" value="<?php echo e($edit->tahun); ?>">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="laki_laki"> Laki - Laki </label>
            <input type="number" class="form-control" name="laki_laki" id="laki_laki" placeholder="0" value="<?php echo e($edit->laki_laki); ?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="perempuan"> Perempuan </label>
            <input type="number" class="form-control" name="perempuan" id="perempuan" placeholder="0" value="<?php echo e($edit->perempuan); ?>">
        </div>
    </div>
</div>
<?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/rt_rw/edit.blade.php ENDPATH**/ ?>