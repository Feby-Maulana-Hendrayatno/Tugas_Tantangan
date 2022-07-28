

<?php $__env->startSection("title", "Blog"); ?>

<?php $__env->startSection("page_content"); ?>

<div class="container">
	<h1 class="mt-4 mb-3">
		Blog
	</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo e(url('/')); ?>">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Blog</li>
    </ol>

    <div class="card mb-4">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <a href="#">
              <img class="img-fluid rounded" src="<?php echo e(url('/gambar/gambar2.jpg')); ?>" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <h2 class="card-title">Post Title</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
        </div>
      </div>
      <div class="card-footer text-muted">
        Posted on January 1, 2017 by
        <a href="#">Start Bootstrap</a>
      </div>
    </div>

    <!-- Blog Post -->
    <div class="card mb-4">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <a href="#">
              <img class="img-fluid rounded" src="<?php echo e(url('/gambar/gambar2.jpg')); ?>" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <h2 class="card-title">Post Title</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
        </div>
      </div>
      <div class="card-footer text-muted">
        Posted on January 1, 2017 by
        <a href="#">Start Bootstrap</a>
      </div>
    </div>

    <!-- Blog Post -->
    <div class="card mb-4">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <a href="#">
              <img class="img-fluid rounded" src="<?php echo e(url('/gambar/gambar2.jpg')); ?>" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <h2 class="card-title">Post Title</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
        </div>
      </div>
      <div class="card-footer text-muted">
        Posted on January 1, 2017 by
        <a href="#">Start Bootstrap</a>
      </div>
    </div>

    <!-- Blog Post -->
    <div class="card mb-4">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <a href="#">
              <img class="img-fluid rounded" src="<?php echo e(url('/gambar/gambar2.jpg')); ?>" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <h2 class="card-title">Post Title</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
        </div>
      </div>
      <div class="card-footer text-muted">
        Posted on January 1, 2017 by
        <a href="#">Start Bootstrap</a>
      </div>
    </div>

    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
      <li class="page-item">
        <a class="page-link" href="#">&larr; Older</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">Newer &rarr;</a>
      </li>
    </ul>
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("page.user.layouts.template_user", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Proyek-MPM-POLINDRA\Contoh\resources\views/page/user/blog.blade.php ENDPATH**/ ?>