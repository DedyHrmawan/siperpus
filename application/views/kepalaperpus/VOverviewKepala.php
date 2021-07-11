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
                                <div class="teksgambar">
                                    <p>10</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3 ">
                                <div class="text-md font-weight-bold text-black mb-2">Total Peminjaman</div>
                                <div class="text-xs font-weight-bold text-blue d-inline-flex align-items-center mt-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <!-- Dashboard info widget 2-->
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
                                <div class="text-md font-weight-bold text-black mb-2">Total Pengembalian</div>
                                <div class="text-xs font-weight-bold text-blue d-inline-flex align-items-center mt-2"></div>
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
                                <div class="teksgambar">
                                    <p>10</p>
                                </div>
                            </div>
                            <div class="mt-4 p-3">
                                <div class="text-md font-weight-bold text-black mb-2">Total Sanksi</div>
                                <div class="text-xs font-weight-bold text-blue d-inline-flex align-items-center mt-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <!-- Dashboard info widget 4-->
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
                                <div class="text-md font-weight-bold text-black mb-2">Total Buku</div>
                                <div class="text-xs font-weight-bold text-blue d-inline-flex align-items-center mt-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <!-- Dashboard info widget 5-->
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
                                <div class="text-md font-weight-bold text-black mb-2">Total Anggota</div>
                                <div class="text-xs font-weight-bold text-blue d-inline-flex align-items-center mt-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <!-- Dashboard info widget 6-->
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
                                <div class="text-md font-weight-bold text-black mb-2">Total Petugas</div>
                                <div class="text-xs font-weight-bold text-blue d-inline-flex align-items-center mt-2"></div>
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
                    Total Peminjaman Bulanan
                    <div class="collapse multi-collapse show">
                        <select name="" class="form-control filter_tahun select-width">
                            <option value="1">2021</option>
                            <option value="2">2022</option>
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <canvas class="mb-5" id="myChart"></canvas>
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
<script src="<?= base_url(); ?>assets/js/plugin/Chart.js/2.9.3/Chart.min.js" crossorigin="anonymous"></script>
<script type="text/javascript">
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
            datasets: [{
                label: 'Total Peminjaman',
                data: [10, 50, 100, 150, 200, 150, 50, 100, 150, 200, 150, 10],
                backgroundColor: 'RGBA(140,48,245,1)',
                borderColor: 'RGBA(255,255,255,1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>