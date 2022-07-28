<!-- LogoutModal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yakin Logout ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form method="POST" action="<?php echo e(route('logout')); ?>">
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-danger">Logout</button>
        </form>
      </div>
    </div>
  </div>
</div><?php /**PATH D:\Tugas_Pa_Anis\laraschool\resources\views/layouts/backend/modal.blade.php ENDPATH**/ ?>