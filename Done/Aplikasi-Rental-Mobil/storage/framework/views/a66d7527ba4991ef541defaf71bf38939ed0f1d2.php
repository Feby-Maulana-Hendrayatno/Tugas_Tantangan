

<?php $__env->startSection("page_scripts"); ?>

<script type="text/javascript">
	function edit_pelanggan(id) {
		$.ajax({
			url : "<?php echo e(url('/edit_pelanggan')); ?>",
			type : "GET",
			data : { id : id  },
			success : function(data) {
				$("#modal-content").html(data);
				return true;
			}
		});
	}
</script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_content"); ?>

<div class="row mt">
	<div class="col-md-12">
		<br><br>
		<div class="content-panel">
			<h4><i class="fa fa-user"></i> Data Pelanggan</h4>
			<section id="unseen">
				<table id="data" class="table table-bordered table-striped table-condensed">
					<thead>
						<tr>
							<th class="text-center">No.</th>
							<th class="text-center">No. KTP</th>
							<th>Nama Pelanggan</th>
							<th>Alamat</th>
							<th class="text-center">No. HP</th>
							<?php if(Auth::user()->role == 2): ?>
							<th class="text-center">Aksi</th>
							<?php endif; ?>
						</tr>
					</thead>
					<tbody>
						<?php $no = 0 ?>

						<?php $__currentLoopData = $data_pelanggan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelanggan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td class="text-center"><?php echo e(++$no); ?>.</td>
							<td class="text-center"><?php echo e($pelanggan->no_ktp); ?></td>
							<td><?php echo e($pelanggan->nama_pel); ?></td>
							<td><?php echo e($pelanggan->alamat_pel); ?></td>
							<td class="text-center"><?php echo e($pelanggan->telp_pel); ?></td>
							<?php if(Auth::user()->role == 2): ?>
							<td class="text-center">
								<button onclick="edit_pelanggan(<?php echo e($pelanggan->id); ?>)" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModalUpdate">
									<i class="fa fa-pencil"></i> Update
								</button>
							</td>
							<?php endif; ?>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</section>
		</div>
	</div>
</div>

<!-- Awal Modal -->
<div class="modal fade" id="myModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
			</div>
			<form method="POST" action="<?php echo e(url('/update_data_pelanggan')); ?>">
				<?php echo e(csrf_field()); ?>

				<div class="modal-body" id="modal-content">

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div> 
<!-- Akhir Modal -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make("content.layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Project2\resources\views/content/pelanggan/data_pelanggan.blade.php ENDPATH**/ ?>