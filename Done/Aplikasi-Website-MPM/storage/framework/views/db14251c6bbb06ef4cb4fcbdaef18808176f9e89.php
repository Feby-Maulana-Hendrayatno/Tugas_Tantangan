

<?php $__env->startSection("page_title", "Data Tentang Kami"); ?>

<?php $__env->startSection("breadcrumb"); ?>

<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
			<h1 class="m-0">Tentang Kami</h1>
		</div>
		<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item">
					<a href="<?php echo e(url('/page/admin/dashboard')); ?>"> Dashboard </a>
				</li>
				<li class="breadcrumb-item active">Data Tentang Kami</li>
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
						Data Tentang Kami
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
								<th>Judul</th>
								<th class="text-center">Gambar</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 0 ?>
							<?php $__currentLoopData = $data_tentang_kami; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tentang_kami): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="text-center"><?php echo e(++$no); ?>.</td>
								<td><?php echo e($tentang_kami->judul); ?></td>
								<td class="text-center"></td>
								<td class="text-center">
									<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default-edit">
									<i class="fa fa-edit"></i> Edit
									</button>
									<form onsubmit="return false" id="form" class="d-inline">
										<?php echo e(csrf_field()); ?>

										<button id="btn-hapus" class="btn btn-danger btn-sm" onclick="hapus(<?php echo e($tentang_kami->id); ?>)">
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
					<i class="fa fa-plus"></i> Tambah Data Tentang Kami
				</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="quickForm2" method="POST" action="<?php echo e(url('/page/admin/tentang_kami/tambah')); ?>" enctype="multipart/form-data">
				<?php echo e(csrf_field()); ?>

				<input type="hidden" name="status" value="0">
				<div class="modal-body" id="modal-content">
					<div class="form-group">
						<label for="judul"> Judul </label>
						<input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul">
					</div>
					<div class="form-group">
						<label for="body"> Deskripsi </label>
						<textarea id="summernote1" name="body"></textarea>
					</div>
					<div class="form-group">
						<label for="gambar"> Gambar </label>
						<input type="file" class="form-control" id="gambar" name="gambar">
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
					<i class="fa fa-edit"></i> Edit Data Tentang Kami
				</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="quickForm2" method="POST" action="<?php echo e(url('/page/admin/tentang_kami/simpan')); ?>" enctype="multipart/form-data">
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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo e(url('/layouts')); ?>/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo e(url('/layouts')); ?>/plugins/jquery-validation/additional-methods.min.js"></script>

<script>
	$(function () {
		$('#quickForm').validate({
			rules: {
				nama_role : {
					required : true,
				},
			},
			messages: {
				nama_role : {
					required: "Kolom tidak boleh kosong",
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
	function hapus(id)
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
					url : "<?php echo e(url('/page/admin/tentang_kami/hapus')); ?>/" + id,
					type : "POST",
					data : { _method : 'delete', _token : $('input[name="_token"]').val(), id : id },
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
<?php echo $__env->make("page.layouts.template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Proyek-MPM-POLINDRA\Contoh\resources\views//page/admin/tentang_kami/data_tentang_kami.blade.php ENDPATH**/ ?>