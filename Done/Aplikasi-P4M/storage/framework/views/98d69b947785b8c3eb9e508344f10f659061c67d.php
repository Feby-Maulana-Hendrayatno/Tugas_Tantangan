<label for="id_rt">RT</label>
<select name="id_rt" id="id_rt" class="form-control input-sm select2" width="100%">
    <option value="">Pilih RT</option>
    <?php $__currentLoopData = $rt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($r->id); ?>">
        <?php echo e($r->rt); ?>

    </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>

<script type="text/javascript">
    $(function() {
        $("#id_rt").select2()
    });
</script>
<?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/penduduk/ajax/rt.blade.php ENDPATH**/ ?>