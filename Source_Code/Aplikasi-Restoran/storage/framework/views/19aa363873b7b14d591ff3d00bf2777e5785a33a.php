

<?php $__env->startSection("page_content"); ?>

<div class="col-md-4">
	<div class="panel panel-green">
		<div class="panel-heading">
			Input Data Kategori
		</div>
		<div class="panel-body pan">
			<form action="<?php echo e(url('/simpan_data_kategori')); ?>" method="POST">
				<?php echo e(csrf_field()); ?>

				<div class="form-body pal">
					<div class="form-group">
						<label> Nama Kategori </label>
						<input type="text" class="form-control" name="nama_kategori" placeholder="Masukkan Nama Kategori">
					</div>
				</div>
				<div class="form-actions text-right pal">
					<button type="submit" class="btn btn-success btn-block">
						<i class="fa fa-fw fa-plus"></i> Tambah 
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="col-md-8">
	<div class="panel panel-green">
		<div class="panel-heading">
			Data Kategori
		</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th class="text-center">No.</th>
						<th>Nama Kategori</th>
						<th class="text-center">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 0 ?>

					<?php $__currentLoopData = $data_kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td class="text-center"><?php echo e(++$no); ?>.</td>
							<td><?php echo e($kategori->nama_kategori); ?></td>
							<td class="text-center">
								<a href="<?php echo e(url('/edit_kategori/'.$kategori->id.'/edit')); ?>" class="btn btn-warning btn-sm"><i class="fa fa-fw fa-pencil"></i> Update </a>
								<a onclick="return confirm('Mau di Hapus ?')" href="<?php echo e(url('/delete_kategori/'.$kategori->id.'/delete')); ?>" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash-o"></i> Delete </a>
							</td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("content.layouts", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Project4\resources\views/content/kategori/data_kategori.blade.php ENDPATH**/ ?>