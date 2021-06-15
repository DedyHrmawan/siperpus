<main>
    <header class="page-header page-header-dark bg-content pb-10">
        <div class="container-fluid">
            <div class="page-header-content pt-4">
                <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
                </div>
                <div class="mb-1 font-weight-bold">
                    <h2><i class="fas fa-book ml-2  mr-2 fa-lg fa-fw"></i>
                        Laporan Buku
                    </h2>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid mt-n10">
        <div class="card mb-4">
            <br>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2 ml-4">
                        <p class="font-weight-bold">Dari Tanggal : </p>
                        <input name="" class="form-control" id="tanggalDari" type="text" placeholder="Tanggal Kirim" />
                    </div>
                    <div class="col-md-2 ml-4">
                        <p class="font-weight-bold">Sampai Tanggal : </p>
                        <input name="" class="form-control" id="tanggalSampai" type="text" placeholder="Tanggal Acara" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 ml-3 ml-4 mt-3">
                        <button type="submit" class="btn btn-primary btn-block text-sm">Tampilkan</button>
                    </div>
                    <div class="col-md-2 ml-3 ml-4 mt-3">
                        <button type="submit" class="btn btn-dark btn-block text-sm" data-toggle="modal" data-target="#pdfModal"><i class="fa fa-print fa-fw mr-1"></i>Cetak Laporan</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="dataTableLaporanBuku" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ISBN</th>
                                <th>Judul Buku</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Kategori</th>
                                <th>Tahun Buku</th>
                                <th>Stok Buku</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>817562562565</td>
                                <td>Kambing Jantan</td>
                                <td>Raditya Dika</td>
                                <td>Gramedia</td>
                                <td>Misteri</td>
                                <td>2018</td>
                                <td>52</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Modal View PDF -->
            <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Laporan Buku</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <iframe id="pdfModal_src" src="<?= base_url('assets/pdf/laporan.pdf'); ?>" frameborder="0" width="100%" height="470px"></iframe>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#dataTableLaporanBuku').DataTable({
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
    $('#tanggalDari').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });

    //datepicker sanpai
    $('#tanggalSampai').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
</script>