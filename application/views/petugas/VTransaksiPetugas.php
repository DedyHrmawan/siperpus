<div class="container-fluid mt-5">
    <!-- Custom page header alternative example-->
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="mr-4 mb-3 mb-sm-0">
            <h6 class="mb-0">Petugas Management Transaksi</h6>
        </div>
    </div>
    <div class="mb-5 font-weight-bold">
        <h2>Transaksi
            <button class="btn btn-primary btn-sm float-right font-weight-bold" type="button" data-id="" type="button" data-toggle="modal" data-target="#tambahTransaksi"><i class="fa fa-plus fa-fw mr-2"></i>Tambah Transaksi</button>
        </h2>
    </div>
    <div class="row mt-4">
        <!-- Daftar Transaksi -->
        <div class="col-xl-12 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTableTransaksi" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID Transaksi</th>
                                    <th>Username Anggota</th>
                                    <th>Judul Buku</th>
                                    <th>Tanggal Peminjaman</th>
                                    <th>Tanggal Pengembalian</th>
                                    <th>Sanksi</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>29840981</td>
                                    <td>gordonramzi</td>
                                    <td>Kambing Betina</td>
                                    <td>12/08/2019</td>
                                    <td>12/08/2020</td>
                                    <td>Rp. 0</td>
                                    <td>
                                        <div class="badge badge-success badge-pill">Selesai</div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-warning ml-1" data-id="" type="button" data-toggle="modal" data-target="#editTransaksi"><i class="fa fa-edit fa-fw"></i></button>
                                        <button class="btn btn-sm btn-danger ml-1" data-id="" type="button" data-toggle="modal" data-target="#hapusTransaksi"><i class="fa fa-trash fa-fw"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Modal Tambah Transaksi -->
                <div class="modal fade" id="tambahTransaksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Transaksi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="username">Username Anggota</label>
                                    <input type="text" name="" class="form-control" placeholder="Masukkan Transaksi" required>
                                </div>
                                <div class="form-group">
                                    <label for="judul">Judul Buku</label>
                                    <input type="text" name="" class="form-control" placeholder="Masukkan Transaksi" required>
                                </div>
                                <div class="form-group">
                                    <label for="judul">Tanggal Peminjaman</label>
                                    <input type="text" name="" class="form-control" placeholder="Masukkan Transaksi" id="tglPinjam" required>
                                </div>
                                <div class="form-group">
                                    <label for="judul">Tanggal Pengembalian</label>
                                    <input type="text" name="" class="form-control" placeholder="Masukkan Transaksi" id="tglKembali" required>
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

                <!-- Modal Edit Transaksi -->
                <div class="modal fade" id="editTransaksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <label for="username">Username Anggota</label>
                                    <input type="text" name="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="judul">Judul Buku</label>
                                    <input type="text" name="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="judul">Tanggal Peminjaman</label>
                                    <input type="text" name="" class="form-control" id="tglPinjam">
                                </div>
                                <div class="form-group">
                                    <label for="judul">Tanggal Pengembalian</label>
                                    <input type="text" name="" class="form-control" id="tglKembali">
                                </div>
                                <div class="form-group">
                                    <label for="sanksi">Sanksi</label>
                                    <input type="text" name="" class="form-control">
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
                <div class="modal fade" id="hapusTransaksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Transaksi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>Apakah anda yakin ingin menghapus Transaksi ini ?</h5>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="" name="">
                                <button type="button" class="btn btn-primary-soft" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-trash mr-1"></i>Hapus Transaksi</button>
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
        var table = $('#dataTableTransaksi').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
</script>
<script type="text/javascript">
    //datepicker dari
    $('#tglPinjam').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });

    //datepicker sanpai
    $('#tglKembali').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
</script>