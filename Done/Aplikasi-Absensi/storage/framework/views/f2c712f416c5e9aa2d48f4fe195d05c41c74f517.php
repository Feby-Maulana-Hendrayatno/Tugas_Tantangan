<?php $__env->startSection("page_title", "Dashboard"); ?>

<?php $__env->startSection("page_header"); ?> <i class="fa fa-dashboard"></i> Dashboard <?php $__env->stopSection(); ?>

<?php $__env->startSection("page_breadcrumb"); ?>

<ol class="breadcrumb">
	<li><a href="<?php echo e(url('/page/dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
	<li class="active">Dashboard</li>
</ol>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_content"); ?>

<?php if(session("sukses")): ?>
<div class="row">
	<div class="col-md-12">
		<div class="alert alert-success" role="alert">
			<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<strong>Berhasil!</strong> <?php echo e(session("sukses")); ?>.
		</div>
	</div>
</div>
<?php endif; ?>

<div class="row">
	<div class="col-xs-12">
		<div class="box box-info">
			<div class="box-header">
				<h3 class="box-title">Selamat Datang <b><?php echo e(Auth::user()->name); ?> </b></h3>
			</div>
			<div class="box-body">
				<p>
					di <strong><?php echo e(config("app.myapp")); ?> Siswa Berbasis Web.</strong>. Silahkan pilih menu untuk memulai program.
				</p>

			</div>
		</div>
	</div>
</div>

<?php if(Auth::user()->role == 1): ?>
<div class="row">
	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-aqua">
			<div class="inner">
				<h3><?php echo e($total_guru); ?></h3>

				<p>Data Guru</p>
			</div>
			<div class="icon">
				<i class="fa fa-users"></i>
			</div>
			<a href="<?php echo e(url('/page/guru')); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div>
	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-aqua">
			<div class="inner">
				<h3><?php echo e($total_kelas); ?></h3>

				<p>Data Kelas</p>
			</div>
			<div class="icon">
				<i class="fa fa-map-marker"></i>
			</div>
			<a href="<?php echo e(url('/page/kelas')); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div>
	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-aqua">
			<div class="inner">
				<h3><?php echo e($total_siswa); ?></h3>

				<p>Data Siswa</p>
			</div>
			<div class="icon">
				<i class="fa fa-user"></i>
			</div>
			<a href="<?php echo e(url('/page/siswa')); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div>
	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-aqua">
			<div class="inner">
				<h3><?php echo e($total_guru_piket); ?></h3>

				<p>Data Guru Piket</p>
			</div>
			<div class="icon">
				<i class="fa fa-pencil"></i>
			</div>
			<a href="<?php echo e(url('/page/guru_piket')); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div>
</div>
<?php elseif(Auth::user()->role == 2): ?>
<div class="row">
	<div class="col-md-6">
		<div class="box box-info">
			<div class="box-header">
				<h3 class="box-title"><i class="fa fa-pencil"></i> Data Absen</h3>
			</div>
			<div class="box-body">
				<div id="chart"></div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="box box-info">
			<div class="box-header">
				<div class="row">
					<div class="col-md-6">
						<h3 class="box-title"><i class="fa fa-map-marker"></i> Siswa yang Belum Absen</h3>
					</div>
					<div class="col-md-6">
						<div class="pull-right">
							<a href="<?php echo e(url('/page/tambah_absen')); ?>" class="btn btn-success btn-sm">
								<i class="fa fa-sign-in"></i> Pergi ke menu Absen
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th class="text-center">No.</th>
							<th class="text-center">NIS</th>
							<th>Nama</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 0 ?>

						<?php $__currentLoopData = $data_siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php
						$date = date("Y-m-d");
						$absen = DB::table("absen")
						->where("nis_siswa", $siswa->nis)
						->where("absen_date", $date)
						->first();
						?>
						<?php if($absen == ""): ?>
						<tr>
							<td class="text-center"><?php echo e(++$no); ?>.</td>
							<td class="text-center"><?php echo e($siswa->nis); ?></td>
							<td><?php echo e($siswa->nama); ?></td>
						</tr>
						<?php endif; ?>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_scripts"); ?>
<script src="<?php echo e(url('/public/js/chart.js')); ?>"></script>

<script type="text/javascript">
	Highcharts.chart('chart', {
		chart: {
			type: 'column'
		},
		title: {
			text: 'Rating Absen '
		},
		xAxis: {
			categories: [
			'Hadir',
			'Sakit',
			'Izin',
			'Alfa',
			'Terlambat'
			],
			crosshair: true
		},
		yAxis: {
			min: 0,
			title: {
				text: 'Total Absen'
			}
		},
		tooltip: {
			headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
			pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
			'<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
			footerFormat: '</table>',
			shared: true,
			useHTML: true
		},
		plotOptions: {
			column: {
				pointPadding: 0.2,
				borderWidth: 0
			}
		},
		<?php
		$hadir = DB::table("absen")->where("absen_status", 1)->count();
		$sakit = DB::table("absen")->where("absen_status", 2)->count();
		$izin = DB::table("absen")->where("absen_status", 3)->count();
		$alfa = DB::table("absen")->where("absen_status", 4)->count();
		$terlambat = DB::table("absen")->where("absen_status", 5)->count();
		?>
		series: [{
			name: 'Absen',
			data: [<?php echo e($hadir); ?>, <?php echo e($sakit); ?>, <?php echo e($izin); ?>, <?php echo e($alfa); ?>, <?php echo e($terlambat); ?>]

		}]
	});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("content.page.layouts.theme", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp-new\htdocs\Tugas-Tantangan-Komputer\Aplikasi-Absensi\resources\views/content/page/dashboard.blade.php ENDPATH**/ ?>