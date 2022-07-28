

<?php $__env->startSection("page_title", "Data Prodi"); ?>

<?php $__env->startSection("breadcrumb"); ?>

<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
			<h1 class="m-0">Prodi</h1>
		</div>
		<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item">
					<a href="<?php echo e(url('/page/admin/dashboard')); ?>"> Dashboard </a>
				</li>
				<li class="breadcrumb-item">
					<a href="<?php echo e(url('/page/admin/prodi/')); ?>"> Data Prodi </a>
				</li>
				<li class="breadcrumb-item active">Edit Data Prodi</li>
			</ol>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_content"); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<form id="quickForm" method="POST" action="<?php echo e(url('/page/admin/prodi/simpan')); ?>">
				<?php echo e(csrf_field()); ?>

				<input type="hidden" name="id_prodi" value="<?php echo e($edit->id_prodi); ?>">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fa fa-edit"></i> Edit Data Prodi
						</h3>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label for="nama_prodi"> Nama Prodi </label>
							<input type="text" class="form-control" id="nama_prodi" name="nama_prodi" placeholder="Masukkan Nama Prodi" value="<?php echo e($edit->nama_prodi); ?>">
						</div>
						<div class="form-group">
							<label for="nama_jurusan"> Jurusan </label>
							<select class="form-control" id="id_jurusan" name="id_jurusan">
								<option value="">- Pilih -</option>
								<?php $__currentLoopData = $data_jurusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurusan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if($edit->id_jurusan == $jurusan->id_jurusan): ?>
									<option value="<?php echo e($jurusan->id_jurusan); ?>" selected>
										<?php echo e($jurusan->nama_jurusan); ?>

									</option>
									<?php else: ?>
									<option value="<?php echo e($jurusan->id_jurusan); ?>">
										<?php echo e($jurusan->nama_jurusan); ?>

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
						Data Prodi
					</h3>
				</div>
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="text-center">No.</th>
								<th class="text-center">Nama Prodi</th>
								<th class="text-center">Jurusan</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 0 ?>
							<?php $__currentLoopData = $data_prodi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prodi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="text-center"><?php echo e(++$no); ?>.</td>
								<td class="text-center"><?php echo e($prodi->nama_prodi); ?></td>
								<td class="text-center"><?php echo e($prodi->getJurusan->nama_jurusan); ?></td>
								<td class="text-center">
									<a href="<?php echo e(url('/page/admin/prodi/edit')); ?>/<?php echo e($prodi->id_prodi); ?>" class="btn btn-warning btn-sm">
										<i class="fa fa-edit"></i> Edit
									</a>
									<form onsubmit="return false" id="form" class="d-inline">
										<?php echo e(csrf_field()); ?>

										<button id="btn-hapus" class="btn btn-danger btn-sm" onclick="hapus(<?php echo e($prodi->id_prodi); ?>)">
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
    		nama_prodi: {
        		required : true,
    		},
    		id_jurusan : {
    			required : true,
    		},
  		},
    	messages: {
    		nama_prodi : {
        		required: "Kolom tidak boleh kosong",
      		},
      		id_jurusan : {
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
	function hapus(id_prodi)
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
					url : "<?php echo e(url('/page/admin/prodi/hapus')); ?>/" + id_prodi,
					type : "POST",
					data : { _method : 'delete', _token : $('input[name="_token"]').val(), id_prodi : id_prodi },
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
<?php echo $__env->make("page.layouts.template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Proyek-MPM-POLINDRA\Contoh\resources\views/page/admin/prodi/edit_data_prodi.blade.php ENDPATH**/ ?>