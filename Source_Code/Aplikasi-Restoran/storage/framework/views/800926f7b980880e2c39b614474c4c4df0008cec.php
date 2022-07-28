

<?php $__env->startSection("page_content"); ?>

<div class="col-sm-12 col-md-12">
	<div class="panel panel-violet">
		<div class="panel-heading">
			Selamat Datang <b><?php echo e(Auth::user()->name); ?></b>
		</div>
		<div class="panel-body">
			di Aplikasi Restoran Kami. Silahkan Pilih menu untuk memulai program
		</div>
	</div>
</div>


<?php $__currentLoopData = $data_menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="col-md-4 col-sm-4">
		<div class="panel panel-violet">
			<div class="panel-heading">
				<?php echo e($menu->nama_menu); ?>

			</div>
			<div class="panel-body">
				<img src="<?php echo e(url('/public/img_menu/'.$menu->foto_menu)); ?>" width="100%" height="300px">
				<hr>
				<p>
					<b>Kode Menu : </b> <?php echo e($menu->kode_menu); ?>

					<hr>
					<b>Harga : </b> Rp. <?php echo e(number_format($menu->harga_menu)); ?>

					<hr>
				</p>
				<a href="<?php echo e(url('/detail_menu/'.$menu->id.'/detail')); ?>" class="btn btn-success btn-block">
					<i class="fa fa-search"></i> Detail
				</a>
			</div>
		</div>
	</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("content.layouts", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Project4\resources\views/content/dashboard.blade.php ENDPATH**/ ?>