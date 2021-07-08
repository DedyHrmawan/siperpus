<div class="container-fluid mt-5">
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="mr-4 mb-3 mb-sm-0">
            <h6 class="mb-0">Admin Management Anggota</h6>
        </div>
    </div>
    <div class="mb-5 font-weight-bold">
        <h2>Anggota
            <button class="btn btn-primary btn-sm float-right font-weight-bold" type="button" data-id="" type="button" data-toggle="modal" data-target="#tambahAnggota"><i class="fa fa-plus fa-fw mr-2"></i>Tambah Anggota</button>
        </h2>
    </div>
    <div class="row mt-4">
        <!-- Daftar Anggota -->
        <div class="col-xl-12 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTableAnggota" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Username Anggota</th>
                                    <th>Email Anggota</th>
                                    <th>Nama Anggota</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>No telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($anggotas as $item) {
                                    $jk = ($item->JK_ANGGOTA == "1" ? "Laki-Laki" : "Perempuan");
                                    echo '
                                            <tr>
                                                <td>' . $item->USERNAME_ANGGOTA . '</td>
                                                <td>' . $item->EMAIL_ANGGOTA . '</td>
                                                <td>' . $item->NAMA_ANGGOTA . '</td>
                                                <td>' . $jk . '</td>
                                                <td>' . $item->ALAMAT_ANGGOTA . '</td>
                                                <td>' . $item->TELP_ANGGOTA . '</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning ml-1 mdlEdit" data-id="' . $item->USERNAME_ANGGOTA . '" type="button" data-toggle="modal" data-target="#editAnggota"><i class="fa fa-edit fa-fw"></i></button>
                                                    <button class="btn btn-sm btn-danger ml-1 mdlHapus" data-id="' . $item->USERNAME_ANGGOTA . '" type="button" data-toggle="modal" data-target="#hapusAnggota"><i class="fa fa-trash fa-fw"></i></button>
                                                </td>
                                            </tr>
                                        ';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Modal Tambah Anggota -->
                <div class="modal fade" id="tambahAnggota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Anggota</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="<?= site_url('anggota/store') ?>">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="username">Username Anggota</label>
                                        <input type="text" name="USERNAME_ANGGOTA" class="form-control" placeholder="Masukkan Username" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Anggota</label>
                                        <input type="email" name="EMAIL_ANGGOTA" class="form-control" placeholder="Masukkan Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password Anggota</label>
                                        <input type="password" name="PASSWORD_ANGGOTA" class="form-control" placeholder="Masukkan Password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama Anggota</label>
                                        <input type="text" name="NAMA_ANGGOTA" class="form-control" placeholder="Masukkan Nama" required></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="jk">Jenis Kelamin</label>
                                        <br>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="laki" name="JK_ANGGOTA" class="custom-control-input" id="laki" value="1">
                                            <label class="custom-control-label" for="laki">Laki-Laki</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="perempuan" name="JK_ANGGOTA" class="custom-control-input" id="perempuan" value="2">
                                            <label class="custom-control-label" for="perempuan">Perempuan</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <br>
                                        <input type="text" name="ALAMAT_ANGGOTA" class="form-control" placeholder="Masukkan Alamat" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="telp">No Telepon</label>
                                        <br>
                                        <input type="number" name="TELP_ANGGOTA" class="form-control" placeholder="Masukkan No Telepon" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary-soft" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check mr-1"></i>Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal Edit Anggota -->
                <div class="modal fade" id="editAnggota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Anggota</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="<?= site_url('anggota/edit') ?>">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="username">Username Anggota</label>
                                        <input type="text" name="USERNAME_ANGGOTA" id="mdlEdit_username" class="form-control" placeholder="Masukkan Username" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Anggota</label>
                                        <input type="email" name="EMAIL_ANGGOTA" id="mdlEdit_email" class="form-control" placeholder="Masukkan Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password Anggota</label>
                                        <input type="password" name="PASSWORD_ANGGOTA" id="mdlEdit_password" class="form-control" placeholder="Masukkan Password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama Anggota</label>
                                        <input type="text" name="NAMA_ANGGOTA" id="mdlEdit_anggota" class="form-control" placeholder="Masukkan Nama" required></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="jk">Jenis Kelamin</label>
                                        <br>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="JK_ANGGOTA" class="custom-control-input" id="mdlEdit_jk_laki" value="1">
                                            <label class="custom-control-label" for="mdlEdit_jk_laki">Laki-Laki</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="JK_ANGGOTA" class="custom-control-input" id="mdlEdit_jk_perempuan" value="2">
                                            <label class="custom-control-label" for="mdlEdit_jk_perempuan">Perempuan</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <br>
                                        <input type="text" name="ALAMAT_ANGGOTA" id="mdlEdit_alamat" class="form-control" placeholder="Masukkan Alamat" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="telp">No Telepon</label>
                                        <br>
                                        <input type="number" name="TELP_ANGGOTA" id="mdlEdit_telp" class="form-control" placeholder="Masukkan No Telepon" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" id="mdlEdit_id" name="USERNAMEOLD_ANGGOTA" />
                                    <button type="button" class="btn btn-primary-soft" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check mr-1"></i>Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal Hapus -->
                <div class="modal fade" id="hapusAnggota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Anggota</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>Apakah anda yakin ingin menghapus anggota ini ?</h5>
                            </div>
                            <form method="post" action="anggota/destroy">
                                <div class="modal-footer">
                                    <input type="hidden" id="mdlHapus_id" name="USERNAME_ANGGOTA">
                                    <button type="button" class="btn btn-primary-soft" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-trash mr-1"></i>Hapus Anggota</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    $().ready(function() {
        var table = $('#dataTableAnggota').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
    $('#dataTableAnggota tbody').on('click', '.mdlEdit', function() {
        const id = $(this).data('id')
        $.ajax({
            url: '<?= site_url('anggota/ajxDetail') ?>',
            method: 'post',
            data: {
                USERNAME_ANGGOTA: id
            },
            success: function(res) {
                res = JSON.parse(res)
                $('#mdlEdit_username').val(res.USERNAME_ANGGOTA)
                $('#mdlEdit_email').val(res.EMAIL_ANGGOTA)
                $('#mdlEdit_password').val(res.PASSWORD_ANGGOTA)
                $('#mdlEdit_anggota').val(res.NAMA_ANGGOTA)
                $('#mdlEdit_alamat').val(res.ALAMAT_ANGGOTA)
                $('#mdlEdit_telp').val(res.TELP_ANGGOTA)
                $('#mdlEdit_id').val(id)
                if (res.JK_ANGGOTA === "1")
                    $('#mdlEdit_jk_laki').prop('checked', true)
                else
                    $('#mdlEdit_jk_perempuan').prop('checked', true)
            }
        })
    })
    $('#dataTableAnggota tbody').on('click', '.mdlHapus', function() {
        const id = $(this).data('id')
        $('#mdlHapus_id').val(id)
    })
</script>