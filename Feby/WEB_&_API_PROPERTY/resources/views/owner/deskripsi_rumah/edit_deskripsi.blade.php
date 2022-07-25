@extends('layouts.template_owner')

@section('header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"> Edit Deskripsi Rumah</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/owner/dashboard') }}"> Dashboard </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ url('/owner/deskripsi_rumah/deskripsi') }}"> Data Deskripsi Rumah </a>
                    </li>
                    <li class="breadcrumb-item active"> Edit Data Murid </li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('/owner/deskripsi_rumah/deskripsi') }}">
                            <h3 class="card-title">
                                <span class="btn btn-secondary col fileinput-button dz-clickable">
                                    <i class="fa fa-reply"></i>
                                    <span>Kembali</span>
                                </span>
                            </h3>
                        </a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/owner/deskripsi_rumah/simpan" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $edit->id }}">
                            <input type="hidden" name="oldGambar" value="{{ $edit->foto }}">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id"> Perumahan </label>
                                    <select required class="form-control" style="width: 100%;" name="perumahan_id">
                                        @foreach ($perumahan as $perum)
                                            <option value="{{ $perum->id }}"  {{ $perum->id == $edit->alamat_id ? 'selected' : '' }}>
                                                {{ $perum->nama_perumahan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="id"> Alamat </label>
                                    <select required class="form-control" style="width: 100%;" name="alamat_id">
                                        @foreach ($alamat as $almt)
                                            <option value="{{ $almt->id }}" {{ $almt->id == $edit->alamat_id ? 'selected' : '' }}>
                                                {{ $almt->alamat }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Type</label>
                                    <input type="text" name="type" class="form-control" id=""
                                        placeholder="Masukan Type Rumah" required value="{{ $edit->type }}">
                                </div>
                                <div class="form-group">
                                    <label for="foto">Foto</label>
                                    @if ($edit->foto)
                                        <img class="img-preview img-fluid mb-3 col-sm-5 d-block"
                                            src="{{ url('storage/' . $edit->foto) }}">
                                    @else
                                        <img class="img-preview img-fluid mb-3 col-sm-5">
                                    @endif
                                    <input type="file" name="foto" class="form-control" id="foto"
                                        placeholder="Masukan Foto/Gambar" onchange="viewImage()">
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="number" name="harga" class="form-control" id=""
                                        placeholder="Masukan Harga Rumah" required value="{{ $edit->harga }}">
                                </div>
                                <div class="form-group">
                                    <label>Stock</label>
                                    <input type="number" name="stock" class="form-control" id=""
                                        placeholder="Masukan Stock Rumah" required value="{{ $edit->stock }}">
                                </div>
                                <div class="form-group">
                                    <label>Kusen</label>
                                    <input type="text" name="kusen" class="form-control" id=""
                                        placeholder="Jenis kusen Rumah" required value="{{ $edit->kusen }}">
                                </div>
                                <div class="form-group">
                                    <label>Pintu</label>
                                    <input type="text" name="pintu" class="form-control" id=""
                                        placeholder="Jenis Pintu Rumah" required value="{{ $edit->pintu }}">
                                </div>
                                <div class="form-group">
                                    <label>Jendela</label>
                                    <input type="text" name="jendela" class="form-control" id=""
                                        placeholder="Jenis Jendela Rumah" required value="{{ $edit->jendela }}">
                                </div>
                                <div class="form-group">
                                    <label>Plafond</label>
                                    <input type="text" name="plafond" class="form-control" id=""
                                        placeholder="Jenis Plafond Rumah" required value="{{ $edit->plafond }}">
                                </div>
                                <div class="form-group">
                                    <label>Air</label>
                                    <input type="text" name="air" class="form-control" id=""
                                        placeholder="Jenis Air yabg digunakan" required value="{{ $edit->air }}">
                                </div>
                                <div class="form-group">
                                    <label>Listrik</label>
                                    <input type="text" name="listrik" class="form-control" id=""
                                        placeholder="Besaran Watt yang digunakan" required value="{{ $edit->listrik }}">
                                </div>
                                <div class="form-group">
                                    <label>Pondasi</label>
                                    <input type="text" name="pondasi" class="form-control" id=""
                                        placeholder="Jenis Pondasi Rumah" required value="{{ $edit->pondasi }}">
                                </div>
                                <div class="form-group">
                                    <label>Dinding</label>
                                    <input type="text" name="dinding" class="form-control" id=""
                                        placeholder="Jenis Dinding Rumah" required value="{{ $edit->dinding }}">
                                </div>
                                <div class="form-group">
                                    <label>Lantai</label>
                                    <input type="text" name="lantai" class="form-control" id=""
                                        placeholder="Jenis Lantai Rumah" required value="{{ $edit->lantai }}">
                                </div>
                                <div class="form-group">
                                    <label>Atap</label>
                                    <input type="text" name="atap" class="form-control" id=""
                                        placeholder="Jenis Atap Rumah" required value="{{ $edit->atap }}">
                                </div>
                                <div class="form-group">
                                    <label>WC</label>
                                    <input type="text" name="wc" class="form-control" id=""
                                        placeholder="Jenis WC yang digunakan" required value="{{ $edit->wc }}">
                                </div>
                                <br>
                                <div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
