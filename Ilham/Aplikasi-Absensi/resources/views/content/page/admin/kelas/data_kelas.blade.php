@extends("content.page.layouts.theme")

@section("page_title", "Data Kelas")

@section("page_header")
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-info"><i class="fa fa-plus"></i> Tambah Data </button>
@stop

@section("page_breadcrumb")

<ol class="breadcrumb">
	<li><a href="{{ url('/page/dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li class="active">Data Kelas</li>
</ol>

@stop

@section("page_scripts")

<script type="text/javascript">
	function edit_kelas(id) {
		$.ajax({
			url : "{{ url('/page/edit_data_kelas') }}",
			type : "GET",
			data : { id : id },
			success : function(data) {
				$("#modal-content").html(data);
				return true;
			}
		});
	}
</script>

@endsection


@section("page_content")

@if(session("sukses"))
<div class="row">
	<div class="col-md-12">
		<div class="alert alert-success" role="alert">
			<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<strong>Berhasil!</strong> {{ session("sukses") }}.
		</div>
	</div>
</div>
@endif

@if(session("error"))
<div class="row">
	<div class="col-md-12">
		<div class="alert alert-danger" role="alert">
			<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<strong>Gagal!</strong> {{ session("error") }}.
		</div>
	</div>
</div>
@endif

@if(count($errors) > 0)
<div class="row">
	<div class="col-md-12">
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>
					{{ $error }}
				</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>
@endif

<div class="row">
	<div class="col-xs-12">
		<div class="box box-info">
			<div class="box-header">
				<h3 class="box-title"><i class="fa fa-bars"></i> Data Kelas </h3>
			</div>
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th class="text-center">No.</th>
							<th class="text-center">Nama Kelas</th>
							<th>Nama Wali Kelas</th>
							<th class="text-center">Jumlah Siswa</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@php $no = 0 @endphp

						@foreach($data_kelas as $kelas)
						<tr>
							<td class="text-center">{{ ++$no }}.</td>
							<td class="text-center">{{ $kelas->nama_kelas }}</td>
							<td>{{ $kelas->guru->nama }}</td>
							<td class="text-center">
								<?php
									$jumlah_siswa = DB::table("siswa")
												->where("id_kelas", $kelas->id)
												->count();
									echo $jumlah_siswa;
								?>
							</td>
							<td class="text-center">
								@if(count($kelas->siswa) > 0)
								<button disabled onclick="edit_kelas({{$kelas->id}})" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-warning">
									<i class="fa fa-pencil"></i> Edit
								</button>
								<button disabled class="btn btn-danger btn-sm">
									<i class="fa fa-trash-o"></i> Hapus
								</button>
								@else
								<button onclick="edit_kelas({{$kelas->id}})" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-warning">
									<i class="fa fa-pencil"></i> Edit
								</button>
								<a onclick="return confirm('Yakin ? Ingin Menghapus Data ?')" href="{{ url('/page/hapus_data_kelas/'.$kelas->id) }}" class="btn btn-danger btn-sm">
									<i class="fa fa-trash-o"></i> Hapus
								</a>
								@endif
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal-info">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Data</h4>
			</div>
			<form method="POST" action="{{ url('/page/simpan_data_kelas') }}">
				{{ csrf_field() }}
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label"> Nama Kelas </label>
								<input type="text" class="form-control" name="nama_kelas" placeholder="Masukkan Nama Kelas" autocomplete="off">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label"> Nama Wali Kelas </label>
								<select class="form-control" name="nip_wali_kelas">
									<option value="" disabled selected>- Pilih -</option>
									@foreach($data_guru as $guru)
										@if($guru->kelas == "")
											<option value="{{ $guru->nip }}">
												{{ $guru->nama }}
										</option>
										@endif
									@endforeach
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-sign-out"></i> Close</button>
					<button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah </button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="modal-warning">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title"><i class="fa fa-pencil"></i> Edit Data</h4>
			</div>
			<form method="POST" action="{{ url('/page/update_data_kelas') }}">
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				<div class="modal-body" id="modal-content">

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-sign-out"></i> Close</button>
					<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan </button>
				</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

@endsection
