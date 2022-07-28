<?php $__env->startSection('page_title', 'Dashboard'); ?>

<?php $__env->startSection('page_content'); ?>

<section class="content-header">
    <h1>
        Data Struktur Pemerintahan
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(url('/page/admin/dashboard')); ?>">
                <i class="fa fa-dashboard"></i> Home
            </a>
        </li>
        <li class="active">Blank page</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div id="tree"></div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>

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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/struktur_pemerintahan/show.blade.php ENDPATH**/ ?>