

<?php $__env->startSection("page_scripts"); ?>

<script type="text/javascript">
	function edit_kendaraan(id) {
		$.ajax({
			url : "<?php echo e(url('/edit_kendaraan')); ?>",
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
		<?php if(Auth::user()->role == 2): ?>
		<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">
			<i class="fa fa-plus"></i> Tambah
		</button>
		<?php endif; ?>
		<br><br>
		<div class="content-panel">
			<h4><i class="fa fa-car"></i> Data Kendaraan </h4>
			<section id="unseen">
				<div class="table-responsive">
					<table id="data" class="table table-bordered table-striped table-condensed">
						<thead>
							<tr>
								<th class="text-center">No.</th>
								<th class="text-center">No. Plat</th>
								<th class="text-center">Tahun</th>
								<th class="text-center">Tarif Per/Jam</th>
								<th class="text-center">Status Rental</th>
								<th class="text-center">Nama Pemilik</th>
								<?php if(Auth::user()->role == 2): ?>
								<th class="text-center">Aksi</th>
								<?php endif; ?>
							</tr>
						</thead>
						<tbody>
							<?php $no = 0 ?>

							<?php $__currentLoopData = $data_kendaraan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kendaraan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="text-center"><?php echo e(++$no); ?>.</td>
								<td class="text-center"><?php echo e($kendaraan->no_plat); ?></td>
								<td class="text-center"><?php echo e($kendaraan->tahun); ?></td>
								<td class="text-center">Rp. <?php echo e(number_format($kendaraan->tarif_perjam)); ?></td>
								<td class="text-center"><?php echo e($kendaraan->status_rental); ?></td>
								<td class="text-center"><?php echo e($kendaraan->re_pemilik->nama_pemilik); ?></td>
								<?php if(Auth::user()->role == 2): ?>
								<td class="text-center">
									<?php if(count($kendaraan->re_transaksi) > 0): ?>
									<button disabled class="btn btn-warning btn-sm">
										<i class="fa fa-pencil"></i> Update
									</button>
									<button disabled class="btn btn-danger btn-sm">
										<i class="fa fa-trash-o"></i> Delete
									</button>
									<?php else: ?>
									<button onclick="edit_kendaraan(<?php echo e($kendaraan->id); ?>)" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModalUpdate">
										<i class="fa fa-pencil"></i> Update
									</button>
									<a onclick="return confirm('Mau di Hapus ?')" href="<?php echo e(url('/kendaraan/'.$kendaraan->id.'/delete')); ?>" class="btn btn-danger btn-sm">
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
			<form method="POST" action="<?php echo e(url('/simpan_data_kendaraan')); ?>" enctype="multipart/form-data">
				<?php echo e(csrf_field()); ?>

				<input type="hidden" name="status_rental" value="Tersedia">
				<div class="modal-body">
					<div class="form-group">
						<label> No Plat </label>
						<input type="text" class="form-control" name="no_plat" placeholder="Masukkan No Plat">
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label> Tahun </label>
								<input type="text" class="form-control" name="tahun" placeholder="Masukkan Tahun">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label> Tarif Per/Jam </label>
								<input type="text" class="form-control" name="tarif_perjam" placeholder="Masukkan Tarif Per/Jam">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label> Nama Pemilik </label>
						<select class="form-control" name="kode_pemilik">
							<option value="">- Pilih Nama Pemilik -</option>
							<?php $__currentLoopData = $data_pemilik; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pemilik): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($pemilik->kode_pemilik); ?>">
								<?php echo e($pemilik->nama_pemilik); ?>

							</option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label> Image </label>
								<input type="file" class="form-control" name="image">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label> Merk </label>
								<select class="form-control" name="kode_type">
									<option value="">- Pilih -</option>
									<?php $__currentLoopData = $data_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($type->kode_type); ?>">
										<?php echo e($type->kode_type); ?> - <?php echo e($type->nama_type); ?>

									</option>
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
			<form method="POST" action="<?php echo e(url('/update_data_kendaraan')); ?>" enctype="multipart/form-data">
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
<?php echo $__env->make("content.layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Project2\resources\views/content/kendaraan/data_kendaraan.blade.php ENDPATH**/ ?>