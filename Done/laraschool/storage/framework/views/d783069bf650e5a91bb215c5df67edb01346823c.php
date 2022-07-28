
<?php $__env->startSection('content'); ?>
<section class="contact-area">
    <div class="container">
        <div class="row">
            <!-- Contact Info -->
            <div class="col-12 col-lg-6">
                <div class="contact--info mt-50">
                    <h4>Info Kontak</h4>
                    <ul class="contact-list">
                        <li>
                            <h6><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i> Jam Masuk</h6>
                            <h6>9:00 WIB  - 17:00 WIB</h6>
                        </li>
                        <li>
                            <h6><i class="fa fa-phone fa-fw" aria-hidden="true"></i> No Telp</h6>
                            <h6>+1 123 321 456 654</h6>
                        </li>
                        <li>
                            <h6><i class="fa fa-envelope fa-fw" aria-hidden="true"></i> Email</h6>
                            <h6>laraschool@examlpe.com</h6>
                        </li>
                        <li>
                            <h6><i class="fa fa-map-pin fa-fw" aria-hidden="true"></i> Alamat</h6>
                            <h6>Berlin,Germany</h6>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="contact--info mt-50 mb-50">
                    <h4>Tulis Pesan</h4>
                    <form method="POST" action="">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama" id="text" placeholder="Nama">
                                    <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="isi" id="message" cols="30" rows="5" placeholder="Pesan"></textarea>
                                    <small id="emailHelp" class="form-text text-muted">Maksimal kirim 5 kali dengan email yang sama</small>
                                    <?php $__errorArgs = ['isi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <?php echo csrf_field(); ?>
                            <div class="col-12">
                                <button class="btn clever-btn w-100" type="submit">Kirim</button>
                            </div>
                        </div>
                    <!-- </form> -->
                    </form>
                </div>
            </div>


        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.app',[
    'title' => 'Contact',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\laraschool\resources\views/home/contact.blade.php ENDPATH**/ ?>