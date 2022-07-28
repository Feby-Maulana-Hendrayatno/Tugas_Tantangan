

<?php $__env->startSection('content'); ?>

        <!-- Page wrapper  -->
        <!-- ============================================================== -->
   
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Realtors</li>
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

                                <h4 class="card-title">All Realtors</h4>
                                <a href="<?php echo e(route('realtors.create')); ?>"><span class="tr btn btn-sm btn-rounded btn-info">Add Realtors</span></a>
                            </div>
                            <div class="table-responsive m-t-20">
                                <table class="table table-bordered table-responsive-lg">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $realtors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $realtor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr id="row_<?php echo e($realtor->id); ?>">
                                            <th scope="row"><?php echo e($loop->iteration); ?></th>
                                            <td><?php echo e($realtor -> name); ?></td>
                                            <td><?php echo e($realtor -> email); ?></td>
                                            <td><?php echo e($realtor -> contact_number); ?></td>
                                            <td><?php echo e($realtor -> address); ?></td>
                                            <td>
                                            <a href="<?php echo e(route('realtors.show', $realtor -> id )); ?>"><span class="btn btn-sm btn-rounded btn-success">View</span></a>

                                            <form style="display:inline-block" method="POST" action="<?php echo e(route('realtors.destroy', $realtor -> id)); ?>">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            
                                        </form>
                                        <button onclick="deleteData('<?php echo e(route('realtors.destroy', $realtor -> id)); ?>','<?php echo e($realtor -> id); ?>')" type="submit" class="btn btn-sm btn-rounded btn-danger">Delete</button>
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
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\Property-Listing-Platform-Laravel\resources\views/admin/layouts/realtors/realtors.blade.php ENDPATH**/ ?>