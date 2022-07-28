

<?php $__env->startSection('content'); ?>

<?php if(session('message2')): ?>
<?php echo session('message2'); ?>

<?php endif; ?>
<div id="pesan"></div>
<div class="cs-card cart-card card-show">
	<div class="card-header bordered clearfix">
		Profil
	</div>
	<div class="cs-card-content card-items-list clearfix">
		<form action="/profile" id="profile_form" method="post" enctype="multipart/form-data">
			<?php echo csrf_field(); ?>
			<?php echo method_field('patch'); ?>
			<div class="form-group row">
				<label class="col-sm-2">Email</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" readonly value="<?php echo e($user->email); ?>" id="email">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Nama Lengkap</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="<?php echo e($user->nama_lengkap); ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Telepon</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="telepon" id="telepon" value="<?php echo e(reHandphone($user->telepon)); ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Foto Profil</label>
				<div class="col-sm-5">
					<input type="file" class="form-control" name="image" id="image">
				</div>
				<div class="col-sm-5">
					<?php if($user->image == ''): ?>
					<img src="/assets/front/images/user.png" alt="<?php echo e($user->nama_lengkap); ?>">
					<?php else: ?>
					<img src="/storage/<?php echo e($user->image); ?>" alt="<?php echo e($user->nama_lengkap); ?>" width="250" height="250">
					<?php endif; ?>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Alamat</label>
				<div class="col-sm-10">
					<textarea name="alamat" id="alamat" rows="10" class="form-control"><?php echo e($user->alamat); ?></textarea>
				</div>
			</div>

			<div class="form-group">
				<button class="btn btn-2primary">Simpan</button>
				<input type="reset" value="Reset" class="btn btn-2warning">
			</div>
		</form>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template/second', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\project-2-new\resources\views/profile/index.blade.php ENDPATH**/ ?>