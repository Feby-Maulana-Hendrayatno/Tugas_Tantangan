<?php if(Session::has('message')): ?>
<script src="<?php echo e(asset('assets/js/toastr.js' )); ?>"></script>
<script>
    (function($) {

    var type = "<?php echo e(Session::get('alert-type', 'info')); ?>";
        console.log(type);
      switch(type){
          case 'info':
                toastr.info("<?php echo e(Session::get('message')); ?>");
                break;
            
          case 'warning':
                toastr.warning("<?php echo e(Session::get('message')); ?>");
                break;
  
          case 'success':
                toastr.success("<?php echo e(Session::get('message')); ?>");
                break;
  
          case 'error':
              toastr.error("<?php echo e(Session::get('message')); ?>");
              break;
      }
   
})(jQuery);
</script>
<?php endif; ?><?php /**PATH D:\Tugas_Pa_Anis\Property-Listing-Platform-Laravel\resources\views/site/includes/_notification.blade.php ENDPATH**/ ?>