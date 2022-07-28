<?php 
$invoice = mt_rand(10000000,99999999); 
foreach($kendaraan as $k) { 
	if ($k->jumlah != 0) { ?>
		<div class="col-sm-4">
			<div class="cs-card mb-3 cs-product-card">
				<img src="/storage/<?php echo $k->gambar; ?>" alt="<?php echo $k->nama_kendaraan; ?>" class="img-responsive" title="<?php echo $k->nama_kendaraan; ?>" data-toggle="modal" data-target="#detail-modal" data-id="<?php echo $k->id; ?>" id="detail">
				<div class="cs-card-content clearfix">
					<div class="pull-left" data-toggle="modal" data-target="#detail-modal" data-id="<?php echo $k->id; ?>" id="detail">
						<h4 title="<?php echo $k->nama_kendaraan; ?> - [ <?php echo $k->user->nama_lengkap; ?> ]"><?php echo $k->nama_kendaraan; ?> - [ <?php echo $k->user->nama_lengkap; ?> ]</h4>
						<p>Rp. <?php echo rupiah($k->harga); ?></p>
						<p>Jumlah <?php echo $k->jumlah; ?></p>
					</div>
					<div class="pull-right">
						<button class="btn btn-sm btn-round btn-2warning" data-toggle="modal" data-target="#detail-modal" data-id="<?php echo $k->id; ?>" id="detail">Detail</button><br>
						<?php 
						if (Session::get('logged_in')) { 
							if (Session::get('logged_in')['id'] != $k->id_user) { ?>
								<button class="btn btn-sm btn-round btn-primary card-btn" data-toggle="modal" data-target="#inputpesanan-modal" data-id="<?php echo $k->id; ?>" data-invoice="pesan_<?php echo e($invoice); ?>" id="pesan">Pesan</button>
								<!-- <form action="/kendaraan/<?php echo $k->id; ?>/pesan_<?php echo $invoice; ?>" method="post">
									<?php echo csrf_field(); ?>
									<button class="btn btn-sm btn-round btn-primary card-btn">Pesan</button>
								</form> -->
							<?php } ?>
							<?php 
						} else { ?>
							<a onclick="show_popup('login')" class="btn btn-sm btn-round btn-primary card-btn">Pesan</a>
							<?php 
						}
						?>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	<?php } ?>
<?php /**PATH D:\Tugas_Pa_Anis\project-2-new\resources\views/kendaraan/allkendaraan.blade.php ENDPATH**/ ?>