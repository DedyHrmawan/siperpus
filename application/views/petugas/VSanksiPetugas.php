<div class="container-fluid mt-5">
    <!-- Custom page header alternative example-->
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="mr-4 mb-3 mb-sm-0">
            <h6 class="mb-0">Petugas Management Sanksi</h6>
        </div>
    </div>
    <div class="mb-5 font-weight-bold">
        <h2>Sanksi
            <button class="btn btn-primary btn-sm float-right font-weight-bold" type="button" data-id="" type="button" data-toggle="modal" data-target="#tambahSanksi"><i class="fa fa-plus fa-fw mr-2"></i>Tambah Sanksi</button>
        </h2>
    </div>
    <div class="row mt-4">
        <!-- Daftar Sanksi -->
        <div class="col-xl-12 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTablePembayaran" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID Peminjaman</th>
                                    <th>Total Sanksi</th>
                                    <th>Tanggal Pembayaran</th>
                                    <th>Status Pembayaran</th>
                                    <th width="12%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($sanksis as $item) {
                                        $tglSanksi = date_create($item->TGL_SANKSI);
                                        echo '
                                            <tr>
                                                <td>'.$item->ID_PEMINJAMAN.'</td>
                                                <td>Rp. '.$item->TOTAL_SANKSI.'</td>
                                                <td>'.($item->TGL_SANKSI != '0000-00-00' ? date_format($tglSanksi, 'd F Y') : '0000-00-00').'</td>
                                                <td class="text-center">
                                                    '.($item->TGL_SANKSI != '0000-00-00' ? '<div class="badge badge-success badge-pill">Sudah Bayar</div>' : '<div class="badge badge-danger badge-pill">Belum Bayar</div>').'
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning m-1 mdlEdit" data-id="'.$item->ID_SANKSI.'" type="button" data-toggle="modal" data-target="#editSanksi"><i class="fa fa-edit fa-fw"></i></button>
                                                    <button class="btn btn-sm btn-danger m-1 mdlHapus" data-id="'.$item->ID_SANKSI.'" type="button" data-toggle="modal" data-target="#hapusPembayaran"><i class="fa fa-trash fa-fw"></i></button>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Modal Tambah Sanksi -->
                <div class="modal fade" id="tambahSanksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Sanksi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="<?= site_url('sanksi/store')?>">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="id">ID Peminjaman</label>
                                    <br>
                                    <select name="ID_PEMINJAMAN" class="form-control select-modal-width">
                                        <?php
                                            foreach ($peminjamans as $item) {
                                                echo '
                                                    <option value="'.$item->ID_PEMINJAMAN.'">'.$item->ID_PEMINJAMAN.'</option>
                                                ';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Total Sanksi</label>
                                    <input type="text" name="TOTAL_SANKSI" class="form-control" placeholder="Total Sanksi" required>
                                </div>
                                <div class="form-group">
                                    <label for="tglKembali">Tanggal Pembayaran</label>
                                    <input type="text" name="TGL_SANKSI" class="form-control" placeholder="Tanggal Pembayaran" id="tglBayar">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary-soft" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-check mr-1"></i>Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal Edit Sanksi -->
                <div class="modal fade" id="editSanksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Transaksi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="<?= site_url('sanksi/edit')?>">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="id">ID Peminjaman</label>
                                    <br>
                                    <input type="text" id="mdlEdit_idPeminjaman" class="form-control" disabled />
                                </div>
                                <div class="form-group">
                                    <label for="">Total Sanksi</label>
                                    <input type="text" name="TOTAL_SANKSI" id="mdlEdit_total" class="form-control" placeholder="Total Sanksi" required>
                                </div>
                                <div class="form-group">
                                    <label for="tglKembali">Tanggal Pembayaran</label>
                                    <input type="text" name="TGL_SANKSI" class="form-control" placeholder="Tanggal Pembayaran" id="editTglBayar">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="mdlEdit_id" name="ID_SANKSI" />
                                <button type="button" class="btn btn-primary-soft" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-check mr-1"></i>Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal Hapus -->
                <div class="modal fade" id="hapusPembayaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Pembayaran</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>Apakah anda yakin ingin menghapus Pembayaran ini ?</h5>
                            </div>
                            <form method="post" action="sanksi/destroy">
                            <div class="modal-footer">
                                <input type="hidden" id="mdlHapus_id" name="ID_SANKSI">
                                <button type="button" class="btn btn-primary-soft" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-trash mr-1"></i>Hapus Pembayaran</button>
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
        var table = $('#dataTablePembayaran').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
  
    //dp tgl Bayar
    $('#tglBayar').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });

     //dp edit tgl Bayar
     $('#editTglBayar').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
    $('#dataTablePembayaran tbody').on('click', '.mdlEdit', function(){
        const id = $(this).data('id')
        $.ajax({
            url: '<?= site_url('sanksi/ajxDetail')?>',
            method: 'post',
            data: {ID_SANKSI: id},
            success: function(res){
                res = JSON.parse(res)
                $('#mdlEdit_idPeminjaman').val(res.ID_PEMINJAMAN)
                $('#mdlEdit_total').val(res.TOTAL_SANKSI)
                $('#editTglBayar').val(res.TGL_SANKSI)
                $('#mdlEdit_id').val(id)
            }
        })
    })
    $('#dataTablePembayaran tbody').on('click', '.mdlHapus', function(){
        const id = $(this).data('id')
        $('#mdlHapus_id').val(id)
    })
</script>