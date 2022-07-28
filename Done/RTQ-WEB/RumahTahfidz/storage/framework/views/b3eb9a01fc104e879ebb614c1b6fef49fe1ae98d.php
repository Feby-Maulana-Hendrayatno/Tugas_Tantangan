<?php $__env->startSection("app_title", "Role"); ?>

<?php $__env->startSection("app_content"); ?>

<section class="section">
    <div class="section-header">
        <h1>
            <?php echo $__env->yieldContent("app_title"); ?>
        </h1>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <i class="fa fa-plus"></i>
                        <span>Tambah Form Role</span>
                    </h4>
                </div>
                <form method="POST" action="<?php echo e(url('/app/sistem/role')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="keterangan"> Keterangan </label>
                            <input type="text" name="keterangan" class="form-control input-sm" id="keterangan" placeholder="Masukkan Keterangan">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button name="btn-tambah" class="btn btn-primary" type="submit">
                            <i class="fa fa-plus"></i> Tambah
                        </button>
                        <button name="btn-reset" class="btn btn-danger" type="reset">
                            <i class="fa fa-times"></i> Batal
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-8 col-md-6 col-sm-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <i class="fa fa-bars"></i>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="tampilData">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Data -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalEdit">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="fa fa-edit"></i>
                    <span>Edit Data</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id">
                <div class="form-group">
                    <label for="keterangan"> Keterangan </label>
                    <input type="text" name="keterangan" class="form-control input-sm" id="ket" placeholder="Masukkan Keterangan">
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <i class="fa fa-times"></i> Kembali
                </button>
                <button type="button" class="btn btn-success" id="btn-edit">
                    <i class="fa fa-save"></i> Simpan
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection("app_scripts"); ?>

<script type="text/javascript">

    function tampilData() {
        let empTable = document.getElementById("tampilData").getElementsByTagName("tbody")[0];
        empTable.innerHTML = "";
        $.ajax({
            url: "<?php echo e(url('')); ?>/api/role",
            type: "GET",
            success: function (response) {
                let no = 1;
                for (let key in response.data) {
                    if (response.data.hasOwnProperty(key)) {
                        let val = response.data[key];
                        let newRow = empTable.insertRow(-1);
                        let nomer = newRow.insertCell(0);
                        let namaCell = newRow.insertCell(1);
                        let aksiCell = newRow.insertCell(2);

                        nomer.innerHTML = no++;
                        namaCell.innerHTML = val['keterangan'];
                        aksiCell.innerHTML = '<button class="btn btn-warning" id="btnEdit" data-target="#modalEdit" data-toggle="modal" data-id="'+val['id']+'" data-keterangan="'+val['keterangan']+'"><i class="fa fa-edit"></i> Edit </button> &nbsp;'
                        aksiCell.innerHTML += '<button class="btn btn-danger" onclick="hapusData('+val['id']+')"><i class="fa fa-trash"></i> Hapus</button>'
                    }
                }
            }
        });
    }

    $(document).ready(function() {
        $("body").on('click', '#btnEdit', function() {
            let id = $(this).data('id');
            let ket = $(this).data('keterangan');

            $("#id").val(id)
            $("#ket").val(ket)
        });

        $("#btn-tambah").on('click', function() {
            let keterangan = $("#keterangan").val().trim();

            if (keterangan == "") {
                Swal.fire({
                    title : "Oops",
                    text : "Data Tidak Boleh Kosong",
                    icon : "error"
                })
            } else {
                $.ajax({
                    url : "<?php echo e(url('/api/role')); ?>",
                    type : "POST",
                    data : { keterangan : keterangan, _token: "<?php echo e(csrf_token()); ?>" },
                    success : function(response) {
                        if (response.status == true) {
                            $("#keterangan").val('')
                            tampilData()
                            Swal.fire({
                                title : "Berhasil",
                                text : "Berhasil di Tambahkan",
                                icon : "success"
                            })
                        } else {
                            Swal.fire({
                                title : "Oops",
                                text : "Data Gagal di Inputkan",
                                icon : "error"
                            })
                        }
                    }
                })
            }
        })

        $("#btn-edit").on('click', function() {
            let id = $("#id").val().trim();
            let keterangan = $("#ket").val().trim();

            if (keterangan == "") {
                Swal.fire({
                    title : "Oops",
                    text : "Data tidak boleh kosong",
                    icon : "error"
                })
            } else {
                $.ajax({
                    url : "<?php echo e(url('/api/role/')); ?>/" + id,
                    type : "POST",
                    data : { id : id, keterangan : keterangan, _token: "<?php echo e(csrf_token()); ?>", _method : "PUT" },
                    success : function(response) {
                        console.log(response)
                        if (response.status == true) {
                            $("#id").val('')
                            $("#ket").val('')
                            tampilData()
                            $("#modalEdit").modal('hide')
                            Swal.fire({
                                title : "Berhasil",
                                text : "Berhasil di Simpan",
                                icon : "success"
                            })
                        } else {
                            Swal.fire({
                                title : "Oops",
                                text : "Data Gagal di Simpan",
                                icon : "error"
                            })
                        }
                    }
                })
            }
        })
    })

    function hapusData(id)
    {
        Swal.fire({
            title : "Apakah Yakin ?",
            text : "Untuk Menghapus Data Ini",
            icon : "warning",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url : "<?php echo e(url('/api/role/')); ?>/" + id,
                    type : "POST",
                    data : { _token: "<?php echo e(csrf_token()); ?>", _method : "DELETE" },
                    success : function(response) {
                        console.log(response)
                        if (response.status == true) {
                            tampilData()
                            Swal.fire(
                                'Berhasil!',
                                'Data Berhasil di Hapus',
                                'success'
                                )
                        } else {
                            Swal.fire(
                                'Gagal!',
                                'Data Gagal di Hapus',
                                'error'
                                )
                        }
                    }
                })
            } else {

            }
        })
    }


    tampilData();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app.administrator.layouts.template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\FILE KULIAH\SEMESTER 4\TUGAS KULIAH TAHUN AJARAN 2021 - 2022\PROYEK 3\RTQ-WEB\RumahTahfidz\resources\views/app/administrator/role/v_index.blade.php ENDPATH**/ ?>