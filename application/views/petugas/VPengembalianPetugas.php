<div class="container-fluid mt-5">
    <!-- Custom page header alternative example-->
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="mr-4 mb-3 mb-sm-0">
            <h6 class="mb-0">Petugas Management Pengembalian</h6>
        </div>
    </div>
    <div class="mb-5 font-weight-bold">
        <h2>Pengembalian
            <button class="btn btn-primary btn-sm float-right font-weight-bold" type="button" data-id="" type="button" data-toggle="modal" data-target="#tambahPengembalian"><i class="fa fa-plus fa-fw mr-2"></i>Tambah Pengembalian</button>
        </h2>
    </div>
    <div class="row mt-4">
        <!-- Daftar Pengembalian -->
        <div class="col-xl-12 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTablePengembalian" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID Peminjaman</th>
                                    <th>Username Anggota</th>
                                    <th>Judul Buku</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th width="12%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($pengembalians as $item) {
                                        $tglPinjam  = date_create($item->TGL_PEMINJAMAN);
                                        $tglKembali = date_create($item->TGL_PENGEMBALIAN);
                                        echo '
                                            <tr>
                                                <td>'.$item->ID_PEMINJAMAN.'</td>
                                                <td>'.$item->USERNAME_ANGGOTA.'</td>
                                                <td>Kambing Betina</td>
                                                <td>'.date_format($tglPinjam, 'd F Y').'</td>
                                                <td>'.date_format($tglKembali, 'd F Y').'</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning m-1 mdlEdit" data-id="'.$item->ID_PENGEMBALIAN.'" type="button" data-toggle="modal" data-target="#editPengembalian"><i class="fa fa-edit fa-fw"></i></button>
                                                    <button class="btn btn-sm btn-danger m-1 mdlHapus" data-id="'.$item->ID_PENGEMBALIAN.'" type="button" data-toggle="modal" data-target="#hapusPengembalian"><i class="fa fa-trash fa-fw"></i></button>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Modal Tambah Pengembalian -->
                <div class="modal fade" id="tambahPengembalian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Pengembalian</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" action="<?= site_url('pengembalian/store')?>">
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
                                    <label for="tglKembali">Tanggal Pengembalian</label>
                                    <input type="text" name="TGL_PENGEMBALIAN" class="form-control" placeholder="Tanggal Kembali" id="tglKembali" required>
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

                <!-- Modal Edit Pengembalian -->
                <div class="modal fade" id="editPengembalian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Pengembalian</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" action="<?= site_url('pengembalian/edit')?>">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="id">ID Peminjaman</label>
                                    <br>
                                    <input type="text" id="mdlEdit_idPeminjaman" class="form-control" disabled />
                                </div>
                                <div class="form-group">
                                    <label for="editTglKembali">Tanggal Pengembalian</label>
                                    <input type="text" name="TGL_PENGEMBALIAN" class="form-control" id="editTglKembali">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="ID_PENGEMBALIAN" id="mdlEdit_id">
                                <button type="button" class="btn btn-primary-soft" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-check mr-1"></i>Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal Hapus -->
                <div class="modal fade" id="hapusPengembalian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Pengembalian</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" action="<?= site_url('pengembalian/destroy')?>">
                            <div class="modal-body">
                                <h5>Apakah anda yakin ingin menghapus Pengembalian ini ?</h5>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="mdlHapus_id" name="ID_PENGEMBALIAN">
                                <button type="button" class="btn btn-primary-soft" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-trash mr-1"></i>Hapus Pengembalian</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end modal -->

            </div>
        </div>
    </div>
</div>

<script>
    $().ready(function() {
        var table = $('#dataTablePengembalian').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
</script>
<script type="text/javascript">
    //dp edit Pengembalian
    $('#tglKembali').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });

    //datepicker edit Pengembalian
    $('#editTglKembali').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });

    $('#dataTablePengembalian tbody').on('click', '.mdlEdit', function(){
        const id = $(this).data('id')
        $.ajax({
            url: '<?= site_url('pengembalian/ajxDetail')?>',
            method: 'post',
            data: {ID_PENGEMBALIAN: id},
            success: function(res){
                res = JSON.parse(res)
                $('#mdlEdit_idPeminjaman').val(res.ID_PEMINJAMAN)
                $('#editTglKembali').val(res.TGL_PENGEMBALIAN)
                $('#mdlEdit_id').val(id)
            }
        })
    })
    $('#dataTablePengembalian tbody').on('click', '.mdlHapus', function(){
        const id = $(this).data('id')
        $('#mdlHapus_id').val(id)
    })
</script>