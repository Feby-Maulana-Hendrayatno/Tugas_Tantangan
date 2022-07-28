<?php $__env->startSection("page_title", "Data Users"); ?>

<?php $__env->startSection("page_header"); ?>
<i class="fa fa-users"></i> Data Users
<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_breadcrumb"); ?>

<ol class="breadcrumb">
	<li><a href="<?php echo e(url('/page/dashboard')); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li class="active">Data Users</li>
</ol>

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
	<div class="col-xs-4">
		<div class="box box-info">
			<div class="box-header">
				<h3 class="box-title"><i class="fa fa-plus"></i> Tambah Data </h3>
			</div>
			<div class="box-body">
				<form method="POST" action="<?php echo e(url('/page/simpan_data_users')); ?>">
					<?php echo e(csrf_field()); ?>

					<div class="form-group">
						<label class="control-label"> Name </label>
						<input type="text" class="form-control" name="name" placeholder="Masukkan Name">
					</div>
					<div class="form-group">
						<label class="control-label"> Username </label>
						<input type="text" class="form-control" name="username" placeholder="Masukkan Username">
					</div>
					<div class="form-group">
						<label class="control-label"> Password </label>
						<input type="password" class="form-control" name="password" placeholder="Masukkan Password">
					</div>
					<hr>
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-sm btn-block">
							<i class="fa fa-plus"></i> Tambah
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php $__currentLoopData = $data_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="col-xs-4">
		<div class="box box-info">
			<div class="box-header">
				<h3 class="box-title"><i class="fa fa-pencil"></i> Update Data </h3>
			</div>
			<div class="box-body">
				<form method="POST" action="<?php echo e(url('/page/users')); ?>">
					<?php echo e(csrf_field()); ?>

					<?php echo e(method_field("PUT")); ?>

					<input type="hidden" name="id" value="<?php echo e($user->id); ?>">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label"> Name </label>
								<input type="text" class="form-control" name="name" placeholder="Masukkan Name" value="<?php echo e($user->name); ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label"> Username </label>
								<input type="text" class="form-control" name="username" placeholder="Masukkan Username" value="<?php echo e($user->username); ?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label"> Password </label>
						<input type="password" class="form-control" name="password" placeholder="Masukkan Password">
					</div>
					<div class="form-group">
						<label class="control-label"> Konfirmasi Password </label>
						<input type="password" class="form-control" name="konfirmasi_password" placeholder="Konfirmasi Password">
					</div>
					<hr>
					<div class="form-group">
						<button type="submit" class="btn btn-info btn-sm btn-block">
							<i class="fa fa-save"></i> Simpan
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("content.page.layouts.theme", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Project1\resources\views/content/page/admin/users/data_user.blade.php ENDPATH**/ ?>