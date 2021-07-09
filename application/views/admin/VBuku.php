<div class="container-fluid mt-5">
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="mr-4 mb-3 mb-sm-0">
            <h6 class="mb-0">Admin Management Buku</h6>
        </div>
    </div>
    <div class="mb-5 font-weight-bold">
        <h2>Buku
            <button class="btn btn-primary btn-sm float-right font-weight-bold" type="button" data-id="" type="button" data-toggle="modal" data-target="#tambahBuku"><i class="fa fa-plus fa-fw mr-2"></i>Tambah Buku</button>
        </h2>
    </div>
    <div class="row mt-4">
        <!-- Daftar Buku -->
        <div class="col-xl-12 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTableBuku" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ISBN Buku</th>
                                    <th>Judul Buku</th>
                                    <th>Gambar Buku</th>
                                    <th>Kategori Buku</th>
                                    <th>Tahun Terbit</th>
                                    <th>Stok Buku</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($bukus as $item) {
                                    echo '
                                            <tr>
                                                <td>' . $item->ISBN_BUKU . '</td>
                                                <td>' . $item->JUDUL_BUKU . '</td>
                                                <td class="text-center">
                                                <button class="btn btn-md btn-light tampilGambar img-thumbnail" data-source=" " type="button" data-toggle="modal" data-target="#tampilgambar"><i class="fa fa-image"></i></button>
                                            </td>
                                                <td>' . $item->NAMA_KATEGORI . '</td>
                                                <td>' . $item->TAHUN_BUKU . '</td>
                                                <td>' . $item->STOK_BUKU . '</td>
                                                <td>
                                                <button class="btn btn-sm btn-warning ml-1 mdlEdit" data-id="' . $item->ID_BUKU . '" type="button" data-toggle="modal" data-target="#editBuku"><i class="fa fa-edit fa-fw"></i></button>
                                                <button class="btn btn-sm btn-danger ml-1 mdlHapus" data-id="' . $item->ID_BUKU . '" type="button" data-toggle="modal" data-target="#hapusBuku"><i class="fa fa-trash fa-fw"></i></button>
                                                </td>
                                            </tr>
                                        ';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Modal Tambah Buku -->
                <div class="modal fade" id="tambahBuku" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="<?= site_url('buku/store') ?>">

                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="isbn">ISBN Buku</label>
                                        <input type="text" name="ISBN_BUKU" class="form-control" placeholder="Masukkan ISBN" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="judul">Judul Buku</label>
                                        <input type="text" name="JUDUL_BUKU" class="form-control" placeholder="Masukkan Judul" required>
                                    </div>
                                    <div class="sbp-preview center">
                                        <div class="sbp-preview-content">
                                            <div class="form-group">
                                                <!-- wadah preview -->
                                                <img class="mx-auto" id="gambar-preview" alt="image preview" style="max-width: 300px;" />
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input gambar" id="source-gambar" onchange="previewGambar();">
                                                    <label class="custom-file-label label-gambar" for="image-source source-gambar">Pilih Gambar</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="stok">Kategori Buku</label>
                                        <br>
                                        <select name="ID_KATEGORI" class="form-control select-modal-width">
                                            <?php
                                            foreach ($kategoris as $item) {
                                                echo '
                                                    <option value="' . $item->ID_KATEGORI . '">' . $item->NAMA_KATEGORI . '</option>
                                                ';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="stok">Pengarang</label>
                                        <br>
                                        <select name="ID_PENGARANG" class="form-control select-modal-width">
                                            <?php
                                            foreach ($pengarangs as $item) {
                                                echo '
                                                    <option value="' . $item->ID_PENGARANG . '">' . $item->NAMA_PENGARANG . '</option>
                                                ';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="stok">Penerbit</label>
                                        <br>
                                        <select name="ID_PENERBIT" class="form-control select-modal-width">
                                            <?php
                                            foreach ($penerbits as $item) {
                                                echo '
                                                    <option value="' . $item->ID_PENERBIT . '">' . $item->NAMA_PENERBIT . '</option>
                                                ';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tahun">Tahun Terbit</label>
                                        <input type="date" name="TAHUN_BUKU" class="form-control" placeholder="Masukkan Tahun" required></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="stok">Stok Buku</label>
                                        <br>
                                        <input type="number" name="STOK_BUKU" class="form-control" placeholder="Masukkan Stok" required>
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

                <!-- Modal Edit Buku -->
                <div class="modal fade" id="editBuku" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Buku</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="<?= site_url('buku/edit') ?>">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="isbn">ISBN Buku</label>
                                        <input type="text" name="ISBN_BUKU" id="mdlEdit_isbn" class="form-control" placeholder="Masukkan ISBN" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="judul">Judul Buku</label>
                                        <input type="text" name="JUDUL_BUKU" id="mdlEdit_judul" class="form-control" placeholder="Masukkan Judul" required>
                                    </div>
                                    <div class="sbp-preview center">
                                        <div class="sbp-preview-content">
                                            <div class="form-group">
                                                <!-- wadah preview -->
                                                <img class="mx-auto" id="gambar-preview" alt="image preview" style="max-width: 300px;" />
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input gambar" id="source-gambar" onchange="previewGambar();">
                                                    <label class="custom-file-label label-gambar" for="image-source source-gambar">Pilih Gambar</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="stok">Kategori Buku</label>
                                        <br>
                                        <select name="ID_KATEGORI" id="mdlEdit_kategori" class="form-control select-modal-width">
                                            <?php
                                            foreach ($kategoris as $item) {
                                                echo '
                                                    <option value="' . $item->ID_KATEGORI . '">' . $item->NAMA_KATEGORI . '</option>
                                                ';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="stok">Pengarang</label>
                                        <br>
                                        <select name="ID_PENGARANG" id="mdlEdit_pengarang" class="form-control select-modal-width">
                                            <?php
                                            foreach ($pengarangs as $item) {
                                                echo '
                                                    <option value="' . $item->ID_PENGARANG . '">' . $item->NAMA_PENGARANG . '</option>
                                                ';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="stok">Penerbit</label>
                                        <br>
                                        <select name="ID_PENERBIT" id="mdlEdit_penerbit" class="form-control select-modal-width">
                                            <?php
                                            foreach ($penerbits as $item) {
                                                echo '
                                                    <option value="' . $item->ID_PENERBIT . '">' . $item->NAMA_PENERBIT . '</option>
                                                ';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tahun">Tahun Terbit</label>
                                        <input type="date" name="TAHUN_BUKU" id="mdlEdit_tahun" class="form-control" placeholder="Masukkan Tahun" required></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="stok">Stok Buku</label>
                                        <br>
                                        <input type="number" name="STOK_BUKU" id="mdlEdit_stok" class="form-control" placeholder="Masukkan Stok" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input name="ID_BUKU" id="mdlEdit_id" type="hidden">
                                    <button type="button" class="btn btn-primary-soft" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check mr-1"></i>Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal Hapus -->
                <div class="modal fade" id="hapusBuku" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Buku</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="<?= site_url('buku/destroy') ?>">
                                <div class="modal-body">
                                    <h5>Apakah anda yakin ingin menghapus Buku ini ?</h5>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" id="mdlHapus_id" name="ID_BUKU">
                                    <button type="button" class="btn btn-primary-soft" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-trash mr-1"></i>Hapus Buku</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal Tampil Gambar -->
                <div class="modal fade" id="tampilgambar" tabindex="-1" role="dialog" aria-labelledby="editKontrakKerja" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tampilgambar">Gambar Buku</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div style="text-align: center;">
                                    <img style="max-width:300px;" src="<?= base_url(); ?>assets/img/buku/kambingjantan.jpg" />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-arrow-circle-left mr-1"></i>Kembali</button>
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
        var table = $('#dataTableBuku').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
    $('#dataTableBuku tbody').on('click', '.mdlEdit', function() {
        const id = $(this).data('id')
        $.ajax({
            url: '<?= site_url('buku/ajxDetail') ?>',
            method: 'post',
            data: {
                ID_BUKU: id
            },
            success: function(res) {
                res = JSON.parse(res)
                $('#mdlEdit_isbn').val(res.ISBN_BUKU)
                $('#mdlEdit_judul').val(res.JUDUL_BUKU)
                $('#mdlEdit_kategori').val(res.ID_KATEGORI).change()
                $('#mdlEdit_pengarang').val(res.ID_PENGARANG).change()
                $('#mdlEdit_penerbit').val(res.ID_PENERBIT).change()
                $('#mdlEdit_tahun').val(res.TAHUN_BUKU)
                $('#mdlEdit_stok').val(res.STOK_BUKU)
                $('#mdlEdit_id').val(id)
            }
        })
    })
    $('#dataTableBuku tbody').on('click', '.mdlHapus', function() {
        const id = $(this).data('id')
        $('#mdlHapus_id').val(id)
    })

    //preview sebelum tambah gambar
    function previewGambar() {
        document.getElementById("gambar-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("source-gambar").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("gambar-preview").src = oFREvent.target.result;
        };
    };

    function previewGambar_edit() {
        document.getElementById("gambar-preview_edit").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("source-gambar_edit").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("gambar-preview_edit").src = oFREvent.target.result;
        };
    };
    $(".gambar").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".label-gambar").addClass("selected").html(fileName);
    });
</script>