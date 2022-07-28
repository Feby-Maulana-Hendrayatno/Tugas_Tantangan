@extends("template.layout")

@section("page_title", "DATA SKD")

@section("page_content")
<div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit Surat Keterangan Tidak Mampu</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
                    <form action="/sktm/update/{{$sktm->id}}" method="post">
                        @csrf
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Nama Lengkap</label>
                                        <input type="text" name="nama" id="name" class="form-control" placeholder="name"  value="{{$sktm->nama}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="nik">NIK</label>
                                        <input type="teks" name="nik" id="nik" class="form-control" placeholder="NIK"  value="{{$sktm->nik}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                                        <input type="teks" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Tempat Lahir"  value="{{$sktm->tempat_lahir}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Jenis Kelamin</label>
                                        <select id="nama" name="jenis_kelamin"  class="col-lg-12 col-lg-3 offset-xs-1 col-lg-6 form-control" value="{{$sktm->jenis_kelamin}}">
                                            <option selected>Pilih Jenis Kelamin</option>
                                            <option value="P">Perempuan</option>
                                            <option value="L">Laki-laki</option>
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" id="input-first-name" class="form-control" placeholder="Tanggal Lahir"  value="{{$sktm->tanggal_lahir}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Kewarganegaraan</label>
                                        <input type="text" name="kewarganegaraan" id="input-last-name" class="form-control" placeholder="Kewarganegaraan"  value="{{$sktm->kewarganegaraan}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Agama</label>
                                        <select id="nama" name="agama"  class="col-lg-12 col-lg-3 offset-xs-1 col-lg-6 form-control" value="{{$sktm->agama}}">
                                        <option selected>Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Pekerjaan</label>
                                        <!-- <input type="texr" name="pekerjaan" id="input-last-name" class="form-control" placeholder="Pekerjaan"  value="{{$sktm->pekerjaan}}"> -->
                                        <select id="nama" name="pekerjaan"  class="col-lg-12 col-lg-3 offset-xs-1 col-lg-6 form-control  ">
                      <option selected>Pilih Pekerjaan</option>
                    <option value="IRT">Ibu Rumah Tangga</option>
                    <option value="Pedagang">Pedagang</option>
                    <option value="Wirausaha">Wirausaha</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="Karyawan">Karyawan</option>
                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                    <option value="PNS">Pegawai Negeri Sipil</option>
                    <option value="Guru">Guru</option>
                    <option value="tidak bekerja">Tidak Bekerja</option>
                    <option value="Lainnya">Lainnya</option>
                    </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Alamat</label>
                                        <input type="text" name="alamat" id="input-last-name" class="form-control" placeholder="Alamat"  value="{{$sktm->alamat}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Status Kawin</label>
                                        <!-- <input type="texr" name="status_kawin" id="input-last-name" class="form-control" placeholder="Status Kawin"  value="{{$sktm->status_kawin}}"> -->
                                        <select id="status_kawin" name="status_kawin"  class="col-lg-12 col-lg-3 offset-xs-1 col-lg-6 form-control  ">
                                <option selected>Pilih Status Kawin</option>
                                <option value="Kawin">Kawin</option>
                                <option value="Belum Kawin">Belum Kawin</option>
                                </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Nohp</label>
                                        <input type="text" name="nohp" id="input-last-name" class="form-control" placeholder="nohp" value="{{$sktm->nohp}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Keterangan</label>
                                        <!-- <input type="text" name="keterangan" id="input-last-name" class="form-control" placeholder="Keterangan" value="{{$sktm->keterangan}}"> -->
                                        <select id="nama" name="keterangan"  class="col-lg-12 col-lg-3 offset-xs-1 col-lg-6 form-control  ">
                            <option selected>Pilih Keterangan</option>
                            <option value="Pembuatan BPJS">Pembuatan BPJS</option>
                            <option value="Keringan Biaya Rumah Sakit">Keringan Biaya Rumah Sakit</option>
                            <option value="Beasiswa">Beasiswa</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                                    </div>
                                    <div class="submit-btn-area">
                                        <button id="form_submit" type="submit">Simpan <i class="ti-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                  </div>
                </div>
                <hr class="my-4" />
            </div>
          </div>
@endsection
