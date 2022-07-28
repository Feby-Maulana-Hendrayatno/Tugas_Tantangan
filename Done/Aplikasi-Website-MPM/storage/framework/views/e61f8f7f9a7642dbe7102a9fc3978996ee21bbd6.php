

<?php $__env->startSection("page_title", "Data Kelas"); ?>

<?php $__env->startSection("breadcrumb"); ?>

<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
			<h1 class="m-0">Kelas</h1>
		</div><!-- /.col -->
		<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item">
					<a href="<?php echo e(url('/page/admin/dashboard')); ?>"> Dashboard </a>
				</li>
				<li class="breadcrumb-item">
					<a href="<?php echo e(url('/page/admin/kelas/')); ?>"> Data Kelas </a>
				</li>
				<li class="breadcrumb-item active">Edit Data Kelas</li>
			</ol>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_content"); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<form id="quickForm" method="POST" action="<?php echo e(url('/page/admin/kelas/simpan')); ?>">
				<?php echo e(csrf_field()); ?>

				<input type="hidden" name="id_kelas" value="<?php echo e($edit->id_kelas); ?>">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fa fa-edit"></i> Edit Data Kelas
						</h3>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label for="nama_kelas"> Nama Kelas </label>
							<input type="text" class="form-control" id="nama_kelas" name="nama_kelas" placeholder="Masukkan Nama Kelas" value="<?php echo e($edit->nama_kelas); ?>">
						</div>
						<div class="form-group">
							<label for="id_prodi"> Prodi </label>
							<select class="form-control" id="id_prodi" name="id_prodi">
								<option value="">- Pilih </option>
								<?php $__currentLoopData = $data_prodi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prodi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if($prodi->id_prodi == $edit->id_prodi): ?>
									<option value="<?php echo e($prodi->id_prodi); ?>" selected>
										<?php echo e($prodi->nama_prodi); ?>

									</option>
									<?php else: ?>
									<option value="<?php echo e($prodi->id_prodi); ?>">
										<?php echo e($prodi->nama_prodi); ?>

									</option>
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary btn-sm">
							<i class="fa fa-save"></i> Simpan
						</button>
						<button type="reset" class="btn btn-danger btn-sm">
							<i class="fa fa-refresh"></i> Batal
						</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">
						Data Kelas
					</h3>
				</div>
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="text-center">No.</th>
								<th class="text-center">Nama Kelas</th>
								<th class="text-center">Prodi</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 0 ?>
							<?php $__currentLoopData = $data_kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="text-center"><?php echo e(++$no); ?>.</td>
								<td class="text-center"><?php echo e($kelas->nama_kelas); ?></td>
								<td class="text-center">
									<?php if(empty($kelas->getProdi->nama_prodi)): ?>
										<i><b>NULL</b></i>
									<?php else: ?>
									<?php echo e($kelas->getProdi->nama_prodi); ?>

									<?php endif; ?>
								</td>
								<td class="text-center">
									<a href="<?php echo e(url('/page/admin/kelas/edit')); ?>/<?php echo e($kelas->id_kelas); ?>" class="btn btn-warning btn-sm">
										<i class="fa fa-edit"></i> Edit
									</a>
									<form onsubmit="return false" id="form" class="d-inline">
										<?php echo e(csrf_field()); ?>

										<button id="btn-hapus" class="btn btn-danger btn-sm" onclick="hapus(<?php echo e($kelas->id_kelas); ?>)">
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_scripts"); ?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo e(url('/layouts')); ?>/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo e(url('/layouts')); ?>/plugins/jquery-validation/additional-methods.min.js"></script>

<script>
$(function () {
	$('#quickForm').validate({
    	rules: {
    		nama_kelas: {
        		required : true,
    		},
    		id_prodi : {
    			required : true,
    		},
  		},
    	messages: {
    		nama_kelas : {
        		required: "Kolom tidak boleh kosong",
      		},
      		id_prodi : {
      			required : "Kolom tidak boleh kosong",
      		},
    	},
    	errorElement: 'span',
    	errorPlacement: function (error, element) {
    		error.addClass('invalid-feedback');
      		element.closest('.form-group').append(error);
    	},
    	highlight: function (element, errorClass, validClass) {
      		$(element).addClass('is-invalid');
    	},
    	unhighlight: function (element, errorClass, validClass) {
      		$(element).removeClass('is-invalid');
    	}
	});
});
</script>

<script type="text/javascript">
	function hapus(id_kelas)
	{
		swal({
			title: "Yakin ? Ingin Menghapus Data Ini ?",
			text: "Klik OK, Untuk Menghapus!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})

		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
					url : "<?php echo e(url('/page/admin/kelas/hapus')); ?>/" + id_kelas,
					type : "POST",
					data : { _method : 'delete', _token : $('input[name="_token"]').val(), id_kelas : id_kelas },
					success : function (res) {
						swal({
							title: "Berhasil!",
							text: "Data Berhasil di Hapus",
							icon: "success",
							button: "OK!",
						})

						.then((willBerhasil) => {
							window.location.reload();
						});
					}
				})
			} else {

			}
		});
	}
</script>

<?php if(session("sukses")): ?>

<script type="text/javascript">
	swal({
		title: "Berhasil!",
		text: "<?php echo e(session('sukses')); ?>",
		icon: "success",
		button: "OK",
	});

</script>

<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("page.layouts.template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Proyek-Terbaru-MPM\Contoh\resources\views//page/admin/kelas/edit_data_kelas.blade.php ENDPATH**/ ?>