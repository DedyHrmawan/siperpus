<div class="container-fluid mt-5">
    <!-- Custom page header alternative example-->
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="container">
            <div class="row">
                <div class="mr-4 mb-3 mb-sm-0">
                    <h6 class="col">Jumlah Peminjaman Buku</h6>
                </div>
                <div class="col">
                    <div class="text-md-right">
                        <a onclick="history.back(-1)"><button type="button" class="btn btn-yellow"><i class="fa fa-arrow-left mr-1"></i>Kembali</button></a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <!-- Daftar Peminjaman -->
        <div class="col-xl-12 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="datatableJumlahBuku" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="57%">Buku</th>
                                    <th width="15%">Stok Buku</th>
                                    <th width="20%">Jumlah Buku</th>
                                    <th width=8%>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <div id="buku">
                                    <tr>
                                        <td>
                                            Kambing Jantan
                                        </td>
                                        <td>
                                            <div class="badge badge-success badge-pill">14</div>
                                        </td>
                                        <td>
                                            <input name="" class="form-control" type="number" placeholder="Jumlah Buku" />
                                        <td>
                                            <button type="button" id="deleteRow" class="btn btn-danger btn-sm deleterow"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                </div>
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
        var table = $('#datatableJumlahBuku').DataTable({
            "searching": false,
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
</script>