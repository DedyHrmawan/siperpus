<div class="container-fluid mt-5">
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="mr-4 mb-3 mb-sm-0">
            <h6 class="mb-0">Admin Management Petugas</h6>
        </div>
    </div>
    <div class="mb-5 font-weight-bold">
        <h2>Petugas
            <button class="btn btn-primary btn-sm float-right font-weight-bold" type="button" data-id="" type="button" data-toggle="modal" data-target="#tambahPetugas"><i class="fa fa-plus fa-fw mr-2"></i>Tambah Petugas</button>
        </h2>
    </div>
    <div class="row mt-4">
        <!-- Daftar Petugas -->
        <div class="col-xl-12 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTablePetugas" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Username Petugas</th>
                                    <th>Email Petugas</th>
                                    <th>Nama Petugas</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>No telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($petugass as $item){
                                        $jk = ($item->JK_PETUGAS == "1" ? "Laki-Laki" : "Perempuan");
                                        echo '
                                            <tr>
                                                <td>'.$item->USERNAME_PETUGAS.'</td>
                                                <td>'.$item->EMAIL_PETUGAS.'</td>
                                                <td>'.$item->NAMA_PETUGAS.'</td>
                                                <td>'.$jk.'</td>
                                                <td>'.$item->ALAMAT_PETUGAS.'</td>
                                                <td>'.$item->TELP_PETUGAS.'</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning ml-1 mdlEdit" data-id="'.$item->USERNAME_PETUGAS.'" type="button" data-toggle="modal" data-target="#editPetugas"><i class="fa fa-edit fa-fw"></i></button>
                                                    <button class="btn btn-sm btn-danger ml-1 mdlHapus" data-id="'.$item->USERNAME_PETUGAS.'" type="button" data-toggle="modal" data-target="#hapusPetugas"><i class="fa fa-trash fa-fw"></i></button>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Modal Tambah Petugas -->
                <div class="modal fade" id="tambahPetugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Petugas</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="<?= site_url('petugas/store')?>">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="username">Username Petugas</label>
                                    <input type="text" name="USERNAME_PETUGAS" class="form-control" placeholder="Masukkan Username" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Petugas</label>
                                    <input type="email" name="EMAIL_PETUGAS" class="form-control" placeholder="Masukkan Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password Petugas</label>
                                    <input type="password" name="PASSWORD_PETUGAS" class="form-control" placeholder="Masukkan Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Petugas</label>
                                    <input type="text" name="NAMA_PETUGAS" class="form-control" placeholder="Masukkan Nama" required></input>
                                </div>
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input ml-4" type="radio" name="JK_PETUGAS" id="laki" value="1">
                                        <label class="form-check-label" for="laki">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input ml-4" type="radio" name="JK_PETUGAS" id="perempuan" value="2">
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <br>
                                    <input type="text" name="ALAMAT_PETUGAS" class="form-control" placeholder="Masukkan Alamat" required>
                                </div>
                                <div class="form-group">
                                    <label for="telp">No Telepon</label>
                                    <br>
                                    <input type="number" name="TELP_PETUGAS" class="form-control" placeholder="Masukkan No Telepon" required>
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

                <!-- Modal Edit Petugas -->
                <div class="modal fade" id="editPetugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Petugas</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="<?= site_url('petugas/edit')?>">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="username">Username Petugas</label>
                                    <input type="text" name="USERNAME_PETUGAS" id="mdlEdit_username" class="form-control" placeholder="Masukkan Username" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Petugas</label>
                                    <input type="email" name="EMAIL_PETUGAS" id="mdlEdit_email" class="form-control" placeholder="Masukkan Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password Petugas</label>
                                    <input type="password" name="PASSWORD_PETUGAS" id="mdlEdit_password" class="form-control" placeholder="Masukkan Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Petugas</label>
                                    <input type="text" name="NAMA_PETUGAS" id="mdlEdit_petugas" class="form-control" placeholder="Masukkan Nama" required></input>
                                </div>
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input ml-4" type="radio" name="JK_PETUGAS" id="mdlEdit_jk_laki" value="1">
                                        <label class="form-check-label" for="laki">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input ml-4" type="radio" name="JK_PETUGAS" id="mdlEdit_jk_perempuan" value="2">
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <br>
                                    <input type="text" name="ALAMAT_PETUGAS" id="mdlEdit_alamat" class="form-control" placeholder="Masukkan Alamat" required>
                                </div>
                                <div class="form-group">
                                    <label for="telp">No Telepon</label>
                                    <br>
                                    <input type="number" name="TELP_PETUGAS" id="mdlEdit_telp" class="form-control" placeholder="Masukkan No Telepon" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="mdlEdit_id" name="USERNAMEOLD_PETUGAS" />
                                <button type="button" class="btn btn-primary-soft" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-check mr-1"></i>Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal Hapus -->
                <div class="modal fade" id="hapusPetugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Petugas</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="<?= site_url('petugas/destroy')?>">
                            <div class="modal-body">
                                <h5>Apakah anda yakin ingin menghapus Petugas ini ?</h5>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="mdlHapus_id" name="USERNAME_PETUGAS">
                                <button type="button" class="btn btn-primary-soft" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-trash mr-1"></i>Hapus Petugas</button>
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
        var table = $('#dataTablePetugas').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
    $('#dataTablePetugas tbody').on('click', '.mdlEdit', function(){
        const id = $(this).data('id')
        $.ajax({
            url: '<?= site_url('petugas/ajxDetail')?>',
            method: 'post',
            data: {USERNAME_PETUGAS: id},
            success: function(res){
                res = JSON.parse(res)
                $('#mdlEdit_username').val(res.USERNAME_PETUGAS)
                $('#mdlEdit_email').val(res.EMAIL_PETUGAS)
                $('#mdlEdit_password').val(res.PASSWORD_PETUGAS)
                $('#mdlEdit_petugas').val(res.NAMA_PETUGAS)
                $('#mdlEdit_alamat').val(res.ALAMAT_PETUGAS)
                $('#mdlEdit_telp').val(res.TELP_PETUGAS)
                $('#mdlEdit_id').val(id)
                if(res.JK_PETUGAS === "1")
                    $('#mdlEdit_jk_laki').prop('checked', true)
                else
                    $('#mdlEdit_jk_perempuan').prop('checked', true)
            }
        })
    })
    $('#dataTablePetugas tbody').on('click', '.mdlHapus', function(){
        const id = $(this).data('id')
        $('#mdlHapus_id').val(id)
    })
</script>