

<div class="container">
    <form method="post" action="<?php echo e(route('images.store')); ?>"
          enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <div class="image">
        <label><h4>Add image</h4></label>
        <input type="file" class="form-control" required name="image">
      </div>

      <div class="post_button">
        <button type="submit" class="btn btn-success">Add</button>
      </div>
    </form>
  </div>

  <div class="container">
    <h3>View all image</h3><hr>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Image id</th>
          <th scope="col">Image</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $imageData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($data->id); ?></td>
          <td>
	     <img src="<?php echo e(url('public/Image/'.$data->image)); ?>"
 style="height: 100px; width: 150px;">
	  </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
<?php /**PATH D:\Tugas_Pa_Anis\hakimco\laravel-image-upload\resources\views/index.blade.php ENDPATH**/ ?>