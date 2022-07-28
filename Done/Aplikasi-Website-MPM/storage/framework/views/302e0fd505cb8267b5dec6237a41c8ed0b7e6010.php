

<?php $__env->startSection("page_title", "Data Akun"); ?>

<?php $__env->startSection("breadcrumb"); ?>

<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
			<h1 class="m-0">Akun</h1>
		</div><!-- /.col -->
		<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item">
					<a href="<?php echo e(url('/page/admin/dashboard')); ?>"> Dashboard </a>
				</li>
				<li class="breadcrumb-item active">Data Akun</li>
			</ol>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_content"); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">
						Data Akun
					</h3>
					<button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#modal-default">
						<i class="fa fa-plus"></i> Tambah Data
					</button>
				</div>
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="text-center">No.</th>
								<th>Username</th>
								<th>Nama</th>
								<th class="text-center">Email</th>
								<th class="text-center">Role</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 0 ?>
							<?php $__currentLoopData = $data_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="text-center"><?php echo e(++$no); ?>.</td>
								<td><?php echo e($user->username); ?></td>
								<td><?php echo e($user->nama); ?></td>
								<td class="text-center"><?php echo e($user->email); ?></td>
								<td class="text-center"><?php echo e($user->id_role); ?></td>
								<td class="text-center">
									<button onclick="editAkun(<?php echo e($user->id); ?>)" type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default-edit">
										<i class="fa fa-edit"></i> Edit
									</button>
									<form method="POST" action="<?php echo e(url('/page/admin/akun/hapus')); ?>" class="d-inline">
										<?php echo e(csrf_field()); ?>

										<input type="hidden" name="id" value="<?php echo e($user->id); ?>">
										<button type="submit" class="btn btn-danger">
											<i class="fa fa-trash-o"></i> Hapus
										</button>
									</form>
								</td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Tambah Data -->
<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">
					<i class="fa fa-plus"></i> Tambah Data
				</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="<?php echo e(url('/page/admin/akun/tambah')); ?>">
				<?php echo e(csrf_field()); ?>

				<div class="modal-body">
					<div class="form-group">
						<label for="username"> Username </label>
						<input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">
					</div>
					<div class="form-group">
						<label for="nama"> Nama </label>
						<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="email"> Email </label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Masukkan E-Mail">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="password"> Password </label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="id_role"> Role </label>
						<select class="form-control" id="id_role" name="id_role">
							<option value="">- Pilih -</option>
							<?php $__currentLoopData = $data_role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($role->id_role); ?>">
								<?php echo e($role->nama_role); ?>

							</option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-refresh"></i> Kembali</button>
					<button type="submit" class="btn btn-primary btn-sm">
						<i class="fa fa-plus"></i> Tambah
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- END -->

<!-- Edit Data -->
<div class="modal fade" id="modal-default-edit">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">
					<i class="fa fa-plus"></i> Tambah Data
				</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="<?php echo e(url('/page/admin/akun/tambah')); ?>">
				<?php echo e(csrf_field()); ?>

				<div class="modal-body" id="modal-content-edit">
					
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-refresh"></i> Kembali</button>
					<button type="submit" class="btn btn-primary btn-sm">
						<i class="fa fa-plus"></i> Tambah
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- END -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_scripts"); ?>

<script type="text/javascript">
	function editAkun(id) {
		$.ajax({
			url : "<?php echo e(url('/page/admin/akun/edit')); ?>",
			type : "GET",
			data : { id : id },
			success : function(data) {
				$("#modal-content-edit").html(data);
				return true;
			}
		});
	}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("page.layouts.template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Proyek-MPM-POLINDRA\Contoh\resources\views//page/admin/akun/data_akun.blade.php ENDPATH**/ ?>