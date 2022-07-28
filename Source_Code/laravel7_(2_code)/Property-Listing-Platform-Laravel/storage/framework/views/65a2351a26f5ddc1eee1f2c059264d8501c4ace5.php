

<?php $__env->startSection('content'); ?>


    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Profile</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo e(route('admin.index')); ?>">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <br />
        <?php endif; ?>
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30"> <img src="../../assets/images/users/5.jpg" class="rounded-circle" width="150" />
                            <h4 class="card-title m-t-10"><?php echo e($user -> get_full_name()); ?></h4>
                            <div class="row text-center justify-content-md-center">
                            </div>
                        </center>
                    </div>
                    <div>
                        <hr> </div>
                    <div class="card-body"> <small class="text-muted">Email address </small>
                        <h6><?php echo e($user -> email); ?></h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo e(route('users.update', $user -> id)); ?>" method="POST" class="form-horizontal m-t-30">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PATCH'); ?> 
                            <div class="form-group">
                                <label class="col-md-12">First Name</label>
                                <div class="col-md-12">
                                    <input type="text" name="first_name" value="<?php echo e($user -> first_name); ?>" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Last Name</label>
                                <div class="col-md-12">
                                    <input type="text" name="last_name" value="<?php echo e($user -> last_name); ?>" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">User Name</label>
                                <div class="col-md-12">
                                    <input type="text" name="username" value="<?php echo e($user -> username); ?>" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="email" name="email" value="<?php echo e($user -> email); ?>" class="form-control form-control-line" name="example-email" id="example-email">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success">Update Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->


<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\DONE\laravel7\Property-Listing-Platform-Laravel\resources\views/admin/layouts/users/profile.blade.php ENDPATH**/ ?>