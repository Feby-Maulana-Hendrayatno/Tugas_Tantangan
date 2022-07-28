<input type="hidden" name="id_kk" value="<?php echo e($detail->nik_kepala); ?>">
<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" width="100%">
        <thead class="bg-purple">
            <tr>
                <th class="text-center">No.</th>
                <th class="text-center">NIK</th>
                <th>Nama</th>
                <th class="text-center">Hubungan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                use App\Models\Model\Penduduk;

                $data_penduduk = Penduduk::where("id_kk", $detail->nik_kepala)
                ->where("id_kk", "!=", NULL)
                ->get();
            ?>

            <?php $__currentLoopData = $data_penduduk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center"><?php echo e($loop->iteration); ?>.</td>
                <td class="text-center"><?php echo e($data->nik); ?></td>
                <td><?php echo e($data->nama); ?></td>
                <td class="text-center">
                    <?php if(empty($data->getHubungan->nama)): ?>
                    <i>
                        <b>
                            BELUM TERISI
                        </b>
                    </i>
                    <?php else: ?>
                    <?php echo e($data->getHubungan->nama); ?>

                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<div class="form-group">
    <label for="selectPenduduk"> NIK / Nama Penduduk <span>(dari penduduk yang tidak memiliki KK)</span> </label>
    <select name="id_penduduk" id="selectPenduduk" class="form-control input-sm select2" width="100%">
        <option value="">- Pilih -</option>
        <?php
            $getPenduduk = Penduduk::where("id_kk", NULL)
            ->where("kk_level", "!=", 1)
            ->get();
        ?>
        <?php $__empty_1 = true; $__currentLoopData = $getPenduduk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <option value="<?php echo e($data->id); ?>">
            NIK : <?php echo e($data->nik); ?> - <?php echo e($data->nama); ?> - <?php echo e($data->getHubungan->nama); ?>

        </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <option disabled>
            Tidak Ada Data
        </option>
        <?php endif; ?>
    </select>
</div>

<script>
    $(function() {
        $("#selectPenduduk").select2()
    });
</script>
<?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//admin/page/kependudukan/keluarga/form_tambah_data_anggota_keluarga.blade.php ENDPATH**/ ?>