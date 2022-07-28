<input type="hidden" name="no_kk" value="<?php echo e($edit->no_kk); ?>">
<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" width="100%">
        <thead class="bg-purple">
            <th class="text-center">No.</th>
            <th>NIK</th>
            <th>Nama</th>
            <th class="text-center">Hubungan</th>
        </thead>
        <tbody>
            <?php
                use App\Models\Model\Penduduk;
                $data_penduduk = Penduduk::where("id_rtm", $edit->no_kk)->get();
            ?>
            <?php $__currentLoopData = $data_penduduk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penduduk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center"><?php echo e($loop->iteration); ?>.</td>
                <td><?php echo e($penduduk->nik); ?></td>
                <td><?php echo e($penduduk->nama); ?></td>
                <td class="text-center"><?php echo e($penduduk->getHubunganRtm->nama); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<div class="form-group">
    <label for="selectPenduduk"> NIK / Nama Penduduk </label>
    <select name="id_penduduk" id="selectPenduduk" class="form-control input-sm select2" width="100%">
        <option value="">- Pilih -</option>
        <?php
            $getData = Penduduk::where("id_rtm", NULL)->get();
        ?>
        <?php $__currentLoopData = $getData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($data->id); ?>">
            NIK : <?php echo e($data->nik); ?> - <?php echo e($data->nama); ?> - <?php echo e($data->getHubungan->nama); ?>

        </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<script>
    $(function() {
        $("#selectPenduduk").select2()
    });
</script>
<?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/kependudukan/rtm/tambah_data_anggota_rtm.blade.php ENDPATH**/ ?>