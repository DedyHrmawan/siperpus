<div class="container-fluid mt-5">
    <!-- Custom page header alternative example-->
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="mr-4 mb-3 mb-sm-0">
            <h6 class="mb-0">Petugas Perpustakaan Overview</h6>
        </div>
    </div>
    <div class="mr-4 mb-4 font-weight-bold">
        <h2>Overview</h2>
    </div>

    <div class="row mt-4">
        <div class="col-xl-4 col-md-6 mb-4">
            <!-- Dashboard info widget 1-->
            <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-primary h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="d-flex flex-row">
                            <div id="image_div">
                                <div class="teksgambar">
                                    <p>10</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 ">
                                <div class="text-md font-weight-bold text-black mb-2">Jumlah Anggota</div>
                                <div class="text-xs font-weight-bold text-blue d-inline-flex align-items-center mt-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <!-- Dashboard info widget 1-->
            <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-primary h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="d-flex flex-row">
                            <div id="image_div">
                                <div class="teksgambar">
                                    <p>10</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3">
                                <div class="text-md font-weight-bold text-black mb-2">Jumlah Petugas</div>
                                <div class="text-xs font-weight-bold text-blue d-inline-flex align-items-center mt-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <!-- Dashboard info widget 1-->
            <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-primary h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="d-flex flex-row">
                            <div id="image_div">
                                <div class="teksgambar">
                                    <p>10</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3">
                                <div class="text-md font-weight-bold text-black mb-2">Jumlah Transaksi</div>
                                <div class="text-xs font-weight-bold text-blue d-inline-flex align-items-center mt-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Daftar Pembayaran -->
        <div class="col-xl-12 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-header">
                    Denda
                </div>
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTablePembayaran" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID Transaksi</th>
                                    <th>Status Pembayaran</th>
                                    <th>Nama Anggota</th>
                                    <th>Denda</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        202020202020
                                    </td>
                                    <td>Ramon Ridwan</td>
                                    <td>Rp. 10000</td>
                                    <td>
                                        <div class="badge badge-danger badge-pill">Belum Bayar</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        202020202020
                                    </td>
                                    <td>Ramon Ridwan</td>
                                    <td>Rp. 10000</td>
                                    <td>
                                        <div class="badge badge-success badge-pill">Sudah Bayar</div>
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
        var table = $('#dataTablePembayaran').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
</script>