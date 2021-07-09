<div class="container-fluid mt-5">
    <!-- Custom page header alternative example-->
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="mr-4 mb-3 mb-sm-0">
            <h6 class="mb-0">Petugas Management Sanksi</h6>
        </div>
    </div>
    <div class="mb-5 font-weight-bold">
        <h2>Sanksi
            <button class="btn btn-primary btn-sm float-right font-weight-bold" type="button" data-id="" type="button" data-toggle="modal" data-target="#tambahSanksi"><i class="fa fa-plus fa-fw mr-2"></i>Tambah Sanksi</button>
        </h2>
    </div>
    <div class="row mt-4">
        <!-- Daftar Sanksi -->
        <div class="col-xl-12 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTablePembayaran" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID Sanksi</th>
                                    <th>Username Anggota</th>
                                    <th>Judul Buku</th>
                                    <th>Total Sanksi</th>
                                    <th>Status Pembayaran</th>
                                    <th width="12%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>29840981</td>
                                    <td>Gordon Ramzi</td>
                                    <td>Kambing Jantan</td>
                                    <td>Rp. 10000</td>
                                    <td class="text-center">
                                        <div class="badge badge-success badge-pill">Sudah Bayar</div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-warning m-1" data-id="" type="button" data-toggle="modal" data-target="#editSanksi"><i class="fa fa-edit fa-fw"></i></button>
                                        <button class="btn btn-sm btn-danger m-1" data-id="" type="button" data-toggle="modal" data-target="#hapusPembayaran"><i class="fa fa-trash fa-fw"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Modal Tambah Sanksi -->
                <div class="modal fade" id="tambahSanksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Sanksi</h5>
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
                                    <label for="judul">Judul Buku</label>
                                    <br>
                                    <select name="" class="form-control js-example-basic-multiple select-modal-width" multiple="multiple">
                                        <option value="1">Kambing Betina</option>
                                        <option value="2">Sapi Jantan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="total">Total Sanksi</label>
                                    <input type="text" name="" class="form-control" placeholder="Tanggal Sanksi" id="tglPinjam" required>
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
                <!-- Modal Edit Sanksi -->
                <div class="modal fade" id="editSanksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Transaksi</h5>
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
                                    <label for="judul">Judul Buku</label>
                                    <br>
                                    <select name="" class="form-control js-example-basic-multiple select-modal-width" multiple="multiple">
                                        <option value="1">Kambing Betina</option>
                                        <option value="2">Sapi Jantan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="total">Total Sanksi</label>
                                    <input type="text" name="" class="form-control" placeholder="Tanggal Sanksi" id="tglPinjam" required>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <br>
                                    <select class="form-control select-modal-width">
                                        <option value="0">Belum Bayar</option>
                                        <option value="1">Sudah Bayar</option>
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
                <div class="modal fade" id="hapusPembayaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Pembayaran</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>Apakah anda yakin ingin menghapus Pembayaran ini ?</h5>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="" name="">
                                <button type="button" class="btn btn-primary-soft" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-trash mr-1"></i>Hapus Pembayaran</button>
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
        var table = $('#dataTablePembayaran').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
</script>