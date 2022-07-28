<?php
use App\Models\Model\Peta;
$kantor = Peta::select('lokasi_kantor')->first();
?>

<style>
    #mapKantor iframe {
        width: 100%;
        height: 300px;
    }
</style>

<?php if(!empty($kantor)): ?>
<div class="single_bottom_rightbar">
    <h2><i class="fa fa-map-marker"></i> Lokasi Kantor Desa</h2>
    <div class="box-body">
        <div id="mapKantor">
            <?php if($kantor->lokasi_kantor != NULL): ?>
            <?php echo $kantor->lokasi_kantor; ?>

            <?php else: ?>
            Belum upload
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Aplikasi-P4M\resources\views/pengunjung/widget/widget_lokasi_kantor.blade.php ENDPATH**/ ?>