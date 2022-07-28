<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('page_content'); ?>

<?php
    use Carbon\Carbon;
?>

<section class="content-header">
    <h1>
        Home
    </h1>
    <ol class="breadcrumb">
        <li class="active">
           <i class="fa fa-home"></i> Home </li>
    </ol>
</section>

<section class="content">
    <div class="alert alert-success" style="font-size: 17px">
        Selamat Datang <strong><?php echo e(auth()->user()->name); ?></strong>! <br>
        Anda login sebagai <strong><?php echo e(auth()->user()->getHakAkses->nama_hak_akses); ?></strong>.
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-6 col-xs-6">
                            <div class="small-box bg-purple">
                                <div class="inner">
                                    <h3><?php echo e($data_dusun); ?></h3>
                                    <p>Jumlah Dusun</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-location"></i>
                                </div>
                                <a href="<?php echo e(url('page/admin/data/dusun')); ?>" class="small-box-footer">
                                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-6">
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3><?php echo e($data_penduduk); ?></h3>
                                    <p>Jumlah Penduduk</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person"></i>
                                </div>
                                <a href="<?php echo e(url('page/admin/kependudukan/penduduk')); ?>" class="small-box-footer">
                                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-xs-6">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3><?php echo e($data_keluarga); ?></h3>
                                    <p>Keluarga</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-ios-people"></i>
                                </div>
                                <a href="<?php echo e(url('/page/admin/kependudukan/keluarga')); ?>" class="small-box-footer">
                                    Selengkapnya <i class="fa fa-arrow-users"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-6">
                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <h3><?php echo e($data_arsip); ?></h3>
                                    <p>Surat Tercetak</p>
                                </div>
                                <div class="icon">
                                    <i class="ion-ios-paper"></i>
                                </div>
                                <a href="<?php echo e(url('/page/admin/surat/arsip')); ?>" class="small-box-footer">
                                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-book"></i> Terakhir Login
                    </h3>
                    <div class="pull-right">
                        <a href="<?php echo e(url('/page/admin/pengaturan/terakhir_login')); ?>" class="btn btn-social btn-primary btn-flat btn-sm" title="Selengkapnya">
                            <i class="fa fa-search"></i> Selengkapnya
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Name</th>
                                    <th class="text-center">Terakhir Login</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data_terakhir_login; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $terakhir_login): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($terakhir_login->nama); ?></td>
                                    <td class="text-center"><?php echo e(Carbon::createFromFormat('Y-m-d H:i:s', $terakhir_login->terakhir_login)->isoFormat('LLLL')); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">

            <div id="tree"></div>

        </div>
        <div class="col-md-6">

        </div>
    </div>
</section>

<script src="<?php echo e(url('/backend/template')); ?>/bower_components/orgchart/orgchart.js"></script>

<script type='text/javascript'>
    var chart = new OrgChart(document.getElementById("tree"), {
        template: 'mila',
        mouseScrool: OrgChart.action.scroll,
        enableDragDrop: true,
        nodeBinding: {
            field_0: "name",
            field_1: "title",
            img_0: "img"
        },
        nodes: [
        <?php foreach($data_struktur as $struktur) {
            echo '{ id: '.$struktur->id.', pid: '.$struktur->staf_id.', name: "'.$struktur->getPegawai->nama.'", title: "'.$struktur->getJabatan->nama_jabatan.'", img:"/gambar/gambar_user.png" },';
        } ?>
        ]
    });
    chart.on('click', function(sender, args){
        sender.editUI.show(args.node.id, false);
        return false;
    });
    chart.on('drop', function(sender, draggedNodeId, droppedNodeId) {
        $.ajax({
            url: '/page/admin/dashboard_ubah',
            type: 'POST',
            data: {staf_id: droppedNodeId, id: draggedNodeId},
            success: function(response) {
                if (response == 1) {
                    swal('Selamat!', 'Data berhasil diubah', 'success');
                } else {
                    swal('Maaf!', 'Data gagal diubah!', 'error');
                }
            }
        })
    })
</script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>


<?php if(session("success")): ?>

<script type="text/javascript">

    swal({
        title: "Berhasil!",
        text: "<?php echo e(session('success')); ?>",
        icon: "success",
        button: "OK",
    });

</script>

<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/home.blade.php ENDPATH**/ ?>