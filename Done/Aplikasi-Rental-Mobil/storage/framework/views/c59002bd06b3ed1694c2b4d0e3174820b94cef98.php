

<?php $__env->startSection("page_scripts"); ?>

<script type="text/javascript">
	function edit_setoran(id_setoran) {
		$.ajax({
			url : "<?php echo e(url('/edit_setoran')); ?>",
			type : "GET",
			data : { id_setoran : id_setoran  },
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
		<?php if(Auth::user()->role == 2): ?>
		<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">
			<i class="fa fa-plus"></i> Tambah
		</button>
		<?php endif; ?>
		<br><br>
		<div class="content-panel">
			<h4><i class="fa fa-money"></i> Data Setoran </h4>
			<section id="unseen">
				<table id="data" class="table table-bordered table-striped table-condensed">
					<thead>
						<tr>
							<th class="text-center">No.</th>
							<th class="text-center">No. Setoran</th>
							<th class="text-center">Tanggal Setoran</th>
							<th class="text-center">Jumlah</th>
							<th class="text-center">Nama Sopir</th>
							<?php if(Auth::user()->role == 2): ?>
							<th class="text-center">Aksi</th>
							<?php endif; ?>
						</tr>
					</thead>
					<tbody>
						<?php $no = 0 ?>

						<?php $__currentLoopData = $data_setoran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $setoran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td class="text-center"><?php echo e(++$no); ?>.</td>
							<td class="text-center"><?php echo e($setoran->no_setoran); ?></td>
							<td class="text-center"><?php echo e($setoran->tgl_setoran); ?></td>
							<td class="text-center">Rp. <?php echo e(number_format($setoran->jumlah)); ?></td>
							<td class="text-center"><?php echo e($setoran->re_sopir->nama_sopir); ?></td>
							<?php if(Auth::user()->role == 2): ?>
							<td class="text-center">
								<button onclick="edit_setoran(<?php echo e($setoran->id_setoran); ?>)" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModalUpdate">
									<i class="fa fa-pencil"></i> Update
								</button>
								<a onclick="return confirm('Mau di Hapus ?')" href="<?php echo e(url('/setoran/'.$setoran->id_setoran.'/delete')); ?>" class="btn btn-danger btn-sm">
									<i class="fa fa-trash-o"></i> Delete
								</a>
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus"></i> Tambah Data</h4>
			</div>
			<form method="POST" action="<?php echo e(url('/simpan_data_setoran')); ?>">
				<?php echo e(csrf_field()); ?>

				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label> No. Setoran </label>
								<input type="number" class="form-control" name="no_setoran" placeholder="0">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label> Tanggal Setoran </label>
								<input type="date" class="form-control" name="tgl_setoran" value="<?php echo e(date('Y-m-d')); ?>" readonly style="background-color: white;">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label> Jumlah </label>
								<input type="number" class="form-control" name="jumlah" placeholder="0" min="1000" max="20000">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label> Nama Sopir </label>
								<select class="form-control" name="id_sopir">
									<option value="" disabled selected>- Pilih -</option>
									<?php $__currentLoopData = $data_sopir; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sopir): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php if($sopir->re_transaksi != NULL): ?>
											<option value="<?php echo e($sopir->id_sopir); ?>">
												<?php echo e($sopir->nama_sopir); ?>

											</option>
										<?php endif; ?>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success">Tambah</button>
				</div>
			</form>
		</div>
	</div>
</div> 
<!-- Akhir Modal -->

<!-- Awal Modal Update -->
<div class="modal fade" id="myModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel"><i class="fa fa-pencil"></i> Update Data</h4>
			</div>
			<form method="POST" action="<?php echo e(url('/update_data_setoran')); ?>">
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
<?php echo $__env->make("content.layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Project2\resources\views/content/setoran/data_setoran.blade.php ENDPATH**/ ?>