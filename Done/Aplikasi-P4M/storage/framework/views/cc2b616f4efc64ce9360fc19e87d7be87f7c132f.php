<?php
use App\Models\Model\Peta;
$desa = Peta::select('wilayah_desa')->first();
?>

<?php if(!empty($desa)): ?>

<style>
    #mapDesa iframe {
        width: 100%;
        height: 250px;
    }
</style>

<div class="single_bottom_rightbar">
    <h2><i class="fa fa-map-marker"></i> Wilayah Desa</h2>
    <div class="box-body">
        <div id="mapDesa">
            <?php if($desa->wilayah_desa != NULL): ?>
            <?php echo $desa->wilayah_desa; ?>

            <?php else: ?>
            Belum upload
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/pengunjung/widget/widget_wilayah_desa.blade.php ENDPATH**/ ?>