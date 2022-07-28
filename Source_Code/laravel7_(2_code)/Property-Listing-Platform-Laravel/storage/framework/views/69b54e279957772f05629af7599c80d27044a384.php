<?php if($message = Session::get('success')): ?>
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>


<?php if($message = Session::get('error')): ?>
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>


<?php if($message = Session::get('warning')): ?>
<div class="alert alert-warning alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>


<?php if($message = Session::get('info')): ?>
<div class="alert alert-info alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>


<!-- <?php if($errors->any()): ?>
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	Please check the form below for errors
</div>
<?php endif; ?> --><?php /**PATH D:\Tugas_Pa_Anis\DONE\laravel7\Property-Listing-Platform-Laravel\resources\views/admin/includes/_notification.blade.php ENDPATH**/ ?>