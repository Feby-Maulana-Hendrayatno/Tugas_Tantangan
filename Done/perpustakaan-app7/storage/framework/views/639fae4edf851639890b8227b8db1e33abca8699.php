
<?php $__env->startSection('title','Buku'); ?>

<?php $__env->startSection('nav','Buku'); ?>
<?php $__env->startSection("page_scripts"); ?>
<?php if(auth()->user()->id_role == 1): ?>
<?php $__env->startSection('content-header'); ?>
<h1>
    <?php echo $__env->yieldContent('title'); ?>
    <small>Data Buku</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Buku</a></li>
    <li class="active">Buku</li>
  </ol>
<?php $__env->stopSection(); ?>
<?php elseif(auth()->user()->id_role == 2): ?>
<?php $__env->startSection('content-header'); ?>
<h1>
    <?php echo $__env->yieldContent('title'); ?>
    <small>Data Buku</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

    <li class="active">Buku</li>
  </ol>
<?php $__env->stopSection(); ?>
<?php endif; ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-xs-12">
        <?php if(auth()->user()->id_role == 1): ?>
        <p><a href="/buku/add" class=" btn btn-primary btn-sm"style="width: 150px;"><i class="fa fa-plus"></i>Tambah Buku</a></p>
        <?php else: ?>
        <?php endif; ?>
        <?php if(session('pesan')): ?>
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> success</h4>
            <?php echo e(session("pesan")); ?>

        </div>
        <?php endif; ?>

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Data <?php echo $__env->yieldContent('title'); ?></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>
                
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive ">
                <table id="example1" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Buku</th>
                            <th>Kategori</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Tahun Terbit</th>
                            <th>Penerbit</th>
                            <th>Stok</th>
                            <th>Stok Terbaru</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no =1; ?>
                        <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $transaksi = DB::table("transaksi")
                                    ->where('tanggal_mengembalikan',null)
                                    ->where("kode_buku", $data->kode_buku)
                                    ->count();

                            $stok_terbaru = $data->stok - $transaksi;
                        ?>

                        <tr>
                            <td><?php echo e($no++); ?></td>
                            <td><?php echo e($data->kode_buku); ?>

                            </td>
                            <td>
                                <?php if(empty($data->getKategori->nama_kategori)): ?>
                                <i>
                                    <b>NULL</b>
                                </i>
                                <?php else: ?>
                                <?php echo e($data->getKategori->nama_kategori); ?>

                                <?php endif; ?>
                            </td>
                            <td><?php echo e($data->judul); ?></td>
                            <td><?php echo e($data->pengarang); ?></td>
                            <td><?php echo e($data->tahun_terbit); ?></td>
                            <td><?php echo e($data->penerbit); ?></td>

                            <td><?php echo e($data->stok); ?></td>
                            <td><?php echo e($stok_terbaru); ?></td>

                            <?php if(auth()->user()->id_role == 1): ?>
                            <td>
                                <a href="/buku/detail/<?php echo e($data->id_buku); ?>" class="btn btn-sm btn-success"><i class="fa fa-search"></i></a>

                                <a href="/buku/edit/<?php echo e($data->id_buku); ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo e($data->id_buku); ?>">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                            <?php elseif(auth()->user()->id_role == 2): ?>
                            <td>
                                <a href="/buku/detail/<?php echo e($data->id_buku); ?>" class="btn btn-sm btn-success"><i class="fa fa-search"></i></a>

                                
                            </td>
                            <?php endif; ?>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
<?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


<div class="modal modal-danger fade" id="delete<?php echo e($data->id_buku); ?>">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><?php echo e($data->judul); ?></h4>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus Buku ini!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                    <a href="buku/hapus/<?php echo e($data->id_buku); ?>" class="btn btn-outline">Yes</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make("Layout.v_template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\DONE\perpus\perpustakaan-app7\resources\views//admin/buku/buku.blade.php ENDPATH**/ ?>