<input type="hidden" name="no_kk" value="<?php echo e($detail->no_kk); ?>">
<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" width="100%">
        <thead class="bg-purple">
            <tr>
                <th class="text-center">No.</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Hubungan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                use App\Models\Model\Penduduk;
                $getData = Penduduk::where("id_rtm", $detail->no_kk)->get();
            ?>
            <?php $__currentLoopData = $getData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text-center"><?php echo e($loop->iteration); ?>.</td>
                    <td><?php echo e($data->nik); ?></td>
                    <td><?php echo e($data->nama); ?></td>
                    <td><?php echo e($data->getHubunganRtm->nama); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<div class="form-group">
    <label for="nikKepala"> NIK / Nama Penduduk </label>
    <select name="nik" id="nikKepala" class="form-control input-sm select2" width="100%">
        <option value="">- Pilih -</option>
        <?php
            $ambilData = Penduduk::where("id_rtm", NULL)->get();
        ?>
        <?php $__empty_1 = true; $__currentLoopData = $ambilData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ambil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <option value="<?php echo e($ambil->id); ?>">
                NIK : <?php echo e($ambil->nik); ?> - <?php echo e($ambil->nama); ?> - <?php echo e($ambil->getHubungan->nama); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <option disabled>
                DATA TIDAK ADA
            </option>
        <?php endif; ?>
    </select>
</div>

<script>
    $(function() {
        $("#nikKepala").select2()
    });
</script>
<?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/kependudukan/rtm/tambah_anggota_rumah_tangga.blade.php ENDPATH**/ ?>