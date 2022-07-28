

<?php $__env->startSection("page_scripts"); ?>

<script type="text/javascript">
	function edit_sopir(id_sopir) {
		$.ajax({
			url : "<?php echo e(url('/edit_sopir')); ?>",
			type : "GET",
			data : { id_sopir : id_sopir  },
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
			<h4><i class="fa fa-users"></i> Data Sopir</h4>
			<section id="unseen">
				<div class="table-responsive">
					<table id="data" class="table table-bordered table-striped table-condensed">
						<thead>
							<tr>
								<th class="text-center">No.</th>
								<th class="text-center">ID Sopir</th>
								<th>Nama Sopir</th>
								<th class="text-center">Telepon Sopir</th>
								<th class="text-center">No. SIM</th>
								<th class="text-center">Tarif Per/Jam</th>
								<th class="text-center">Status</th>
								<?php if(Auth::user()->role == 2): ?>
								<th class="text-center">Aksi</th>
								<?php endif; ?>
							</tr>
						</thead>
						<tbody>
							<?php $no = 0 ?>

							<?php $__currentLoopData = $data_sopir; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sopir): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="text-center"><?php echo e(++$no); ?>.</td>
								<td class="text-center"><?php echo e($sopir->id_sopir); ?></td>
								<td><?php echo e($sopir->nama_sopir); ?></td>
								<td class="text-center"><?php echo e($sopir->telp_sopir); ?></td>
								<td class="text-center"><?php echo e($sopir->no_sim); ?></td>
								<td class="text-center">Rp. <?php echo e(number_format($sopir->tarif_perjam)); ?></td>
								<td class="text-center">
									<?php if($sopir->aktif == 0): ?>
									Tidak Aktif
									<?php else: ?>
									Aktif
									<?php endif; ?>
								</td>
								<?php if(Auth::user()->role == 2): ?>
								<td class="text-center">
									<?php if($sopir->re_transaksi == NULL): ?>
										<?php if(count($sopir->re_setoran) > 0): ?>
										<button disabled class="btn btn-warning btn-sm">
										<i class="fa fa-pencil"></i> Update
										</button>
										<button disabled class="btn btn-danger btn-sm">
											<i class="fa fa-trash-o"></i> Delete
										</button>
										<?php else: ?>
										<button disabled class="btn btn-warning btn-sm">
										<i class="fa fa-pencil"></i> Update
										</button>
										<button disabled class="btn btn-danger btn-sm">
											<i class="fa fa-trash-o"></i> Delete
										</button>
										<?php endif; ?>	
									<?php else: ?>
										<?php if(count($sopir->re_setoran) > 0): ?>
										<button disabled class="btn btn-warning btn-sm">
										<i class="fa fa-pencil"></i> Update
										</button>
										<button disabled class="btn btn-danger btn-sm">
											<i class="fa fa-trash-o"></i> Delete
										</button>
										<?php else: ?>
										<button onclick="edit_sopir(<?php echo e($sopir->id_sopir); ?>)" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModalUpdate">
										<i class="fa fa-pencil"></i> Update
										</button>
										<a onclick="return confirm('Mau di Hapus ?')" href="<?php echo e(url('/sopir/'.$sopir->id_sopir.'/delete')); ?>" class="btn btn-danger btn-sm">
											<i class="fa fa-trash-o"></i> Delete
										</a>
										<?php endif; ?>
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
			<form method="POST" action="<?php echo e(url('/simpan_data_sopir')); ?>">
				<?php echo e(csrf_field()); ?>

				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label> ID Sopir </label>
								<input type="text" class="form-control" name="id_sopir" placeholder="Masukkan ID Sopir">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label> Tarif Per/Jam </label>
								<input type="text" class="form-control" name="tarif_perjam" placeholder="Tarif Per/Jam">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label> Nama Sopir </label>
						<input type="text" class="form-control" name="nama_sopir" placeholder="Masukkan Nama Sopir">
					</div>
					<div class="form-group">
						<label> Alamat Sopir </label>
						<textarea class="form-control" name="alamat_sopir" rows="5" placeholder="Masukkan Alamat Sopir"></textarea>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label> Telepon Sopir </label>
								<input type="text" class="form-control" name="telp_sopir" placeholder="Masukkan No. Telepon Sopir">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label> No. SIM </label>
								<input type="text" class="form-control" name="no_sim" placeholder="Masukkan No. SIM">
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
			<form method="POST" action="<?php echo e(url('/update_data_sopir')); ?>">
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
<?php echo $__env->make("content.layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Project2\resources\views/content/sopir/data_sopir.blade.php ENDPATH**/ ?>