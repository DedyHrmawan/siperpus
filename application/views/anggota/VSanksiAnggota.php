<div class="container-fluid mt-5">
    <!-- Custom page header alternative example-->
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="mr-4 mb-3 mb-sm-0">
            <h6 class="mb-0">Anggota Management Sanksi</h6>
        </div>
    </div>
    <div class="row mt-4">
        <!-- Daftar Sanksi -->
        <div class="col-xl-12 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTableSanksi" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Judul Buku</th>
                                    <th>Pengarang</th>
                                    <th>Jumlah Buku</th>
                                    <th>Total Sanksi</th>
                                    <th>Status Pembayaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Kambing Jantan</td>
                                    <td>Gordon Ramzi</td>
                                    <td>1</td>
                                    <td>Rp. 10000</td>
                                    <td class="text-center">
                                        <div class="badge badge-success badge-pill">Belum Bayar</div>
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
        var table = $('#dataTableSanksi').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
</script>