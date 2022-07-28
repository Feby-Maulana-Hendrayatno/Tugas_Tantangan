

<?php $__env->startSection("page_content"); ?>

<div class="col-md-4">
	<div class="panel panel-green">
		<div class="panel-heading">
			Input Data Menu
		</div>
		<div class="panel-body pan">
			<form method="POST" action="<?php echo e(url('/simpan_data_menu')); ?>" enctype="multipart/form-data">
				<?php echo e(csrf_field()); ?>

				<div class="form-body pal">
					<div class="form-group">
						<label>Kode Menu</label>
						<input type="text" class="form-control" name="kode_menu" placeholder="Masukkan Kode Menu">
					</div>
					<div class="form-group">
						<label>Nama Menu</label>
						<input type="text" class="form-control" name="nama_menu" placeholder="Masukkan Nama Menu">
					</div>
					<div class="form-group">
						<label>Harga Menu</label>
						<input type="text" class="form-control" name="harga_menu" placeholder="0">
					</div>
					<div class="form-group">
						<label>Foto Menu</label>
						<input type="file" class="form-control" name="foto_menu">
					</div>
					<div class="form-group">
						<label>Status Menu</label>
						<select class="form-control" name="status_menu">
							<option value="">- Pilih -</option>
							<option value="ada">Ada</option>
							<option value="habis">Habis</option>
						</select>
					</div>
					<div class="form-group">
						<label>Kategori</label>
						<select class="form-control" name="id_kategori"></select>
					</div>
				</div>
				<div class="form-actions text-right pal">
					<button type="submit" class="btn btn-success btn-block">
						<i class="fa fa-plus"></i> Tambah
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="col-md-8">
	<div class="panel panel-green">
		<div class="panel-heading">
			Data menu
		</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th class="text-center">No.</th>
						<th class="text-center">Kode Menu</th>
						<th>Nama Menu</th>
						<th class="text-center">Harga Menu</th>
						<th class="text-center">Foto</th>
						<th class="text-center">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 0 ?>

					<?php $__currentLoopData = $data_menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td class="text-center"><?php echo e(++$no); ?>.</td>
							<td class="text-center"><?php echo e($menu->kode_menu); ?></td>
							<td><?php echo e($menu->nama_menu); ?></td>
							<td class="text-center">Rp. <?php echo e(number_format($menu->harga_menu)); ?></td>
							<td class="text-center">
								<img src="<?php echo e(url('/public/img_menu/'.$menu->foto_menu)); ?>" width="50">
							</td>
							<td class="text-center">
								<a href="<?php echo e(url('/edit_menu/'.$menu->id.'/edit')); ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Update </a>
								<a onclick="return confirm('Mau di Hapus ?')" href="<?php echo e(url('/delete_menu/'.$menu->id.'/delete')); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete </a>
							</td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("content.layouts", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Project4\resources\views/content/menu/data_menu.blade.php ENDPATH**/ ?>