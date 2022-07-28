<?php
use App\Models\Model\Profil;
$profil = Profil::first();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Desa <?php echo e($profil ? $profil->nama_desa : 'Anonymous'); ?> | <?php echo $__env->yieldContent('title'); ?> </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <meta name="title" content="Sistem Informasi Desa Arahan Lor"./>
    <meta name="description" content="Sistem Informasi Desa Arahan Lor - Sistem Informasi Desa Arahan Lor"./>
    <meta name="keywords" content="Sistem Informasi Desa Arahan Lor"./>
    <meta name="copyright" content="Team P4M"./>
    <meta name="author" content="Team P4M"./>

    <link rel="icon" href="<?php echo e($profil ? url('/storage/'.$profil->gambar) : url('/frontend/img/logo-desa.png')); ?>">
    <?php echo $__env->make('admin/layouts/partials/css/style2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('page_css'); ?>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <?php echo $__env->make('admin/layouts/partials/js/style2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style>
        #piechart svg {
            width: 500px;
            /* margin-left: 150px; */
        }
    </style>

</head>
<body class="hold-transition skin-green fixed sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <?php if(session('message')): ?>
        <?php echo session('message'); ?>

        <?php endif; ?>

        <?php echo $__env->make('admin/layouts/partials/navbar/nav_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Left side column. contains the sidebar -->
        <?php echo $__env->make('admin/layouts/partials/navbar/nav_sidebar2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <?php echo $__env->yieldContent("page_content"); ?>

        </div>

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0.0
            </div>
            <strong>Copyright &copy; 2021-<?php echo e(date('Y')); ?> <a href="./"><?php echo e($profil ? $profil->nama_desa : 'Anonymous'); ?></a>.</strong> All rights
            reserved.
        </footer>

        <div class="control-sidebar-bg"></div>

    </div>

    <?php echo $__env->yieldContent('page_scripts'); ?>

    <script>
        $('.btn-delete').click(function(e) {
            let form =  $(this).closest("form");
            e.preventDefault();
            swal({
                title: "Maaf!",
                text: "Data anda akan dihapus!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                buttons: ['Batal', 'Hapus']
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
        });
    </script>

</body>
</html>
<?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/layouts/main.blade.php ENDPATH**/ ?>