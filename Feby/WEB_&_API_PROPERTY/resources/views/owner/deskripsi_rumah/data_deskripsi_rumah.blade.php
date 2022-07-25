@extends('layouts.template_owner')

@section('title')
    Data Deskripsi Rumah
@stop

@section('header')

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"> Deskripsi Rumah</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/owner/dashboard') }}"> Dashboard </a>
                    </li>
                    <li class="breadcrumb-item active"> Deskripsi Rumah</li>
                </ol>
            </div>
        </div>
    </div>

@endsection

@section('alerts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('tambah_data'))
        <script>
            Swal.fire(
                'Data Berhasil di Tambahkan',
                '',
                'success'
            )
        </script>
    @elseif(session('update'))
        <script>
            Swal.fire(
                'Data Berhasil di Update',
                '',
                'success'
            )
        </script>
    @endif
@stop

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
                    <div class="card-header">
                        <a href="{{ url('/owner/deskripsi_rumah/tambah') }}">
                            <h3 class="card-title">
                                <span class="btn btn-success col fileinput-button dz-clickable">
                                    <i class="fas fa-plus"></i>
                                    <span>Tambah Deskripsi</span>
                                </span>
                            </h3>
                        </a>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">type</th>
                                    <th class="text-center">Stock</th>
                                    {{-- <th class="text-center">kusen</th> --}}
                                    <th class="text-center">listrik</th>
                                    <th class="text-center">pondasi</th>
                                    <th class="text-center">Harga</th>
                                    <th class="text-center">Foto</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 0 @endphp
                                @foreach ($deskripsi as $desk)
                                    @php
                                        $stok = $desk->stock - $stock_baru;
                                    @endphp
                                    @if ($stok >= 1)
                                    <tr>
                                        <td class="text-center">{{ ++$no }}</td>
                                        <td>{{ $desk->type }}</td>
                                        <td>{{ $desk->stock }}</td>
                                        <td>{{ $desk->listrik }}</td>
                                        <td>{{ $desk->pondasi }}</td>
                                        <td>{{ currency_IDR($desk->harga) }}</td>
                                        <td>
                                            <img src="{{ url('storage/' . $desk->foto) }}" width="200">
                                        </td>
                                        <td class="text-center">
                                            <button onclick=" editDataDeskripsi({{ $desk->id }})" type="button"
                                                class="btn btn-success text-white btn-sm" data-toggle="modal"
                                                data-target="#modal-default-edit" title="Detail Data">
                                                <i class="fa fa-clipboard"> Detail</i>
                                            </button>
                                            <a href="/owner/deskripsi_rumah/edit/{{ encrypt($desk->id) }}"
                                                class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a href="/owner/deskripsi_rumah/paymentHarga/{{ $desk->id }}"
                                                class="btn btn-warning btn-sm">
                                                <i class="fas fa-monesy"></i> payment
                                            </a>
                                            <button id="deleteDeskripsi" data-id="{{ $desk->id }}"
                                                class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i> Hapus
                                            </button>
                                        </td>
                                    </tr>
                                    @else

                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- detail deskripsi_rumah --}}
                <div class="modal fade" id="modal-default-edit">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title">
                                    <i class="fa fa-clipboard"></i> Detail
                                </h4>
                            </div>
                            <div class="modal-body" id="modal-content-edit">
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" aria-label="OK"
                                    class="btn btn-social btn-success btn-flat btn-sm">
                                    <i class="fa fa-back"></i> OK
                                </button>
                                {{-- <button  type="button" class="btn btn-social btn-success btn-flat btn-sm" title="Kembali">
                            <i class="fa fa-back"></i> Kembali
                        </button> --}}
                            </div>

                        </div>
                    </div>
                </div>
                <!-- END -->

            </div>
        </div>
    </div>



@endsection


@section('scripts_js')
    <script type="text/javascript">
        function editDataDeskripsi(id) {
            $.ajax({
                url: "{{ url('/owner/deskripsi_rumah/detail_deskripsi') }}",
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
            $('body').on('click', '#deleteDeskripsi', function() {
                console.log('Ok');
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
                            "<form method=\"POST\" action=\"{{ url('/owner/deskripsi_rumah/hapus/') }}/" +
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
