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
                                <tr>
                                    <td>gordonramzi</td>
                                    <td>Ramonridwan@protonmail.com</td>
                                    <td>Ramon Ridwan</td>
                                    <td>Laki-laki</td>
                                    <td>Blitar</td>
                                    <td>081234526723</td>
                                    <td>
                                        <button class="btn btn-sm btn-warning ml-1" data-id="" type="button" data-toggle="modal" data-target="#editAnggota"><i class="fa fa-edit fa-fw"></i></button>
                                        <button class="btn btn-sm btn-danger ml-1" data-id="" type="button" data-toggle="modal" data-target="#hapusAnggota"><i class="fa fa-trash fa-fw"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>gordonramzi</td>
                                    <td>Ramonridwan@protonmail.com</td>
                                    <td>Ramon Ridwan</td>
                                    <td>Laki-laki</td>
                                    <td>Blitar</td>
                                    <td>081234526723</td>
                                    <td>
                                        <button class="btn btn-sm btn-warning ml-1 mt-1" data-id="" type="button" data-toggle="modal" data-target="#editAnggota"><i class="fa fa-edit fa-fw"></i></button>
                                        <button class="btn btn-sm btn-danger ml-1 mt-1" data-id="" type="button" data-toggle="modal" data-target="#hapusAnggota"><i class="fa fa-trash fa-fw"></i></button>
                                    </td>
                                </tr>
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
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="username">Username Anggota</label>
                                    <input type="text" name="" class="form-control" placeholder="Masukkan Username" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Anggota</label>
                                    <input type="email" name="" class="form-control" placeholder="Masukkan Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password Anggota</label>
                                    <input type="password" name="" class="form-control" placeholder="Masukkan Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Anggota</label>
                                    <input type="text" name="" class="form-control" placeholder="Masukkan Nama" required></input>
                                </div>
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input ml-4" type="radio" name="inlineRadioOptions" id="laki" value="1">
                                        <label class="form-check-label" for="laki">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input ml-4" type="radio" name="inlineRadioOptions" id="perempuan" value="2">
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <br>
                                    <input type="text" name="" class="form-control" placeholder="Masukkan Alamat" required>
                                </div>
                                <div class="form-group">
                                    <label for="telp">No Telepon</label>
                                    <br>
                                    <input type="number" name="" class="form-control" placeholder="Masukkan No Telepon" required>
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
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="username">Username Anggota</label>
                                    <input type="text" name="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Anggota</label>
                                    <input type="email" name="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password Anggota</label>
                                    <input type="password" name="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Anggota</label>
                                    <input type="text" name="" class="form-control" required></input>
                                </div>
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input ml-4" type="radio" name="inlineRadioOptions" id="laki" value="1">
                                        <label class="form-check-label" for="laki">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input ml-4" type="radio" name="inlineRadioOptions" id="perempuan" value="2">
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <br>
                                    <input type="text" name="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="telp">No Telepon</label>
                                    <br>
                                    <input type="number" name="" class="form-control" required>
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
                            <div class="modal-footer">
                                <input type="hidden" id="" name="">
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
</script>