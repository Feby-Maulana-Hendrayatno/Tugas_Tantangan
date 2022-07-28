<?php $__env->startSection("page_title", "Data Kelas"); ?>

<?php $__env->startSection("page_header"); ?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-info"><i class="fa fa-plus"></i> Tambah Data </button>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_breadcrumb"); ?>

<ol class="breadcrumb">
	<li><a href="<?php echo e(url('/page/dashboard')); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li class="active">Data Kelas</li>
</ol>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_scripts"); ?>

<script type="text/javascript">
	function edit_kelas(id) {
		$.ajax({
			url : "<?php echo e(url('/page/edit_data_kelas')); ?>",
			type : "GET",
			data : { id : id },
			success : function(data) {
				$("#modal-content").html(data);
				return true;
			}
		});
	}
</script>

<?php $__env->stopSection(); ?>


<?php $__env->startSection("page_content"); ?>

<?php if(session("sukses")): ?>
<div class="row">
	<div class="col-md-12">
		<div class="alert alert-success" role="alert">
			<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<strong>Berhasil!</strong> <?php echo e(session("sukses")); ?>.
		</div>
	</div>
</div>
<?php endif; ?>

<?php if(session("error")): ?>
<div class="row">
	<div class="col-md-12">
		<div class="alert alert-danger" role="alert">
			<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<strong>Gagal!</strong> <?php echo e(session("error")); ?>.
		</div>
	</div>
</div>
<?php endif; ?>

<?php if(count($errors) > 0): ?>
<div class="row">
	<div class="col-md-12">
		<div class="alert alert-danger">
			<ul>
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li>
					<?php echo e($error); ?>

				</li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		</div>
	</div>
</div>
<?php endif; ?>

<div class="row">
	<div class="col-xs-12">
		<div class="box box-info">
			<div class="box-header">
				<h3 class="box-title"><i class="fa fa-bars"></i> Data Kelas </h3>
			</div>
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th class="text-center">No.</th>
							<th class="text-center">Nama Kelas</th>
							<th>Nama Wali Kelas</th>
							<th class="text-center">Jumlah Siswa</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 0 ?>

						<?php $__currentLoopData = $data_kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td class="text-center"><?php echo e(++$no); ?>.</td>
							<td class="text-center"><?php echo e($kelas->nama_kelas); ?></td>
							<td><?php echo e($kelas->guru->nama); ?></td>
							<td class="text-center">
								<?php
									$jumlah_siswa = DB::table("siswa")
												->where("id_kelas", $kelas->id)
												->count();
									echo $jumlah_siswa;
								?>
							</td>
							<td class="text-center">
								<?php if(count($kelas->siswa) > 0): ?>
								<button disabled onclick="edit_kelas(<?php echo e($kelas->id); ?>)" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-warning">
									<i class="fa fa-pencil"></i> Edit
								</button>
								<button disabled class="btn btn-danger btn-sm">
									<i class="fa fa-trash-o"></i> Hapus
								</button>
								<?php else: ?>
								<button onclick="edit_kelas(<?php echo e($kelas->id); ?>)" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-warning">
									<i class="fa fa-pencil"></i> Edit
								</button>
								<a onclick="return confirm('Yakin ? Ingin Menghapus Data ?')" href="<?php echo e(url('/page/hapus_data_kelas/'.$kelas->id)); ?>" class="btn btn-danger btn-sm">
									<i class="fa fa-trash-o"></i> Hapus
								</a>
								<?php endif; ?>
							</td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal-info">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Data</h4>
			</div>
			<form method="POST" action="<?php echo e(url('/page/simpan_data_kelas')); ?>">
				<?php echo e(csrf_field()); ?>

				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label"> Nama Kelas </label>
								<input type="text" class="form-control" name="nama_kelas" placeholder="Masukkan Nama Kelas" autocomplete="off">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label"> Nama Wali Kelas </label>
								<select class="form-control" name="nip_wali_kelas">
									<option value="" disabled selected>- Pilih -</option>
									<?php $__currentLoopData = $data_guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php if($guru->kelas == ""): ?>
											<option value="<?php echo e($guru->nip); ?>">
												<?php echo e($guru->nama); ?>

										</option>
										<?php endif; ?>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-sign-out"></i> Close</button>
					<button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah </button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="modal-warning">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title"><i class="fa fa-pencil"></i> Edit Data</h4>
			</div>
			<form method="POST" action="<?php echo e(url('/page/update_data_kelas')); ?>">
				<?php echo e(csrf_field()); ?>

				<?php echo e(method_field('PUT')); ?>

				<div class="modal-body" id="modal-content">

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-sign-out"></i> Close</button>
					<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan </button>
				</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("content.page.layouts.theme", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Project1\resources\views/content/page/admin/kelas/data_kelas.blade.php ENDPATH**/ ?>