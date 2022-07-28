<?php if($flash=session('success')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <?php echo e($flash); ?>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>

<?php if($flash=session('info')): ?>
<div class="alert alert-info alert-dismissible fade show" role="alert">
  <?php echo e($flash); ?>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>

<?php if($flash=session('warning')): ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <?php echo e($flash); ?>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>

<?php if($flash=session('error')): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <?php echo e($flash); ?>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?><?php /**PATH D:\Tugas_Pa_Anis\laraschool\resources\views/components/alert.blade.php ENDPATH**/ ?>