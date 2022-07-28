

<?php $__env->startSection("page_title", "Data Divisi"); ?>

<?php $__env->startSection("page_css"); ?>

<link rel="stylesheet" href="<?php echo e(url('/layouts')); ?>/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="<?php echo e(url('/layouts')); ?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

<?php $__env->stopSection(); ?>

<?php $__env->startSection("breadcrumb"); ?>

<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
			<h1 class="m-0">Divisi</h1>
		</div>
		<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item">
					<a href="<?php echo e(url('/page/admin/dashboard')); ?>"> Dashboard </a>
				</li>
				<li class="breadcrumb-item active"> Data Divisi </li>
			</ol>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_content"); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<form id="quickForm" method="POST" action="<?php echo e(url('/page/admin/divisi/tambah')); ?>">
				<?php echo e(csrf_field()); ?>

				<div class="card">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fa fa-plus"></i> Tambah Divisi
						</h3>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label for="id_bagian"> Bagian </label>
							<select class="form-control selectbs4" id="id_bagian" name="id_bagian">
								<option value="">- Pilih -</option>
								<?php $__currentLoopData = $data_bagian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bagian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($bagian->id_bagian); ?>">
									<?php echo e($bagian->nama_bagian); ?>

								</option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>
						<div class="form-group">
							<label for="nim_anggota"> Anggota </label>
							<select class="form-control select2bs4" id="nim_anggota" name="nim_anggota" style="width: 100%">
								<option value="">- Pilih -</option>
								<?php $__currentLoopData = $data_anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anggota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($anggota->nim); ?>">
									<?php echo e($anggota->nama); ?>

								</option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>
						<div class="form-group">
							<label for="id_jabatan"> Jabatan </label>
							<select class="form-control select3bs4" id="id_jabatan" name="id_jabatan" style="width: 100%">
								<option value="">- Pilih -</option>
								<?php $__currentLoopData = $data_jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jabatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($jabatan->id_jabatan); ?>">
									<?php echo e($jabatan->nama_jabatan); ?>

								</option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary btn-sm">
							<i class="fa fa-plus"></i> Tambah
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
						Data Divisi
					</h3>
				</div>
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="text-center">No.</th>
								<th class="text-center">NIM</th>
								<th class="text-center">Jabatan</th>
								<th class="text-center">Bagian</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 0 ?>
							<?php $__currentLoopData = $data_divisi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $divisi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="text-center"><?php echo e(++$no); ?>.</td>
								<td class="text-center"><?php echo e($divisi->getBagian->nama_bagian); ?></td>
								<td class="text-center"><?php echo e($divisi->getJabatan->nama_jabatan); ?></td>
								<td class="text-center"><?php echo e($divisi->getAnggota->nama); ?></td>
								<td class="text-center">
									<a href="<?php echo e(url('/page/admin/divisi/edit')); ?>/<?php echo e($divisi->id_divisi); ?>" class="btn btn-warning btn-sm">
										<i class="fa fa-edit"></i> Edit
									</a>
									<form onsubmit="return false" id="form" class="d-inline">
										<?php echo e(csrf_field()); ?>

										<button id="btn-hapus" class="btn btn-danger btn-sm" onclick="hapus(<?php echo e($divisi->id_divisi); ?>)">
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

<script src="<?php echo e(url('/layouts')); ?>/plugins/select2/js/select2.full.min.js"></script>
<script type="text/javascript">
  $(function() {
  	$('.selectbs4').select2({
  		theme: 'bootstrap4'
  	}),
    $('.select3bs4').select2({
      theme: 'bootstrap4'
    }),
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  });
</script>

<script>
$(function () {
	$('#quickForm').validate({
    	rules: {
    		id_bagian : {
        		required : true,
    		},
    		nim_anggota : {
    			required : true,
    		},
    		id_jabatan : {
    			required : true,
    		},
  		},
    	messages: {
    		id_bagian : {
        		required: "Kolom tidak boleh kosong",
      		},
      		nim_anggota : {
      			required : "Kolom tidak boleh kosong",
      		},
      		id_jabatan : {
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
	function hapus(id_divisi)
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
					url : "<?php echo e(url('/page/admin/divisi/hapus')); ?>/" + id_divisi,
					type : "POST",
					data : { _method : 'delete', _token : $('input[name="_token"]').val(), id_divisi : id_divisi },
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
<?php echo $__env->make("page.layouts.template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Proyek-MPM-POLINDRA\Contoh\resources\views//page/admin/divisi/data_divisi.blade.php ENDPATH**/ ?>