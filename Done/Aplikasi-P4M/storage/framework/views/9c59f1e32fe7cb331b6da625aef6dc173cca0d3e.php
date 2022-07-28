<?php $__env->startSection('title', 'Data Penduduk'); ?>

<?php $__env->startSection('page_content'); ?>

<?php
setLocale(LC_ALL, 'id', 'ID')
?>

<style>
  table > thead > tr > th {
    text-align: center;
    white-space: nowrap;
    text-transform: uppercase;
  }

  table > tbody > tr > td {
    white-space: nowrap;
  }

  .table-min-height {
    min-height: 350px;
  }
</style>

<section class="content-header">
  <h1>
    <?php echo $__env->yieldContent('title'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
      <a href="<?php echo e(url('/page/admin/dashboard')); ?>">
        <i class="fa fa-home"></i> Home
      </a>
    </li>
    <li class="active"><?php echo $__env->yieldContent('title'); ?></li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="nav-tabs-custom">
        <div class="nav nav-tabs">
          <ul class="nav nav-tabs">
            <?php $__currentLoopData = $data_status_dasar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status_dasar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li <?php echo e($status_dasar ? 'active' : ''); ?>>
              <a href="#tab_<?php echo e($status_dasar->id); ?>" onclick="tabPane(<?php echo e($status_dasar->id); ?>)" data-toggle="tab"><?php echo e($status_dasar->nama); ?></a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1" style="margin-top: 5px;">
              <div class="row">
                <div class="col-md-12">
                  <div class="box box-info">
                    <div class="box-header">
                      <div class="btn-group btn-group-vertical">
                        <a class="btn btn-social btn-flat btn-primary btn-sm" data-toggle="dropdown" title="Tambah Penduduk">
                          <i class="fa fa-plus"></i> Tambah Penduduk
                        </a>
                        <ul class="dropdown-menu" role="menu">
                          <li>
                            <a href="<?php echo e(url('/page/admin/kependudukan/penduduk/tambah_penduduk_lahir')); ?>" class="btn btn-social btn-flat btn-block btn-sm" title="Tambah Data Penduduk Lahir">
                              <i class="fa fa-plus"></i> Penduduk Lahir
                            </a>
                            <a href="<?php echo e(url('/page/admin/kependudukan/penduduk/tambah_penduduk_masuk')); ?>" class="btn btn-social btn-flat btn-block btn-sm" title="Tambah Data Penduduk Masuk">
                              <i class="fa fa-plus"></i> Penduduk Masuk
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="box-body">
                      <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th class="text-center">No.</th>
                              <th class="text-center">Aksi</th>
                              <th>Nama</th>
                              <th>No. KK</th>
                              <th>Nama Ayah</th>
                              <th>Nama Ibu</th>
                              <th>Dusun</th>
                              <th>RW</th>
                              <th>RT</th>
                              <th>Umur</th>
                              <th>Tanggal Terdaftar</th>
                              <th>Tanggal Diubah</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $__currentLoopData = $penduduk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                              <td class="text-center"><?php echo e($loop->iteration); ?>.</td>
                              <td>
                                <div class="btn-group">
                                  <button type="button" class="btn btn-social btn-flat btn-info btn-sm" data-toggle="dropdown"><i class='fa fa-arrow-circle-down'></i> Pilih Aksi</button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                      <a href="<?php echo e(url('page/admin/kependudukan/penduduk/'.$p->id)); ?>" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                    </li>
                                    <li>
                                      <a href="<?php echo e(url('page/admin/kependudukan/penduduk/'.$p->id.'/edit')); ?>" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                    </li>
                                    <li>
                                      <a href="<?php echo e(url('page/admin/kependudukan/penduduk/'.$p->id.'/cetak')); ?>" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                    </li>
                                    <li>
                                      <a href="#" onclick="editStatusDasar(<?php echo e($p->id); ?>)" data-remote="false" data-toggle="modal" data-target="#modalStatusDasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                    </li>
                                    <li>
                                      <form action="<?php echo e(url('page/admin/kependudukan/penduduk/'.$p->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button class="btn btn-social btn-flat btn-block btn-sm btn-delete"><i class="fa fa-trash-o"></i> Hapus</button>
                                      </form>
                                    </li>
                                  </ul>
                                </div>
                              </td>
                              <td><?php echo e($p->nama); ?></td>
                              <td><?php echo e($p->kk_sebelumnya); ?></td>
                              <td><?php echo e($p->nama_ayah); ?></td>
                              <td><?php echo e($p->nama_ibu); ?></td>
                              <td><?php echo e($p->getDusun->dusun); ?></td>
                              <td><?php echo e($p->getRw->rw); ?></td>
                              <td><?php echo e($p->getRt->rt); ?></td>
                              <td><?php echo e(date("Y") - date('Y', strtotime($p->tgl_lahir))); ?></td>
                              <td><?php echo e($p->created_at->formatLocalized("%d %B %Y")); ?></td>
                              <td><?php echo e($p->updated_at->formatLocalized("%d %B %Y")); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php for($i=1; $i <= 6; $i++): ?>
            <div class="tab-pane" id="tab_<?php echo e($i); ?>"></div>
            <?php endfor; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="modal fade" id="modalStatusDasar">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">
          <i class="fa fa-pencil"></i> Ubah Status Dasar
        </h4>
      </div>
      <form action="<?php echo e(url('/page/admin/kependudukan/penduduk/simpan_status_dasar')); ?>" method="POST" id="formEditDusun">
        <?php echo method_field("PUT"); ?>
        <?php echo csrf_field(); ?>
        <div class="modal-body fetched-data" id="modal-content-edit">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">
            <i class="fa fa-refresh"></i> Batal
          </button>
          <button type="submit" class="btn btn-success">
            <i class="fa fa-edit"></i> Simpan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>

<script type="text/javascript">

  function tabPane(params) {
    if (params != 1) {
        let page = '';
        if (params == 2) {
            page = 'mati';
        } else if (params == 3) {
            page = 'pindah';
        } else if (params == 4) {
            page = 'hilang';
        } else if (params == 5) {
            page = 'pergi';
        } else if (params == 6) {
            page = 'tidak_valid'
        }
        $.ajax({
            url: "<?php echo e(url('page/admin/kependudukans/penduduk/')); ?>/"+page,
            type: 'get',
            success: function (response) {
                $("#tab_"+params).html(response);
            }
        });
    }
  }

  function editStatusDasar(id)
  {
    $.ajax({
      url : "<?php echo e(url('/page/admin/kependudukan/penduduk/edit_status_dasar')); ?>",
      type : "GET",
      data : { id : id },
      success : function(data) {
        $("#modal-content-edit").html(data);
        return true;
      }
    });
  }


  $('document').ready(function()
  {
    $('.table').on('show.bs.dropdown', function (e) {
      var table = $(this),
      menu = $(e.target).find('.dropdown-menu'),
      tableOffsetHeight = table.offset().top + table.height(),
      menuOffsetHeight = $(e.target).offset().top + $(e.target).outerHeight(true) + menu.outerHeight(true);

      // console.log(menuOffsetHeight);

      if (menuOffsetHeight > tableOffsetHeight)
      {
        table.css("padding-bottom", menuOffsetHeight - tableOffsetHeight);
        $('.table')[0].scrollIntoView(false);
      }

    });

    $('.table').on('hide.bs.dropdown', function () {
      $(this).css("padding-bottom", 0);
    })
  });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/penduduk/home.blade.php ENDPATH**/ ?>