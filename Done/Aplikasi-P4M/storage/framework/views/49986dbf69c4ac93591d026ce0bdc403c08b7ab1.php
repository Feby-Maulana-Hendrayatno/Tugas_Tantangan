<label for="id_rw">RW</label>
<select name="id_rw" id="id_rw" class="form-control input-sm select2" width="100%">
    <option value="">Pilih RW</option>
    <?php $__currentLoopData = $rw; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($r->id); ?>">
        <?php echo e($r->rw); ?>

    </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>

<script>
    $("#id_rw").change(function () {
        let id_rw = $(this).val();

        $.ajax({
            type: "POST",
            url: "<?php echo e(url('page/admin/dashboard/coba/combobox/ambil-rt')); ?>",
            data: { id_rw: id_rw },
            success: function(data){
                $("#rt").html(data);
            }
        });
    })

    $(function() {
        $("#id_rw").select2()
    });
</script>
<?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/penduduk/ajax/rw.blade.php ENDPATH**/ ?>