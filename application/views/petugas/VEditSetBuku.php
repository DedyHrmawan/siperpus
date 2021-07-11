<div class="container-fluid mt-5">
    <!-- Custom page header alternative example-->
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="container">
            <div class="row">
                <div class="mr-4 mb-3 mb-sm-0">
                    <h6 class="col">Jumlah Peminjaman Buku</h6>
                </div>
                <!-- <div class="col">
                    <div class="text-md-right">
                        <a onclick="history.back(-1)"><button type="button" class="btn btn-yellow"><i class="fa fa-arrow-left mr-1"></i>Kembali</button></a>
                        <button id="btn_simpan" class="btn btn-primary">Simpan</button>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <!-- Daftar Peminjaman -->
        <div class="col-xl-12 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-body">
                    <form method="post" id="formData" action="<?= site_url('peminjaman/update')?>">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="datatableJumlahBuku" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="57%">Buku</th>
                                    <th width="15%">Stok Buku</th>
                                    <th width="20%">Jumlah Buku</th>
                                </tr>
                            </thead>
                            <tbody>
                                <div id="buku">
                                    <input type="hidden" name="USERNAME_ANGGOTA" value="<?= $peminjaman['USERNAME_ANGGOTA']?>">
                                    <input type="hidden" name="TGL_PEMINJAMAN" value="<?= $peminjaman['TGL_PEMINJAMAN']?>">
                                    <input type="hidden" name="TGLPENGEMBALIAN_PEMINJAMAN" value="<?= $peminjaman['TGLPENGEMBALIAN_PEMINJAMAN']?>">
                                    <?php
                                        $x = 0;
                                        foreach ($bukus as $item) {
                                            $jml = '';
                                            foreach ($peminjamanDetails as $item2) {
                                                if($item->ID_BUKU == $item2->ID_BUKU){
                                                    $jml = $item2->JML_PEMINJAMAN;
                                                    break;
                                                }
                                            }
                                            echo '
                                                <tr>
                                                    <td>
                                                        '.$item->JUDUL_BUKU.'
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="badge badge-success badge-pill">'.$item->STOK_BUKU.'</div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" name="JML[]" class="form-control"  placeholder="Jumlah Buku" value="'.$jml.'" required>
                                                            <input type="hidden" name="ID_BUKU[]" value="'.$item->ID_BUKU.'">
                                                        </div
                                                    </td>
                                                </tr>
                                            ';
                                            $x++;
                                        }
                                    ?>
                                </div>
                            </tbody>
                        </table>
                    </div>
                    <div class="col" style="margin-top: 24px;">
                        <div class="text-md-right">
                            <a onclick="history.back(-1)"><button type="button" class="btn btn-yellow"><i class="fa fa-arrow-left mr-1"></i>Kembali</button></a>
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                    </form>
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
    $('#btn_simpan').click(function(){
        $('#formData').submit()
    })
</script>