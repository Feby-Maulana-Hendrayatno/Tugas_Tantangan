

<?php $__env->startSection('content'); ?>

        <!-- Page wrapper  -->
        <!-- ============================================================== -->
   
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Inquiries</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Inquiries</li>
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
                <div class="row">
                <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">All Inquiries</h4>
                            </div>
                            <div class="table-responsive m-t-20">
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
                                 
                                <div class="d-flex justify-content-center py-5 ">
                                    <?php echo $inquiries->links(); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\DONE\laravel7\Property-Listing-Platform-Laravel\resources\views/admin/layouts/listing-inquiry/inquiry.blade.php ENDPATH**/ ?>