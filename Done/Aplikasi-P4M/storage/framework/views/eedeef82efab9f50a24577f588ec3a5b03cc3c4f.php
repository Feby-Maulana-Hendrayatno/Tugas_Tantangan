<div class="form-group">
    <label for="no_kk"> Nomor KK </label>
    <input type="text" name="no_kk" id="no_kk" class="form-control input-sm" placeholder="Masukkan No. KK" value="<?php echo e($edit->no_kk); ?>">
</div>
<div class="form-group">
    <label for="alamat"> Alamat </label>
    <textarea name="alamat" id="alamat" class="form-control input-sm" cols="30" rows="5" placeholder="Alamat Jalan / Perumahan"><?php echo e($edit->alamat); ?></textarea>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="id_dusun">Dusun</label>
            <select name="id_dusun" id="id_dusun" class="form-control input-sm select2" width="100%">
                <option value="">Pilih Dusun</option>
                <?php $__currentLoopData = $data_dusun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($d->id); ?>">
                    <?php echo e($d->dusun); ?>

                </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group" id="rw"></div>
    </div>

    <div class="col-md-4">
        <div class="form-group" id="rt"></div>
    </div>
</div>
<div class="form-group">
    <label for="tanggal_cetak"> Tanggal Cetak Kartu Keluarga </label>
    <input type="date" name="tanggal_cetak" id="tanggal_cetak" class="form-control input-sm">
</div>
<div class="form-group">
    <label for="kelas_sosial"> Kelas Sosial </label>
    <select name="kelas_sosial" id="kelas_sosial" class="form-control input-sm">
        <option value="">- Pilih -</option>
        <?php $__currentLoopData = $data_keluarga_sejahtera; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($data->id); ?>">
            <?php echo e($data->nama); ?>

        </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>


<script>
    $(".select2").select2();
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
<?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/kependudukan/keluarga/form_edit_data_penduduk_masuk.blade.php ENDPATH**/ ?>