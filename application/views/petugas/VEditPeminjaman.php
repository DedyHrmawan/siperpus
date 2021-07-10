<div class="container-fluid mt-5">
    <!-- Custom page header alternative example-->
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="mr-4 mb-3 mb-sm-0">
            <h6 class="mb-0">Edit Peminjaman Buku</h6>
        </div>
    </div>
    <div class="row mt-4">
        <!-- Daftar Peminjaman -->
        <div class="col-xl-12 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-body">
                    <div class="sbp-preview">
                        <div class="sbp-preview-content">
                            <div class="col">
                                <div class="form-group">
                                    <label for="anggota">Username Anggota</label>
                                    <br>
                                    <select name="" class="form-control select-modal-width2">
                                        <option value="1">DEDY</option>
                                        <option value="2">LALALALA</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="judul">Judul Buku</label>
                                    <br>
                                    <select name="" class="form-control select-modal-width2" multiple="multiple">
                                        <option value="1">Kambing Betina</option>
                                        <option value="2">Sapi Jantan</option>
                                    </select>
                                </div>
                                <div class="form-group select-modal-width2">
                                    <label for="editTglPinjam">Tanggal Peminjaman</label>
                                    <input type="text" name="" class="form-control" placeholder="Tanggal Peminjaman" id="editTglPinjam" required>
                                </div>
                                <div class="form-group select-modal-width2">
                                    <label for="editTglKembali">Tanggal Pengembalian</label>
                                    <input type="text" name="" class="form-control" placeholder="Tanggal Pengembalian" id="editTglKembali" required>
                                </div>
                            </div>
                            <div class="text-md-right">
                                <a onclick="history.back(-1)">
                                    <button type="button" class="btn btn-yellow"><i class="fa fa-arrow-left mr-1"></i>Kembali</button>
                                </a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
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
    //datepicker edit peminjaman
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