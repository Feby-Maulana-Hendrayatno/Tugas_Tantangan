

<?php $__env->startSection('title', 'Data Penduduk Arahan Lor'); ?>

<?php $__env->startSection('page_content'); ?>

<style>
    #petaDesa iframe {
        width: 100%;
        height: 400px;
    }
</style>

<div id="printableArea">
    <h4 class="catg_titile" style="font-family: Oswald"><font color="#FFFFFF"><?php echo $__env->yieldContent('title'); ?></font></h4>
    <div class="post_commentbox">
        <span class="meta_date">
            <i class="fa fa-user"></i>Administrator&nbsp;
        </span>
    </div>
    <br>
    <div class="alert alert-danger" style="text-align:center; margin-top: 50px;">
            <b> Jika Tidak Terdaftar Silahkan Datang ke Desa Arahan Lor! </b>
        </div>
    <div class="box" style="margin-bottom:10px;">
        <div class="box-body">
            <table class="table table-bordered table-hover" id="dataTable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Dusun</th>
                        <th scope="col">RT</th>
                        <th scope="col">RW</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>
<link rel="stylesheet" href="/backend/template/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<script src="/backend/template/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/backend/template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
    $(function () {
        $('#dataTable').DataTable({
            processing: true,
        serverSide: true,
        ajax: '/data/penduduk',
        columns: [
        {
            data: 'DT_RowIndex',
            name: 'DT_RowIndex'
        },
        {
            data: 'nama',
            name: 'nama'
        },
        {
            data: 'get_kelamin.nama',
            name: 'jenis_kelamin'
        },
        {
            data: 'get_rt.get_rw.get_dusun.dusun',
            name: 'dusun'
        },
        {
            data: 'get_rt.rt',
            name: 'rt'
        },
        {
            data: 'get_rt.get_rw.rw',
            name: 'rw'
        }
        ]
        })
    })
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('pengunjung/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/pengunjung/page/kependudukan/index.blade.php ENDPATH**/ ?>