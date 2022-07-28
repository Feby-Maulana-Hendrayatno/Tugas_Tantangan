

<?php $__env->startSection('title', $artikel->judul); ?>

<?php $__env->startSection('page_content'); ?>

<?php
use Carbon\Carbon;
?>

<style>
    #recaptcha {
        cursor: pointer;
    }

    .captcha {
        background-color: rgb(22, 86, 165);
        font-size: 25px;
        padding: 10px;
        color: white;
    }

    .error {
        color: red
    }

    .pagination {
        margin-top: 0;
        margin-bottom: 0;
    }
</style>

<div id="printableArea">
    <h4 class="catg_titile" style="font-family: Oswald"><font color="#FFFFFF"><?php echo $__env->yieldContent('title'); ?></font></h4>
    <div class="post_commentbox">
        <span class="meta_date"><?php echo Carbon::createFromFormat('Y-m-d H:i:s', $artikel->updated_at)->isoFormat('D MMMM Y'); ?>&nbsp;
            <i class="fa fa-user"></i>Administrator&nbsp;
            <i class="fa fa-eye"></i><?php echo e($counter->count()); ?> Kali&nbsp;
            <i class="fa fa-comments"></i><?php echo e($komentar->count()); ?> &nbsp;
        </span>
    </div>
    <div class="single_category wow fadeInDown" style="margin-bottom:10px;">
        <div class="archive_style_1">
            <div class="business_category_left wow fadeInDown">
                <ul class="fashion_catgnav">
                    <li style="border-bottom: none">
                        <div class="catgimg2_container2">
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="/storage/<?php echo e($artikel->image); ?>" width="300" class="img-fluid img-thumbnail" style="float:left; margin:5px 20px 20px 0;" />
                                    <div style="text-align: justify; margin-bottom: 2rem;">
                                        <?php echo $artikel->body; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<hr />
<div class="contact_bottom">
    <div class="contact_bottom">
        <div class="box-body">
            <table class="table table-bordered table-striped table-hover">
                <thead class="bg-gray disabled color-palette">
                    <tr>
                        <th><i class="fa fa-comment"></i> Komentar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $komentar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <font color='green'><small><?php echo e(Carbon::createFromFormat('Y-m-d H:i:s', $k->created_at)->isoFormat('D MMMM Y H:m:s')); ?></small></font><br/>
                            <?php echo e($k->pesan); ?>

                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td><?php echo e($komentar->links()); ?></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<div class="form-group group-komentar" id="kolom-komentar">
    <div class="box box-default">
        <div class="box-header">
            <h2 class="box-title">Kirim Komentar</h2>
        </div>
        <hr />
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
        <div class="contact_bottom">
            <form class="contact_form form-komentar" id="kirimKomentar" name="form" action="/komentar/<?php echo e($artikel->slug); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group row">
                    <label for="nama" class="col-sm-3">Nama</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="nama" maxlength="100" placeholder="ketik di sini" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telepon" class="col-sm-3">No. Hp</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="telepon" maxlength="15" placeholder="ketik di sini" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3">E-mail</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="email" maxlength="100" placeholder="email@gmail.com" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pesan" class="col-sm-3">Isi Pesan</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="pesan"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3">&nbsp;</label>
                    <div class="col-sm-9">
                        <div id="captcha"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3">&nbsp;</label>
                    <div class="col-sm-9">
                        <input type="text" name="captcha" class="form-control" maxlength="6" value="" placeholder="Isikan kode di atas" style="margin-top: 18px"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3">&nbsp;</label>
                    <div class="col-sm-9">
                        <input type="submit" value="Kirim">
                    </div>
                </div>
                <input type="hidden" name="asli">
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>
<script>
    (function($, W, D) {
        var JQUERY4U = {};
        JQUERY4U.UTIL = {
            setupFormValidation: function() {
                $("#kirimKomentar").validate({
                    ignore: "",
                    rules: {
                        nama: {
                            required: true
                        },
                        email: {
                            required: true
                        },
                        telepon: {
                            required: true
                        },
                        pesan: {
                            required: true
                        },
                        captcha: {
                            required: true
                        }
                    },
                    messages: {
                        nama: {
                            required: "Nama harap di isi!"
                        },
                        email: {
                            required: "Email harap di isi!"
                        },
                        telepon: {
                            required: "Telepon harap di isi!"
                        },
                        pesan: {
                            required: "Pesan harap di isi!"
                        },
                        captcha: {
                            required: "Captcha harap di isi!"
                        }
                    },
                    submitHandler: function(form) {
                        form.submit()
                    }
                })
            }
        }
        $(D).ready(function($) {
            JQUERY4U.UTIL.setupFormValidation()
        })
    })(jQuery, window, document)

    var captcha= new Array ();

    function createCaptcha(){
        for(q=0; q<5 ; q++){
            // if(q %2 ==0){
                captcha[q] = String.fromCharCode(Math.floor((Math.random()*26)+65));
                // }else{
                    //     captcha[q] = Math.floor((Math.random()*10)+0);
                    // }
                }

                thecaptcha=captcha.join("");
                document.getElementById('captcha').innerHTML=
                "<span class='captcha'> " + thecaptcha+ " </span>" + "&nbsp; <a id='recaptcha' onclick='createCaptcha()'>recaptcha</a>";
                $('input[name="asli"]').val(thecaptcha);
            }

            createCaptcha();
        </script>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('pengunjung/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views//pengunjung/page/artikel/detail.blade.php ENDPATH**/ ?>