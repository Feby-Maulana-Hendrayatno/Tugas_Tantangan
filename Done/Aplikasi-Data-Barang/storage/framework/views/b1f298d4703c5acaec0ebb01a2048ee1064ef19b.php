

<?php $__env->startSection("page_header", "Update Data Tanah"); ?>

<?php $__env->startSection("page_scripts"); ?>

<script type="text/javascript">
	function ajaxTanah(id) {
		$.ajax({
			url : "<?php echo e(url('/admin/ajax_edit_tanah')); ?>",
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

<?php if(count($errors) > 0): ?>
<div class="alert alert-danger">
	<ul>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li>
			<?php echo e($error); ?>

		</li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
</div>
<?php endif; ?>

<?php if(session("sukses")): ?>
<div class="row">
	<div class="col-md-12">
		<div class="alert alert-success alert-dismissable fade-show">
			<?php echo e(session("sukses")); ?>

			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	</div>
</div>
<?php endif; ?>

<?php if(session("error")): ?>
<div class="row">
	<div class="col-md-12">
		<div class="alert alert-danger alert-dismissable fade-show">
			<?php echo e(session("error")); ?>

			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	</div>
</div>
<?php endif; ?>

<div class="modal fade" id="editTanahModal" tabindex="-1" role="dialog" aria-labelledby="editTanahModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editTanahModalLabel"><i class="fas fa-fw fa-eraser"></i> Update Data Tanah</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="modal-content">

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fas fa-fw fa-eraser"></i> Kembali</button>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-eraser"></i> Update Data Tanah </h6>
			</div>
			<div class="card-body">
				<form method="POST" action="<?php echo e(url('/admin/update_tanah')); ?>">
					<?php echo e(csrf_field()); ?>

					<input type="hidden" name="id" value="<?php echo e($edit->id); ?>">
					<div class="form-group">
						<label for="name"> Nama Tanah </label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Tanah" value="<?php echo e($edit->name); ?>">
					</div>
					<div class="form-group">
						<label for="length"> Panjang Tanah </label>
						<input type="number" class="form-control" id="length" name="length" placeholder="Panjang Tanah" value="<?php echo e($edit->length); ?>">
					</div>
					<div class="form-group">
						<label for="width"> Ukuran Tanah </label>
						<input type="number" class="form-control" id="width" name="width" placeholder="Ukuran Tanah" value="<?php echo e($edit->width); ?>">
					</div>
					<div class="form-group">
						<label for="details"> Detail </label>
						<textarea class="form-control" id="details" name="details" placeholder="Detail"><?php echo e($edit->details); ?></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-sm btn-block"><i class="fas fa-fw fa-save"></i> Simpan </button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-tags"></i> Data Tanah </h6>
			</div>
			<div class="card-body">
				<div class="table table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th class="text-center">No.</th>
								<th>Nama Tanah</th>
								<th class="text-center">Panjang</th>
								<th class="text-center">Ukuran</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 0 ?>

							<?php $__currentLoopData = $data_tanah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tanah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="text-center"><?php echo e(++$no); ?></td>
								<td><?php echo e($tanah->name); ?></td>
								<td class="text-center"><?php echo e($tanah->length); ?></td>
								<td class="text-center"><?php echo e($tanah->width); ?></td>
								<td class="text-center">
									<?php if(count($tanah->get_lapangan) > 0): ?>
									<?php if(count($tanah->get_ruangan) > 0): ?>
									<button type="button" class="btn btn-warning btn-sm"  disabled><i class="fas fa-fw fa-eraser"></i> Edit </button>
									<button type="button" class="btn btn-danger btn-sm" disabled><i class="fas fa-fw fa-trash"></i> Hapus </button>
									<?php else: ?>
									<button type="button" class="btn btn-warning btn-sm" disabled><i class="fas fa-fw fa-eraser"></i> Update </button>
									<button type="button" class="btn btn-danger btn-sm" disabled><i class="fas fa-fw fa-trash"></i> Delete </button>
									<?php endif; ?>
									<?php else: ?>
									<?php if(count($tanah->get_ruangan) > 0): ?>
									<button type="button" class="btn btn-warning btn-sm" disabled><i class="fas fa-fw fa-eraser"></i> Update </button>
									<button type="button" class="btn btn-danger btn-sm" disabled><i class="fas fa-fw fa-trash"></i> Delete </button>
									<?php else: ?>
									<a href="<?php echo e(url('/admin/'.$tanah->id.'/edit_tanah')); ?>" class="btn btn-warning btn-sm"><i class="fas fa-fw fa-eraser"></i> Edit </a>
									<a href="<?php echo e(url('/admin/'.$tanah->id.'/hapus_tanah')); ?>" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash"></i> Hapus </a>
									<?php endif; ?>
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
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("content.layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Aplikasi-Data-Barang\resources\views/content/admin/tanah/edit_tanah.blade.php ENDPATH**/ ?>