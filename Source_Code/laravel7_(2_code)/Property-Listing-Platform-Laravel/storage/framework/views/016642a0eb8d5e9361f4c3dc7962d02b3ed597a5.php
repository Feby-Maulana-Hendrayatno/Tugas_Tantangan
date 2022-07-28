

<?php $__env->startSection('content'); ?>

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Seller Of the Month</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Seller Of the Month</li>
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
                    <div class="col-lg-8 col-xlg-8 col-md-8 offset-1">
                    <div class="card">
                    <?php if($som): ?>
                    <a  href="<?php echo e(route('som.show', $som->id )); ?>"><span style="top:64px;z-index:999" class="tr btn btn-sm btn-rounded btn-info">Change Som</span></a>
                    
                            <div class="card-body">
                                <center class="m-t-30"> 
                                    
                                    <?php if($som): ?>
                                    <img src="<?php echo e(url($som->realtor->image)); ?>" class="rounded-circle mb-5" width="150" height="150" />
                                    <?php endif; ?>
                                    <h4 class="card-title m-t-10"><?php echo e($som->realtor-> name); ?></h4>
                                    
                                    
                                </center>
                            </div>
                
                                <hr>
                            <div class="card-body"> 
                                    <small class="text-muted">Email Address </small>
                                    <h6><?php echo e($som->realtor-> email); ?></h6> <small class="text-muted p-t-30 db">Phone</small>
                                    <h6><?php echo e($som->realtor-> contact_number); ?></h6> <small class="text-muted p-t-30 db">Address</small>
                                    <h6><?php echo e($som->realtor-> address); ?></h6>
                            </div>
                                
                            
                            <?php else: ?>
                            <form action="<?php echo e(route('som.store')); ?>" method="POST" class="form-horizontal m-t-30" enctype="multipart/form-data"> 
                            <?php echo csrf_field(); ?>
                            <div class="card-body"> 
                                <div class="form-group">
                                        <label class="col-sm-12">Realtor :</label>
                                    <div class="col-sm-12">
                                        <select  name="realtor_id" class="form-control form-control-line" required>
                                        <option selected style="display:none">Select Realtor</option>
                                        <?php $__currentLoopData = $realtors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $realtor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($realtor->id); ?>" ><?php echo e($realtor->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" style="margin: 0 auto;
                                display: block;" class="mt-5 btn btn-success">Add Som</button>
                            </div>

                        <?php endif; ?>
                    </div>

                    </div>
                    <!-- Column -->
                    <!-- Column -->
                 
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->


<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\Property-Listing-Platform-Laravel\resources\views/admin/layouts/som/som.blade.php ENDPATH**/ ?>