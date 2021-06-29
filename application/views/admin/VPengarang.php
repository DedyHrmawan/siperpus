<div class="container-fluid mt-5">
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="mr-4 mb-3 mb-sm-0">
            <h6 class="mb-0">Admin Management Pengarang</h6>
        </div>
    </div>
    <div class="mb-5 font-weight-bold">
        <h2>Pengarang
            <button class="btn btn-primary btn-sm float-right font-weight-bold" type="button" data-id="" type="button" data-toggle="modal" data-target="#tambahPengarang"><i class="fa fa-plus fa-fw mr-2"></i>Tambah Pengarang</button>
        </h2>
    </div>
    <div class="row mt-4">
        <!-- Daftar Pengarang -->
        <div class="col-xl-12 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTablePengarang" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Pengarang</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($pengarangs as $item){
                                        echo '
                                            <tr>
                                                <td>'.$item->NAMA_PENGARANG.'</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning ml-1 mdlEdit" data-id="'.$item->ID_PENGARANG.'" type="button" data-toggle="modal" data-target="#editPengarang"><i class="fa fa-edit fa-fw"></i></button>
                                                    <button class="btn btn-sm btn-danger ml-1 mdlHapus" data-id="'.$item->ID_PENGARANG.'" type="button" data-toggle="modal" data-target="#hapusPengarang"><i class="fa fa-trash fa-fw"></i></button>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Modal Tambah Pengarang -->
                <div class="modal fade" id="tambahPengarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Pengarang</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form method="post" action="<?= site_url('pengarang/store')?>">
                                <div class="form-group">
                                    <label for="Pengarang">Pengarang</label>
                                    <input type="text" name="NAMA_PENGARANG" class="form-control" placeholder="Masukkan Pengarang" required>
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

                <!-- Modal Edit Pengarang -->
                <div class="modal fade" id="editPengarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Pengarang</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="<?= site_url('pengarang/edit')?>">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="Pengarang">Pengarang</label>
                                    <input type="text" id="mdlEdit_pengarang" name="NAMA_PENGARANG" class="form-control" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="ID_PENGARANG" id="mdlEdit_id" />
                                <button type="button" class="btn btn-primary-soft" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-check mr-1"></i>Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal Hapus -->
                <div class="modal fade" id="hapusPengarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Pengarang</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="<?= site_url('pengarang/destroy')?>">
                            <div class="modal-body">
                                <h5>Apakah anda yakin ingin menghapus Pengarang ini ?</h5>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="mdlHapus_id" name="ID_PENGARANG">
                                <button type="button" class="btn btn-primary-soft" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-trash mr-1"></i>Hapus Pengarang</button>
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
        var table = $('#dataTablePengarang').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
    $('#dataTablePengarang tbody').on('click', '.mdlEdit', function(){
        const id = $(this).data('id')
        $.ajax({
            url: '<?= site_url('pengarang/ajxDetail')?>',
            method: 'post',
            data: {ID_PENGARANG: id},
            success: function(res){
                res = JSON.parse(res)
                $('#mdlEdit_pengarang').val(res.NAMA_PENGARANG)
                $('#mdlEdit_id').val(id)
            }
        })
    })
    $('#dataTablePengarang tbody').on('click', '.mdlHapus', function(){
        const id = $(this).data('id')
        $('#mdlHapus_id').val(id)
    })
</script>