<input type="hidden" name="id" value="<?php echo e($edit->id); ?>">
<div class="form-group">
    <label for="idDusun">Dusun</label>
    <select name="id_dusun" id="idDusun" class="form-control input-sm select2" style="width: 100%">
        <option value="">- Pilih -</option>
        <?php $__currentLoopData = $data_dusun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dusun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($dusun->id); ?>" <?php echo e($edit->id_dusun == $dusun->id ? "selected" : ''); ?>>
            <?php echo e($dusun->dusun); ?>

        </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<div class="form-group">
    <label for="rw"> RW </label>
    <input type="text" class="form-control" name="rw" id="rw" placeholder="Masukkan RW" value="<?php echo e($edit->rw); ?>">
</div>

<script type="text/javascript">
    $(function() {
        $("#idDusun").select2()
    });
</script>
<?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/penduduk/rw/edit_data_rw.blade.php ENDPATH**/ ?>