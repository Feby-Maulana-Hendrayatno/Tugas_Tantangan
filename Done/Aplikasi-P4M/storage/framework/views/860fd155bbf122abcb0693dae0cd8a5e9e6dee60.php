<input type="hidden" name="id_penduduk" value="<?php echo e($detail->id); ?>">
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <tbody>
            <tr>
                <td width="40%">NIK</td>
                <td width="60%">
                    : <?php echo e($detail->nik); ?>

                </td>
            </tr>
            <tr>
                <td>Nama Penduduk</td>
                <td>
                    : <?php echo e($detail->nama); ?>

                </td>
            </tr>
        </tbody>
    </table>
</div>

<hr>

<div class="form-group">
    <label for="kk_level"> Hubungan </label>
    <select name="kk_level" id="kk_level" class="form-control input-sm select2" width="100%">
        <option value="">--- PILIH HUBUNGAN ---</option>
        <?php $__currentLoopData = $data_hubungan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($data->id); ?>" <?php echo e($detail->kk_level == $data->id ? 'selected' : ''); ?> >
            <?php echo e($data->nama); ?>

        </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<script type="text/javascript">
$(".select2").select2();
</script>
<?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/kependudukan/keluarga/ubah_hubungan_keluarga.blade.php ENDPATH**/ ?>