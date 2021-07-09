<div class="container-fluid mt-5">
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="mr-4 mb-3 mb-sm-0">
            <h6 class="mb-0">Admin Management Overview</h6>
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
                                    <p><?= $totalAnggota ?></p>
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
                                    <p><?= $totalPetugas ?></p>
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
                                    <p>100</p>
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

        <!-- Daftar Anggota -->
        <div class="col-xl-12 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-header">
                    Daftar Anggota
                </div>
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
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($anggotas as $item) {
                                    $jk = ($item->JK_ANGGOTA == "1" ? 'Laki-Laki' : 'Perempuan');
                                    echo '
                                            <tr>
                                                <td>' . $item->USERNAME_ANGGOTA . '</td>
                                                <td>' . $item->EMAIL_ANGGOTA . '</td>
                                                <td>' . $item->NAMA_ANGGOTA . '</td>
                                                <td>' . $jk . '</td>
                                                <td>' . $item->ALAMAT_ANGGOTA . '</td>
                                                <td>' . $item->TELP_ANGGOTA . '</td>
                                            </tr>
                                        ';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Daftar Petugas -->
        <div class="col-xl-12 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-header">
                    Daftar Petugas
                </div>
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
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($petugass as $item) {
                                    $jk = ($item->JK_PETUGAS == "1" ? 'Laki-Laki' : 'Perempuan');
                                    echo '
                                            <tr>
                                                <td>' . $item->USERNAME_PETUGAS . '</td>
                                                <td>' . $item->EMAIL_PETUGAS . '</td>
                                                <td>' . $item->NAMA_PETUGAS . '</td>
                                                <td>' . $jk . '</td>
                                                <td>' . $item->ALAMAT_PETUGAS . '</td>
                                                <td>' . $item->TELP_PETUGAS . '</td>
                                            </tr>
                                        ';
                                }
                                ?>
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
        var table = $('#dataTableAnggota').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });

    $().ready(function() {
        var table = $('#dataTablePetugas').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
</script>