<style>
    #widget ul li {
        list-style: circle;
        margin-left: 20px;
        margin-bottom: 10px;
    }
</style>

<div class="col-md-4">
    
    <div id="widget">
        <div class="widget">
            <div class="widget_title">Sub Menu</div>
            <div class="widget_body">
                <ul>
                    <li>
                        <a href="/pemerintahan-desa/visi-misi" class="text-primary">Visi Misi</a>
                    </li>
                    <li>
                        <a href="/pemerintahan-desa/struktur-organisasi" class="text-primary">Struktur Organisasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php echo $__env->make('pengunjung/widget/widget_kontak', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/pengunjung/page/pemerintahan_desa/submenu.blade.php ENDPATH**/ ?>