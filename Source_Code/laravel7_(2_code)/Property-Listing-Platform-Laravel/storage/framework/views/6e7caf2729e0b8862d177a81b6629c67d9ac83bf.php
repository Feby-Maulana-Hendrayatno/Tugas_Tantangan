

<?php $__env->startSection('content'); ?>


    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Dashboard</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
        <!-- Email campaign chart -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-3">
                <a href="<?php echo e(route('users.index')); ?>">
                    <div class="mini-stat clearfix bx-shadow">
                        <span class="mini-stat-icon bg-info"><i class="ion-social-usd"></i></span>
                        <div class="mini-stat-info text-right text-muted">
                            <span class="counter"><?php echo e($total_users); ?></span>
                            Total Users
                        </div>
                        <div class="tiles-progress">
                            <div class="m-t-20">
                                
                                <div class="progress progress-sm m-0">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-3">
                <a href="<?php echo e(route('listings.index')); ?>">
                <div class="mini-stat clearfix bx-shadow">
                    <span class="mini-stat-icon bg-purple"><i class="ion-ios7-cart"></i></span>
                    <div class="mini-stat-info text-right text-muted">
                        <span class="counter"><?php echo e($total_listing); ?></span>
                        Total Listings
                    </div>
                    <div class="tiles-progress">
                        <div class="m-t-20">
                            
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            
            <div class="col-md-6 col-sm-6 col-lg-3">
                <a href="<?php echo e(route('listings.index')); ?>">
                <div class="mini-stat clearfix bx-shadow">
                    <span class="mini-stat-icon bg-success"><i class="ion-eye"></i></span>
                    <div class="mini-stat-info text-right text-muted">
                        <span class="counter"><?php echo e($total_new_listing); ?></span>
                        New Listings
                    </div>
                    <div class="tiles-progress">
                        <div class="m-t-20">
                            
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-3">
            <a href="<?php echo e(route('realtors.index')); ?>">
                <div class="mini-stat clearfix bx-shadow">
                    <span class="mini-stat-icon bg-primary"><i class="ion-android-contacts"></i></span>
                    <div class="mini-stat-info text-right text-muted">
                        <span class="counter"><?php echo e($total_realtors); ?></span>
                        Total Realtors
                    </div>
                    <div class="tiles-progress">
                        <div class="m-t-20">
                            
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%;">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            </div>
        </div> 

        <!-- ============================================================== -->
        <!-- Email campaign chart -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Ravenue - page-view-bounce rate -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center mt-2 text-danger">Recent Enquiry By Customer</h4>
                    </div>
                    <div class="table-responsive m-t-20 p-1">
                        <table class="table table-bordered table-responsive-lg">
                            <thead>
                                <tr>

                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact Number</th>
                                    <th scope="col">Listing</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $__currentLoopData = $inquiries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inquiry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr id="row_<?php echo e($inquiry->id); ?>">
                                    <th scope="row"><?php echo e($loop->iteration); ?></th>
                                    <td><?php echo e($inquiry -> name); ?></td>
                                    <td><?php echo e($inquiry -> email); ?></td>
                                    <td><?php echo e($inquiry -> contact_number); ?></td>
                                    <td><?php echo e($inquiry -> listing-> title); ?></td>
                                    <td><?php echo e($inquiry -> user-> username); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('inquiries.show', $inquiry -> id )); ?>"><span class="btn btn-sm btn-rounded btn-success">View</span></a>
                                    </td>
                                    
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Ravenue - page-view-bounce rate -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\Property-Listing-Platform-Laravel\resources\views/admin/layouts/dashboard.blade.php ENDPATH**/ ?>