

<?php $__env->startSection("page_scripts"); ?>

<script type="text/javascript">
	function edit_pemilik(id_pemilik) {
		$.ajax({
			url : "<?php echo e(url('/edit_pemilik')); ?>",
			type : "GET",
			data : { id_pemilik : id_pemilik  },
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
			<h4><i class="fa fa-user"></i> Data Pemilik</h4>
			<section id="unseen">
				<div class="table-responsive">
					<table id="data" class="table table-bordered table-striped table-condensed">
						<thead>
							<tr>
								<th class="text-center">No.</th>
								<th class="text-center">Kode Pemilik</th>
								<th>Nama Pemilik</th>
								<th>Alamat</th>
								<th class="text-center">Telepon Pemilik</th>
								<?php if(Auth::user()->role == 2): ?>
								<th class="text-center">Aksi</th>
								<?php endif; ?>
							</tr>
						</thead>
						<tbody>
							<?php $no = 0 ?>

							<?php $__currentLoopData = $data_pemilik; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pemilik): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="text-center"><?php echo e(++$no); ?>.</td>
								<td class="text-center"><?php echo e($pemilik->kode_pemilik); ?></td>
								<td><?php echo e($pemilik->nama_pemilik); ?></td>
								<td><?php echo e($pemilik->alamat_pemilik); ?></td>
								<td class="text-center"><?php echo e($pemilik->telp_pemilik); ?></td>
								<?php if(Auth::user()->role == 2): ?>
								<td class="text-center">
									<?php if(count($pemilik->re_kendaraan) > 0): ?>
									<button disabled onclick="edit_pemilik(<?php echo e($pemilik->id_pemilik); ?>)" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModalUpdate">
										<i class="fa fa-pencil"></i> Update
									</button>
									<button disabled class="btn btn-danger btn-sm">
										<i class="fa fa-trash-o"></i> Delete
									</button>
									<?php else: ?>
									<button onclick="edit_pemilik(<?php echo e($pemilik->id_pemilik); ?>)" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModalUpdate">
										<i class="fa fa-pencil"></i> Update
									</button>
									<a onclick="return confirm('Mau di Hapus ?')" href="<?php echo e(url('/pemilik/'.$pemilik->id_pemilik.'/delete')); ?>" class="btn btn-danger btn-sm">
										<i class="fa fa-trash-o"></i> Delete
									</a>
									<?php endif; ?>
								</td>
								<?php endif; ?>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
				</div>
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
			<form method="POST" action="<?php echo e(url('/simpan_data_pemilik')); ?>">
				<?php echo e(csrf_field()); ?>

				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label> Kode Pemilik </label>
								<input type="text" class="form-control" name="kode_pemilik" placeholder="Masukkan Kode Pemilik">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label> Telepon Pemilik </label>
								<input type="text" class="form-control" name="telp_pemilik" placeholder="Masukkan Telepon Pemilik">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label> Nama Pemilik </label>
						<input type="text" class="form-control" name="nama_pemilik" placeholder="Masukkan Nama Pemilik">
					</div>
					<div class="form-group">
						<label> Alamat Pemilik </label>
						<textarea class="form-control" name="alamat_pemilik" rows="5" placeholder="Masukkan Alamat Pemilik"></textarea>
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
			<form method="POST" action="<?php echo e(url('/update_data_pemilik')); ?>">
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
<?php echo $__env->make("content.layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Project2\resources\views/content/pemilik/data_pemilik.blade.php ENDPATH**/ ?>