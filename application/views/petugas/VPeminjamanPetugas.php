<div class="container-fluid mt-5">
    <!-- Custom page header alternative example-->
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="mr-4 mb-3 mb-sm-0">
            <h6 class="mb-0">Petugas Management Peminjaman</h6>
        </div>
    </div>
    <div class="mb-5 font-weight-bold">
        <h2>Peminjaman
            <a class="btn btn-primary btn-sm float-right font-weight-bold" type="button" data-id="" type="button" href="<?php echo site_url('peminjaman/tambah'); ?>"><i class="fa fa-plus fa-fw mr-2"></i>Tambah Peminjaman</a>
        </h2>
    </div>
    <div class="row mt-4">
        <!-- Daftar Peminjaman -->
        <div class="col-xl-12 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTablePeminjaman" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID Peminjaman</th>
                                    <th>Username Anggota</th>
                                    <th>Judul Buku</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Status</th>
                                    <th width="16%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($peminjamans as $item) {
                                        $tglPinjam          = date_create($item->TGL_PEMINJAMAN);
                                        $tglPengembalian    = date_create($item->TGLPENGEMBALIAN_PEMINJAMAN);
                                        echo '
                                            <tr>
                                                <td>'.$item->ID_PEMINJAMAN.'</td>
                                                <td>'.$item->USERNAME_ANGGOTA.'</td>
                                                <td>'.$item->ID_PEMINJAMAN.'</td>
                                                <td>'.date_format($tglPinjam, 'd F Y').'</td>
                                                <td>'.date_format($tglPengembalian, 'd F Y').'</td>
                                                <td class="text-center">
                                                    <div class="badge badge-success badge-pill">Selesai</div>
                                                </td>
                                                <td>
                                                    '.($item->ISVERIF_PEMINJAMAN == '0' ? '<button class="btn btn-green btn-sm btnChangeStatus m-1" data-id="" type="button" data-toggle="modal" data-target="#statusModalAktif"><i class="fa fa-check"></i></button>' : '').'
                                                    <a class="btn btn-sm btn-warning m-1" type="button" href="'.site_url('peminjaman/ubah/'.$item->ID_PEMINJAMAN).'"><i class="fa fa-edit fa-fw"></i></a>
                                                    <button class="btn btn-sm btn-danger m-1 mdlHapus" data-id="'.$item->ID_PEMINJAMAN.'" type="button" data-toggle="modal" data-target="#hapusPeminjaman"><i class="fa fa-trash fa-fw"></i></button>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Modal Hapus -->
                <div class="modal fade" id="hapusPeminjaman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Peminjaman</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>Apakah anda yakin ingin menghapus Peminjaman ini ?</h5>
                            </div>
                            <form method="POST" action="<?= site_url('peminjaman/destroy')?>">
                            <div class="modal-footer">
                                <input type="hidden" id="mdlHapus_id" name="ID_PEMINJAMAN">
                                <button type="button" class="btn btn-primary-soft" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-trash mr-1"></i>Hapus Peminjaman</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="statusModalAktif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Status</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= site_url('klien/changeStatus') ?>" method="post">
                                <div class="modal-body">
                                    <h5>Apakah anda yakin ingin memverifikasi peminjaman ini  ?</h5>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" id="idKlien_changeStatus" name="ID_KLIEN">
                                    <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                    <button type="submit" class="btn btn-success"><i class="fa fa-check mr-1"></i>Ubah Status</button>
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
        var table = $('#dataTablePeminjaman').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
    $('#dataTablePeminjaman tbody').on('click', '.mdlHapus', function(){
        const id = $(this).data('id')
        $('#mdlHapus_id').val(id)
    })
</script>