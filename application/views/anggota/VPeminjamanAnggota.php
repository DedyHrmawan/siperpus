<div class="container-fluid mt-5">
    <!-- Custom page header alternative example-->
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="mr-4 mb-3 mb-sm-0">
            <h6 class="mb-0">Anggota Management Peminjaman</h6>
        </div>
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
                                    <th>Judul Buku</th>
                                    <th>Pengarang</th>
                                    <th>Jumlah Buku</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Kambing Betina</td>
                                    <td>Raditya Dika</td>
                                    <td>1</td>
                                    <td>12/08/2019</td>
                                    <td>12/08/2020</td>
                                    <td class="text-center">
                                        <div class="badge badge-success badge-pill">Pinjam</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
