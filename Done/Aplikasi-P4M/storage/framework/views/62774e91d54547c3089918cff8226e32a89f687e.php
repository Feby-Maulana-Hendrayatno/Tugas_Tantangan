<input type="hidden" name="id" value="<?php echo e($edit->id); ?>">
<div class="form-group">
    <label for="id_rw">RW</label>
    <select class="form-control select2" name="id_rw" id="id_rw">
        <option value="">- Silahkan cari RW -</option>
        <?php $__currentLoopData = $data_rw; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rw): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($rw->id); ?>" <?php echo e($rw->id == $edit->id_rw ? 'selected' : ''); ?>><?php echo e($rw->rw); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<div class="form-group">
    <label for="rt"> RT </label>
    <input type="text" class="form-control" name="rt" id="rt" placeholder="Masukkan RT" value="<?php echo e($edit->rt); ?>">
</div>
<script>
    $(function() {
        $(".select2").select2()
    });
</script>
<?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/penduduk/rt/edit_data_rt.blade.php ENDPATH**/ ?>