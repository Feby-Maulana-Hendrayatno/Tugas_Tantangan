
<?php $__env->startSection('title'); ?>All Properties | <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    

  <section id="showcase-inner" class="py-5 text-white">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12">
          <h1 class="display-4">Browse Our Properties</h1>
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
          <li class="breadcrumb-item active"> Browse Listings</li>
        </ol>
      </nav>
    </div>
  </section>

  <!-- Listings -->
  <section id="listings" class="py-4">
    <div class="container">
      <div class="row">

        <!-- Listing 1 -->
<?php if(count($listings) > 0): ?>
        <?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card listing-preview">
            <img class="card-img-top" src="<?php echo e(url($listing ->thumbnail_0)); ?>" alt="">
            <div class="card-img-overlay">
              <h2>
                <span class="badge badge-secondary text-white">$<?php echo e($listing ->price); ?></span>
              </h2>
            </div>
            <div class="card-body">
              <div class="listing-heading text-center">
                <h4 class="text-primary"><?php echo e($listing ->title); ?> </h4>
                <p>
                  <i class="fas fa-map-marker text-secondary"></i> <?php echo e($listing ->city); ?>  <?php echo e($listing ->state); ?></p>
              </div>
              <hr>
              <div class="row py-2 text-secondary">
                <div class="col-6">
                  <i class="fas fa-th-large"></i> Sqft: <?php echo e($listing ->sqft); ?> </div>
                <div class="col-6">
                  <i class="fas fa-car"></i> Garage: <?php echo e($listing ->garage); ?></div>
              </div>
              <div class="row py-2 text-secondary">
                <div class="col-6">
                  <i class="fas fa-bed"></i> Bedrooms: <?php echo e($listing ->bedroom); ?></div>
                <div class="col-6">
                  <i class="fas fa-bath"></i> Bathrooms: <?php echo e($listing ->bathroom); ?></div>
              </div>
              <hr>
              <div class="row py-2 text-secondary">
                <div class="col-12">
                  <i class="fas fa-user"></i> <?php echo e($listing -> realtor-> name); ?></div>
              </div>
              <div class="row text-secondary pb-2">
                <div class="col-6">
                  <i class="fas fa-clock"></i> <?php echo e($listing -> created_at->diffForHumans()); ?> </div>
              </div>
              <hr>
              <a href="<?php echo e(route('single.listing', $listing -> id)); ?>" class="btn btn-primary btn-block">More Info</a>
            </div>
          </div>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php else: ?>
          No Details found. Try to search again !!
      <?php endif; ?>

      </div>

      </div>
  </section>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('site.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\DONE\laravel7\Property-Listing-Platform-Laravel\resources\views/site/layouts/listings.blade.php ENDPATH**/ ?>