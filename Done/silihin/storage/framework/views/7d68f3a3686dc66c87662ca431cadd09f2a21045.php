<?php foreach($kendaraan as $kendaraan) { ?>
	<div class="col-md-3 items-block">
		<div class="cs-card mb-3 cs-product-card">
			<img src="/storage/<?php echo $kendaraan->gambar; ?>" alt="<?php echo $kendaraan->nama_kendaraan; ?>" class="img-responsive" title="<?php echo $kendaraan->nama_kendaraan; ?>">
			<div class="cs-card-content clearfix">
				<div class="pull-left">
					<h4 title="Sports drink"><?php echo $kendaraan->nama_kendaraan; ?></h4>
					<p>Rp. <?php echo rupiah($kendaraan->harga); ?></p>
				</div>
				<div class="pull-right">
					<a class="btn btn-sm btn-round btn-2warning card-btn" data-toggle="modal" data-target="#edit-kendaraan-modal" data-id="<?php echo $kendaraan->id; ?>" id="edit">Edit</a>
					<?php echo method_field("delete"); ?>
					<button class="btn btn-sm btn-round btn-2danger card-btn" onclick="konfirmasi('<?php echo $kendaraan->nama_kendaraan; ?>', <?php echo $kendaraan->id; ?>)">Hapus</button>
				</div>
			</div>
		</div>
	</div>
	<?php } ?><?php /**PATH D:\Tugas_Pa_Anis\project-2-new\resources\views/kendaraan/view.blade.php ENDPATH**/ ?>