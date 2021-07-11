<div class="container-fluid mt-5">
    <!-- Custom page header alternative example-->
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="mr-4 mb-3 mb-sm-0">
            <h6 class="mb-0">Petugas Management Peminjaman Buku</h6>
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
                                <form method="post" action="<?= site_url('peminjaman/tambah-detail')?>">
                                <div class="form-group">
                                    <label for="anggota">Username Anggota</label>
                                    <br>
                                    <select name="USERNAME_ANGGOTA" class="form-control select-modal-width2" required>
                                        <?php
                                            foreach ($anggotas as $item) {
                                                echo '
                                                    <option value="'.$item->USERNAME_ANGGOTA.'">'.$item->NAMA_ANGGOTA.'</option>
                                                ';
                                            }
                                        ?>
                                        <option value="1">DEDY</option>
                                        <option value="2">LALALALA</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="judul">Judul Buku</label>
                                    <br>
                                    <select name="ID_BUKU[]" class="form-control select-modal-width2" multiple="multiple" required>
                                        <?php
                                            foreach ($bukus as $item) {
                                                echo '
                                                    <option value="'.$item->ID_BUKU.'">'.$item->JUDUL_BUKU.'</option>
                                                ';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group select-modal-width2">
                                    <label for="tglPinjam">Tanggal Peminjaman</label>
                                    <input type="text" name="TGL_PEMINJAMAN" class="form-control" placeholder="Tanggal Peminjaman" id="tglPinjam" required>
                                </div>
                                <div class="form-group select-modal-width2">
                                    <label for="tglKembali">Tanggal Pengembalian</label>
                                    <input type="text" name="TGLPENGEMBALIAN_PEMINJAMAN" class="form-control" placeholder="Tanggal Pengembalian" id="tglKembali" required>
                                </div>
                            </div>
                            <div class="text-md-right">
                                <a onclick="history.back(-1)">
                                    <button type="button" class="btn btn-yellow"><i class="fa fa-arrow-left mr-1"></i>Kembali</button>
                                </a>
                                <button type="submit" class="btn btn-primary">Selanjutnya</button>
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
</script>