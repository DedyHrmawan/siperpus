<div class="container-fluid mt-5">
    <!-- Custom page header alternative example-->
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="mr-4 mb-3 mb-sm-0">
            <h6 class="mb-0">Kepala Perpustakaan Overview</h6>
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
                                <img class="" src="<?= base_url(); ?>assets/img/circle_info.svg" alt="Responsive image"></img>
                                <p id="image_label"><span>10</span></p>
                            </div>
                            <div class="mt-4">
                                <div class="text-md font-weight-bold text-black mb-2">Jumlah Pengguna</div>
                                <div class="text-xs font-weight-bold text-blue d-inline-flex align-items-center mt-2">
                                    <i class="mr-1" data-feather="trending-up"></i>
                                    1%
                                    <img class="img-fluid ml-3" style="width: 40%;" src="<?= base_url(); ?>assets/img/chart.svg" alt="Responsive image"></img>
                                </div>
                            </div>
                            <div class="d-flex flex-row ml-4">
                                <i class="fa fa-ellipsis-h"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <!-- Dashboard info widget 3-->
            <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-primary h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="d-flex flex-row">
                            <div id="image_div">
                                <img class="" src="<?= base_url(); ?>assets/img/circle_info.svg" alt="Responsive image"></img>
                                <p id="image_label"><span>10</span></p>
                            </div>
                            <div class="mt-4">
                                <div class="text-md font-weight-bold text-black mb-2">Jumlah Petugas</div>
                                <div class="text-xs font-weight-bold text-blue d-inline-flex align-items-center mt-2">
                                    <i class="mr-1" data-feather="trending-up"></i>
                                    1%
                                    <img class="img-fluid ml-3" style="width: 40%;" src="<?= base_url(); ?>assets/img/chart.svg" alt="Responsive image"></img>
                                </div>
                            </div>
                            <div class="d-flex flex-row ml-4">
                                <i class="fa fa-ellipsis-h"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <!-- Dashboard info widget 3-->
            <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-primary h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="d-flex flex-row">
                            <div id="image_div">
                                <img class="" src="<?= base_url(); ?>assets/img/circle_info.svg" alt="Responsive image"></img>
                                <p id="image_label"><span>10</span></p>
                            </div>
                            <div class="mt-4">
                                <div class="text-md font-weight-bold text-black mb-2">Jumlah Transaksi</div>
                                <div class="text-xs font-weight-bold text-blue d-inline-flex align-items-center mt-2">
                                    <i class="mr-1" data-feather="trending-up"></i>
                                    1%
                                    <img class="img-fluid ml-3" style="width: 40%;" src="<?= base_url(); ?>assets/img/chart.svg" alt="Responsive image"></img>
                                </div>
                            </div>
                            <div class="d-flex flex-row ml-4">
                                <i class="fa fa-ellipsis-h"></i>
                            </div>
                        </div>
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
                                <tr>
                                    <td>gordonramzi</td>
                                    <td>Ramonridwan@protonmail.com</td>
                                    <td>Ramon Ridwan</td>
                                    <td>Laki-laki</td>
                                    <td>Blitar</td>
                                    <td>081234526723</td>
                                </tr>
                                <tr>
                                    <td>gordonramzi</td>
                                    <td>Ramonridwan@protonmail.com</td>
                                    <td>Ramon Ridwan</td>
                                    <td>Laki-laki</td>
                                    <td>Blitar</td>
                                    <td>081234526723</td>
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
        var table = $('#dataTablePetugas').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
</script>