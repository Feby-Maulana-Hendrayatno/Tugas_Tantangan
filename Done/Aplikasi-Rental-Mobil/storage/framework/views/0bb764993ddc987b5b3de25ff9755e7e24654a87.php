

<?php $__env->startSection("page_scripts"); ?>

<script type="text/javascript">
	function edit_users(id) {
		$.ajax({
			url : "<?php echo e(url('/edit_users')); ?>",
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
		<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">
			<i class="fa fa-plus"></i> Tambah
		</button>
		<br><br>
		<div class="content-panel">
			<h4><i class="fa fa-users"></i> Data Users </h4>
			<section id="unseen">
				<table id="data" class="table table-bordered table-striped table-condensed">
					<thead>
						<tr>
							<th class="text-center">No.</th>
							<th class="text-center">Username</th>
							<th class="text-center">Role</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 0 ?>

						<?php $__currentLoopData = $data_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="text-center"><?php echo e(++$no); ?>.</td>
								<td class="text-center"><?php echo e($users->username); ?></td>
								<td class="text-center">
									<?php if($users->role == 1): ?>
									Admin
									<?php elseif($users->role == 2): ?>
									Petugas
									<?php else: ?>
									Tidak Ada
									<?php endif; ?>
								</td>
								<td class="text-center">
									<button onclick="edit_users(<?php echo e($users->id); ?>)" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModalUpdate">
										<i class="fa fa-pencil"></i> Update
									</button>
								</td>
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
			<form method="POST" action="<?php echo e(url('/simpan_data_users')); ?>">
				<?php echo e(csrf_field()); ?>

				<div class="modal-body">
					<div class="form-group">
						<label> Username </label>
						<input type="text" class="form-control" name="username" placeholder="Masukkan Username">
					</div>
					<div class="form-group">
						<label> Password </label>
						<input type="password" class="form-control" name="password" placeholder="Masukkan Password">
					</div>
					<div class="form-group">
						<label> Role </label>
						<select class="form-control" name="role">
							<option value="">- Pilih -</option>
							<option value="1">Admin</option>
							<option value="2">Petugas</option>
						</select>
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
			<form method="POST" action="<?php echo e(url('/update_data_users')); ?>">
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
<?php echo $__env->make("content.layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Project2\resources\views/content/users/data_users.blade.php ENDPATH**/ ?>