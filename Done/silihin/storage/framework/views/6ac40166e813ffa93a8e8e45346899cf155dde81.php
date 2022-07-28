

<?php $__env->startSection('content'); ?>

<?php if(session('message2')): ?>
<?php echo session('message2'); ?>

<?php endif; ?>

<div class="cs-card cart-card card-show">
	<div class="card-header bordered clearfix">
		Daftar Kendaraan
		<button type="button" data-toggle="modal" data-target="#kendaraan-modal" class="btn btn-primary pull-right"><i class="pe-7s-plus"></i> Tambah Kendaraan</button>
	</div>
	<div class="cs-card-content card-items-list clearfix">
		<div class="row">
			<div id="kendaraan"></div>
		</div>
	</div>
</div>

<?php echo $__env->make('modal.kendaraan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo e(csrf_field()); ?>


<script>
	loadKendaraanByUser();

	function loadKendaraanByUser() {
		$.get('/get/kendaraan-by-user', function (data) {
			$("#kendaraan").html(data);
		})
	}

	function konfirmasi(nama, id) {
		swal({
			title: "Apakah anda yakin?",
			text: "Data " + nama + " akan dihapus!",
			icon: "warning",
			buttons: ["Batal", "Hapus"],
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
					url: "/kendaraan/"+id,
					type: "post",
					data: {_method: 'delete', id: id, _token: $("input[name='_token']").val()},
					success: function (response) {
						if (response == 1) {
							swal("Wooww!", "Data anda berhasil dihapus", "success");
							loadKendaraanByUser();
						} else {
							swal("Ooops", "Data gagal terhapus!", "error");
						}
					}
				});
			} else {
				swal("Data anda tidak terhapus");
			}
		});
	}

	$(document).ready(function () {
		$('body').on('click', '#edit', function (event) {
			event.preventDefault();
			var id = $(this).data('id');

			$.get('kendaraan/' + id + '/edit', function (data) {
				$('#edit_nama').val(data.data.nama_kendaraan);
				$('#edit_harga').val(data.data.harga);
				$('#edit_jumlah').val(data.data.jumlah);
				$('#edit_keterangan').val(data.data.keterangan);
				$('#gambar_sebelumnya').val(data.data.gambar);
				$('#img').attr('src', "/storage/" + data.data.gambar);
				$('#edit_kendaraan_form').attr('action', '/kendaraan/'+id);
			})
		});

	});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template/second', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tugas_Pa_Anis\project-2-new\resources\views/kendaraan/index.blade.php ENDPATH**/ ?>