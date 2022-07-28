<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name"> Name </label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo e($edit->name); ?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="username"> Username </label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo e($edit->username); ?>">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="email"> Email </label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" value="<?php echo e($edit->email); ?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="password"> Password </label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="gambar"> Gambar </label>
            <?php if($edit->gambar): ?>
            <br>
            <img src="<?php echo e(url('storage/'.$edit->gambar)); ?>" class="gambar-preview mb-5">
            <?php else: ?>
            <img class="gambar-preview" style="width: 300px;">
            <?php endif; ?>
            <input onchange="previewImage()" type="file" class="form-control" name="gambar" id="gambar">
        </div>
    </div>
</div>

<?php $__env->startSection('page_scripts'); ?>

<script type="text/javascript">

function previewImage()
    {
        const gambar = document.querySelector("#gambar");
        const gambarPreview = document.querySelector(".gambar-preview");

        gambarPreview.style.display = "block";

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
            gambarPreview.src = oFREvent.target.result;
        }
    }

</script>

<?php $__env->stopSection(); ?>
<?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/akun/edit.blade.php ENDPATH**/ ?>