<main>
    <header class="page-header page-header-dark bg-content text-left pb-10">
        <div class="container-fluid">
            <div class="page-header-content pt-4">
                <div class="mb-4 font-weight-bold text-left">
                    <h2><i class="fas fa-shopping-cart ml-2 mr-2 fa-lg fa-fw"></i>
                        Keranjang
                    </h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="form-check text-left ml-5">
                                                <input class="form-check-input checknih" type="checkbox" value="" id="semua">
                                                <label class="form-check-label text-dark ml-2" for="semua">
                                                    Pilih Semua
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm text-right">
                                            <a href="" class="text-primary">
                                                Hapus
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-check text-left ml-5">
                                                <input class="form-check-input checknih" type="checkbox" value="" id="item2">
                                                <label class="form-check-label text-dark" for="item2">
                                                    <div class="row">
                                                        <div class="col">
                                                            <img class="ic-img ml-2" src="<?= base_url(); ?>assets/img/buku/kambingjantan.jpg" alt="Image">
                                                        </div>
                                                        <div class="col-mx-0">
                                                            <h6 class="card-title text-left ml-1">Kambing Jantan</h6>
                                                            <div class="w-100"></div>
                                                            <div class="col-mx-0">
                                                                <h6 class="text-left ml-1 badge-2 badge-pill">1 Buku</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="qty">
                                                <span class="minus bg-secondary-soft">-</span>
                                                <input type="number" class="count" name="qty" value="1">
                                                <span class="plus bg-primary">+</span>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <a href=""><i class="fas fa-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="card">
                                <div class="card-header text-dark">
                                    Ringkasan Peminjaman
                                </div>
                                <div class="card-body">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h6 class="text-normal">Total</h6>
                                                </td>
                                                <td class="text-normal ml-1">:</td>
                                                <td>
                                                    <h6 class="text-normal">1 Buku</h6>
                                                </td>
                                        </tbody>
                                    </table>
                                    <div class="justify-content-center mt-2">
                                        <button class="btn btn-primary col-10">Pinjam</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</main>

<script>
    $(document).ready(function() {
        $('.count').prop('disabled', true);
        $(document).on('click', '.plus', function() {
            $('.count').val(parseInt($('.count').val()) + 1);
        });
        $(document).on('click', '.minus', function() {
            $('.count').val(parseInt($('.count').val()) - 1);
            if ($('.count').val() == 0) {
                $('.count').val(1);
            }
        });
    });
</script>