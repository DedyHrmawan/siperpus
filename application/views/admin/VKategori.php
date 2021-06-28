<div class="container-fluid mt-5">
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="mr-4 mb-3 mb-sm-0">
            <h6 class="mb-0">Admin Management Kategori</h6>
        </div>
    </div>
    <div class="mb-5 font-weight-bold">
        <h2>Kategori
            <button class="btn btn-primary btn-sm float-right font-weight-bold" type="button" data-id="" type="button" data-toggle="modal" data-target="#tambahKategori"><i class="fa fa-plus fa-fw mr-2"></i>Tambah Kategori</button>
        </h2>
    </div>
    <div class="row mt-4">
        <!-- Daftar Kategori -->
        <div class="col-xl-12 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTableKategori" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Horor</td>
                                    <td>
                                        <button class="btn btn-sm btn-warning ml-1" data-id="" type="button" data-toggle="modal" data-target="#editKategori"><i class="fa fa-edit fa-fw"></i></button>
                                        <button class="btn btn-sm btn-danger ml-1" data-id="" type="button" data-toggle="modal" data-target="#hapusKategori"><i class="fa fa-trash fa-fw"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Misteri</td>
                                    <td>
                                        <button class="btn btn-sm btn-warning ml-1 mt-1" data-id="" type="button" data-toggle="modal" data-target="#editKategori"><i class="fa fa-edit fa-fw"></i></button>
                                        <button class="btn btn-sm btn-danger ml-1 mt-1" data-id="" type="button" data-toggle="modal" data-target="#hapusKategori"><i class="fa fa-trash fa-fw"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Modal Tambah Kategori -->
                <div class="modal fade" id="tambahKategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <input type="text" name="" class="form-control" placeholder="Masukkan Kategori" required>
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

                <!-- Modal Edit Kategori -->
                <div class="modal fade" id="editKategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <input type="text" name="" class="form-control" required>
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
                <!-- Modal Hapus -->
                <div class="modal fade" id="hapusKategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Kategori</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>Apakah anda yakin ingin menghapus Kategori ini ?</h5>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="" name="">
                                <button type="button" class="btn btn-primary-soft" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-trash mr-1"></i>Hapus Kategori</button>
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
        var table = $('#dataTableKategori').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
</script>