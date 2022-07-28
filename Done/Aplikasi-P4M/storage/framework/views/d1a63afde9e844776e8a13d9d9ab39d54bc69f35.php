

<?php $__env->startSection('title', 'Data Struktur Pemerintahan'); ?>

<?php $__env->startSection('page_content'); ?>

<style>
  
</style>

<section class="content-header">
    <h1>
      <?php echo $__env->yieldContent('title'); ?>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(url('/page/admin/dashboard')); ?>">
                <i class="fa fa-dashboard"></i> Home
            </a>
        </li>
        <li class="active"><?php echo $__env->yieldContent('title'); ?></li>
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
  $.get('/page/admin/pemerintahan/struktur_pemerintahan/showChart').done(function(response) {
    let chart = new OrgChart(document.getElementById("tree"), {
      template: 'polina',
      mouseScrool: OrgChart.action.scroll,
      enableDragDrop: true,
      nodeBinding: {
        field_0: "name",
        field_1: "title",
        img_0: "img"
      },
      nodes: response.nodes 
    });
    
    chart.on('click', function(sender, args){
      sender.editUI.show(args.node.id, false);
      return false;
    });
  
    chart.on('drop', function(sender, draggedNodeId, droppedNodeId) {
      $.ajax({
        url: '/page/admin/pemerintahan/struktur_pemerintahan/dropChart',
        type: 'POST',
        data: {id: draggedNodeId, staf_id: droppedNodeId},
        success: function(data) {
          if (data == 1) {
            swal('Wooww!', 'Data anda berhasil diubah', 'success');
          } else {
            swal('Ooops!', 'Data anda gagal diubah', 'error');
          }
        }
      })
    })

  });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Project-P4M\P4M\resources\views/admin/page/pemerintahan/struktur_pemerintahan/show.blade.php ENDPATH**/ ?>