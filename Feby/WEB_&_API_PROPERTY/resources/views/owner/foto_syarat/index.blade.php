@extends('layouts.template_owner')

@section('title')
    Data Deskripsi Rumah
@stop

@section('header')
<script>
    function viewImage()
    {
        const image = document.querySelector('#imageyy');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"> Syarat</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/owner/dashboard') }}"> Dashboard </a>
                    </li>
                    <li class="breadcrumb-item active"> Syarat </li>
                </ol>
            </div>
        </div>
    </div>

@endsection

@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                @if (session('tambah'))
                    <div class="alert alert-success" role="alert">
                        {{ session('tambah') }}
                    </div>
                @elseif(session('update'))
                    <div class="alert alert-warning" role="alert">
                        {{ session('update') }}
                    </div>
                @endif
                <div class="card">
                    {{-- <div class="card-header">
                        <h3 class="card-title">
                            <button type="button" class="btn btn-success col fileinput-button dz-clickable"
                                data-toggle="modal" data-target="#modal-default" title="Tambah Data">
                                <i class="fa fa-plus"></i> Tambah Data
                            </button>
                        </h3>
                    </div> --}}
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Foto</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 0 @endphp
                                @foreach ($foto_syarat as $desk)
                                    <tr>
                                        <td class="text-center">{{ ++$no }}</td>
                                        <td>{{ $desk->nama_pengguna }}</td>
                                        <td>
                                            <img src="{{ url('storage/' . $desk->image) }}" width="200">
                                        </td>
                                        <td class="text-center">
                                            {{-- <button onclick="editSyarat({{ $desk->id }})" type="button" class="btn btn-success text-white btn-sm" data-toggle="modal" data-target="#modal-default-edit" title="Detail Data">
                                                <i class="fa fa-clipboard"> Edit </i>
                                            </button> --}}
                                            <button id="deleteSyarat" data-id="{{ $desk->id }}"
                                                class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i> Hapus
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Tambah Data -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">kemp
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ url('/owner/foto_syarat/tambah_foto_syarat') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Foto </label>
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <input multiple type="file" name="image[]" class="form-control" id="foto"
                                placeholder="Masukan Foto/Gambar" required onchange="viewImage()">
                            <div class="text-danger">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="reset" class="btn btn-social btn-warning btn-flat btn-sm" title="Reset">
                            <i class="fa fa-refresh"></i> Reset
                        </button>
                        <button type="submit" class="btn btn-social btn-success btn-flat bt-sm" title="Tambah Data">
                            <i class="fa fa-plus"></i> Tambah
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END -->


    <!-- Edit Data -->
    <div class="modal fade" id="modal-default-edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ url('/owner/foto_syarat/simpan') }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="modal-body" id="modal-content-edit">

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- END -->

@endsection

@section('scripts_js')

    <script type="text/javascript">
        function editSyarat(id) {
            $.ajax({
                url: "{{ url('/owner/foto_syarat/edit') }}",
                type: "GET",
                data: {
                    id: id
                },
                success: function(data) {
                    $("#modal-content-edit").html(data);
                    return true;
                }
            });
        }


        $(document).ready(function() {
            $("#table-1").dataTable();
            $('body').on('click', '#deleteSyarat', function() {
                let id = $(this).data('id');
                Swal.fire({
                    title: 'Anda Yakin Hapus File?',
                    text: "Data tidak bisa dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form_string =
                            "<form method=\"POST\" action=\"{{ url('/owner/foto_syarat/hapus/') }}/" +
                            id +
                            "\" accept-charset=\"UTF-8\"><input name=\"_method\" type=\"hidden\" value=\"DELETE\"><input name=\"_token\" type=\"hidden\" value=\"{{ csrf_token() }}\"></form>"
                        form = $(form_string)
                        form.appendTo('body');
                        form.submit();
                    } else {
                        Swal.fire('Selamat!', 'Data anda tidak jadi dihapus', 'error');
                    }
                })
            })
        })
    </script>
    <script src="{{ url('sweetalert/dist/sweetalert2.all.min.js') }}"></script>
    @if (session('message'))
        {!! session('message') !!}
    @endif

@endsection
