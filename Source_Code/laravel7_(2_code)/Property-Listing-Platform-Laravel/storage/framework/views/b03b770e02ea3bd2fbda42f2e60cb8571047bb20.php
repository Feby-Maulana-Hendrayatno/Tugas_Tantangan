


<?php $__env->startSection('title'); ?> About Us | <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <section id="showcase-inner" class="py-5 text-white">
        <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
            <h1 class="display-4">About BT Real Estate</h1>
            <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, pariatur!</p>
            </div>
        </div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <section id="bc" class="mt-3">
        <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{% url 'listing:home' %}">
                <i class="fas fa-home"></i> Home</a>
            </li>
            <li class="breadcrumb-item active"> About</li>
            </ol>
        </nav>
        </div>
    </section>

    <section id="about" class="py-4">
        <div class="container">
        <div class="row">
            <div class="col-md-8">
            <h2>We Search For The Perfect Home</h2>
            <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, pariatur!</p>
            <img src="assets/img/about.jpg" alt="">
            <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis esse officia repudiandae ad saepe ex, amet
                neque quod accusamus rem quia magnam magni dolorum facilis ullam minima perferendis? Exercitationem at quaerat
                commodi id libero eveniet harum perferendis laborum molestias quia.</p>
            </div>
            <div class="col-md-4">
            <?php if($som): ?>
            <div class="card">
                <img class="card-img-top" src="<?php echo e(url($som -> realtor-> image)); ?>" alt="Seller of the month">
                <div class="card-body">
                <h5 class="card-title">Seller Of The Month</h5>
                <h6 class="text-secondary"><?php echo e($som ->realtor-> name); ?></h6>
                <p class="card-text">
                </p>
                </div>
            </div>
            <?php endif; ?>
            </div>
        </div>
        </div>
    </section>

    <!-- Work -->
    <section id="work" class="bg-dark text-white text-center">
        <h2 class="display-4">We Work For You</h2>
        <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem velit aperiam, unde aliquid at similique!</h4>
        <hr>
    <a href="<?php echo e(route('listings')); ?>" class="btn btn-secondary text-white btn-lg">View Our Featured Listings</a>
    </section>

  <!-- Team -->
  <section id="team" class="py-5">
    <div class="container">
      <h2 class="text-center">Our Team</h2>
      <div class="row text-center">

        <?php $__currentLoopData = $realtors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $realtor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <div class="col-md-4">
          <img src="<?php echo e(url($realtor -> image)); ?>" alt="" class="rounded-circle mb-3">
          <h4><?php echo e($realtor -> name); ?></h4>
          <p class="text-success">
            <i class="fas fa-award text-success mb-3"></i> Realtor</p>
          <hr>
          <p>
            <i class="fas fa-phone"></i> <?php echo e($realtor -> contact_number); ?></p>
          <p>
            <i class="fas fa-envelope-open"></i> <?php echo e($realtor -> email); ?></p>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\DONE\laravel7\Property-Listing-Platform-Laravel\resources\views/site/layouts/about.blade.php ENDPATH**/ ?>