

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('page_content'); ?>

<section class="content">
    <div class="form-group">
        <label for="id_dusun">Dusun</label>
        <select name="id_dusun" id="id_dusun" class="form-control">
            <option value="">Pilih Dusun</option>
            <?php $__currentLoopData = $dusun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($d->id); ?>"><?php echo e($d->dusun); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="form-group" id="rw"></div>
    <div class="form-group" id="rt"></div>
</section>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('page_scripts'); ?>
<script>
    $(document).ready(function () {
        $("#id_dusun").change(function () {
            let id_dusun = $(this).val();

            $.ajax({
                type: "POST",
                url: "<?php echo e(url('page/admin/dashboard/coba/combobox/ambil-rw')); ?>",
                data: { id_dusun: id_dusun },
                success: function(data){
                    $("#rw").html(data);
                }
            });
        })
    })
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/coba/combobox.blade.php ENDPATH**/ ?>