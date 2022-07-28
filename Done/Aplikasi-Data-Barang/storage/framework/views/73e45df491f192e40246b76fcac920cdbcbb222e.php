<?php $__env->startSection("page_content"); ?>

<div class="row">
	<div class="col-md-12 mb-4">
		<div class="card border-left-info shadow h-100 py-2">
			<div class="card-body">
				Selamat Datang <b><?php echo e(Auth::user()->name); ?></b>!
				<br>
				di Aplikasi Sarana dan Prasarana SMK INFORMATIKA AL - IRSYAD AL - ISLAMIYYAH KOTA CIREBON.
				<br>
				Silahkan pilih menu, untuk memulai program.
			</div>
		</div>
	</div>
</div>

<img src="<?php echo e(url('images/Cirebon-Waterland-Taman-Ade-Irma-Suryani-300x169.jpg')); ?>" align="left">

<?php $__env->stopSection(); ?>

<?php echo $__env->make("content.layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Aplikasi-Data-Barang\resources\views/content/admin/dashboard.blade.php ENDPATH**/ ?>