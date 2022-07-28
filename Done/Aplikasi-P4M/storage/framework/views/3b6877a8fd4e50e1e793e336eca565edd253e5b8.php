<input type="hidden" name="id_penduduk" value="<?php echo e($edit->id); ?>">
<div class="form-group">
    <label for="idHubungan"> Hubungan </label>
    <select name="idHubungan" id="idHubungan" class="form-control input-sm select2" width="100%">
        <option value="">- Pilih -</option>
        <?php $__currentLoopData = $data_rtm_hubungan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($data->id); ?>" <?php echo e(($edit->rtm_level == $data->id) ? 'selected' : ''); ?> >
            <?php echo e($data->nama); ?>

        </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<script type="text/javascript">
    $(function() {
        $("#idHubungan").select2()
    });
</script>
<?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/kependudukan/rtm/ubah_hubungan.blade.php ENDPATH**/ ?>