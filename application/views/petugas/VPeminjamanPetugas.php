<div class="container-fluid mt-5">
    <!-- Custom page header alternative example-->
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="mr-4 mb-3 mb-sm-0">
            <h6 class="mb-0">Petugas Management Peminjaman</h6>
        </div>
    </div>
    <div class="mb-5 font-weight-bold">
        <h2>Peminjaman
            <button class="btn btn-primary btn-sm float-right font-weight-bold" type="button" data-id="" type="button" data-toggle="modal" data-target="#tambahPeminjaman"><i class="fa fa-plus fa-fw mr-2"></i>Tambah Peminjaman</button>
        </h2>
    </div>
    <div class="row mt-4">
        <!-- Daftar Peminjaman -->
        <div class="col-xl-12 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTablePeminjaman" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID Peminjaman</th>
                                    <th>Username Anggota</th>
                                    <th>Petugas</th>
                                    <th>Judul Buku</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Status</th>
                                    <th width="16%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>29840981</td>
                                    <td>gordonramzi</td>
                                    <td>Supardi </td>
                                    <td>Kambing Betina</td>
                                    <td>12/08/2019</td>
                                    <td>12/08/2020</td>
                                    <td class="text-center">
                                        <div class="badge badge-success badge-pill">Selesai</div>
                                    </td>
                                    <td>
                                        <button class="btn btn-green btn-sm btnChangeStatus m-1" data-id='' type="button" data-toggle="modal" data-target="#statusModalAktif"><i class="fa fa-check"></i></button>
                                        <button class="btn btn-sm btn-warning m-1" data-id="" type="button" data-toggle="modal" data-target="#editPeminjaman"><i class="fa fa-edit fa-fw"></i></button>
                                        <button class="btn btn-sm btn-danger m-1" data-id="" type="button" data-toggle="modal" data-target="#hapusPeminjaman"><i class="fa fa-trash fa-fw"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Modal Tambah Peminjaman -->
                <div class="modal fade" id="tambahPeminjaman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Peminjaman</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="anggota">Username Anggota</label>
                                    <br>
                                    <select name="" class="form-control select-modal-width">
                                        <option value="1">DEDY</option>
                                        <option value="2">LALALALA</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="petugas">Username Petugas</label>
                                    <br>
                                    <select name="" class="form-control select-modal-width">
                                        <option value="1">DEDY</option>
                                        <option value="2">LALALALA</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="judul">Judul Buku</label>
                                    <br>
                                    <select name="" class="form-control js-example-basic-multiple select-modal-width" multiple="multiple">
                                        <option value="1">Kambing Betina</option>
                                        <option value="2">Sapi Jantan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tglPinjam">Tanggal Peminjaman</label>
                                    <input type="text" name="" class="form-control" placeholder="Tanggal Peminjaman" id="tglPinjam" required>
                                </div>
                                <div class="form-group">
                                    <label for="tglKembali">Tanggal Pengembalian</label>
                                    <input type="text" name="" class="form-control" placeholder="Tanggal Peminjaman" id="tglKembali" required>
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

                <!-- Modal Edit Peminjaman -->
                <div class="modal fade" id="editPeminjaman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Peminjaman</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="anggota">Username Anggota</label>
                                    <br>
                                    <select name="" class="form-control select-modal-width">
                                        <option value="1">DEDY</option>
                                        <option value="2">LALALALA</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="petugas">Username Petugas</label>
                                    <br>
                                    <select name="" class="form-control select-modal-width">
                                        <option value="1">DEDY</option>
                                        <option value="2">LALALALA</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="judul">Judul Buku</label>
                                    <br>
                                    <select name="" class="form-control js-example-basic-multiple select-modal-width" multiple="multiple">
                                        <option value="1">Kambing Betina</option>
                                        <option value="2">Sapi Jantan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="editTglPinjam">Tanggal Peminjaman</label>
                                    <input type="text" name="" class="form-control" id="editTglPinjam">
                                </div>
                                <div class="form-group">
                                    <label for="editTglKembali">Tanggal Pengembalian</label>
                                    <input type="text" name="" class="form-control" id="editTglKembali">
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <br>
                                    <select class="form-control select-modal-width">
                                        <option value="0">Pinjam</option>
                                        <option value="1">Selesai</option>
                                    </select>
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
                <div class="modal fade" id="hapusPeminjaman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Peminjaman</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>Apakah anda yakin ingin menghapus Peminjaman ini ?</h5>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="" name="">
                                <button type="button" class="btn btn-primary-soft" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-trash mr-1"></i>Hapus Peminjaman</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="modal fade" id="statusModalAktif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Status</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= site_url('klien/changeStatus') ?>" method="post">
                                <div class="modal-body">
                                    <h5>Apakah anda yakin ingin memverifikasi peminjaman ini  ?</h5>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" id="idKlien_changeStatus" name="ID_KLIEN">
                                    <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                    <button type="submit" class="btn btn-success"><i class="fa fa-check mr-1"></i>Ubah Status</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end modal -->

            </div>
        </div>
    </div>
</div>

<script>
    $().ready(function() {
        var table = $('#dataTablePeminjaman').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
</script>
<script type="text/javascript">
    //datepicker tambah peminjaman
    $('#tglPinjam').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });

    //datepicker taambah peminjaman
    $('#tglKembali').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
    
    //dp edit peminjaman
    $('#editTglPinjam').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });

    //datepicker edit peminjaman
    $('#editTglKembali').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
</script>