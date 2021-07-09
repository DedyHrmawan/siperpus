<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="e-Libs Project" />
    <meta name="author" content />
    <title><?= $title; ?></title>
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/ic_logoelibs.svg" />
    <link href="<?= base_url(); ?>assets/css/styles.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

    <script src="<?= base_url(); ?>assets/js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

    <!-- Global JS -->

    <!-- datepicker -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>

    <!-- Plugin JS -->
    <script src="<?= base_url(); ?>assets/js/plugin/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous"></script>
    <script data-search-pseudo-elements defer src="<?= base_url(); ?>assets/js/plugin/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

    <!-- CK editor JS harus di taruh sebelum, initialisasi editor pada textarea -->
    <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>

    <!-- Select2js -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<style>
    form-control:focus {
        box-shadow: none;
    }

    .form-control-underlined {
        border-width: 0;
        border-bottom-width: 1px;
        border-radius: 0;
        padding-left: 0;
    }
</style>

<body class="nav-fixed">
    <nav class="topnav navbar navbar-expand shadow navbar-light bg-content" id="sidenavAccordion">
        <img style="width:3%" class="navbar-brand-img ml-3" src="<?= base_url(); ?>assets/img/ic_logoelibs.svg"></img>
        <a class="navbar-brand ml-3" href="<?php echo site_url('Welcome/vBukuAnggota'); ?>">Perpustakaan Online</a>

        <!-- <div class="input-group border rounded-pill p-0 col-md-6 border-primary">
            <div class="input-group-prepend border-0">
                <button id="button-addon4" type="button" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
            </div>
            <input type="search" placeholder="Cari Buku" aria-describedby="button-addon4" class="form-control bg-none border-0 rounded-pill p-1">
        </div> -->

        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-caret mr-5">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-shopping-cart"></i>&nbsp;
                    <span class="badge badge-primary bg-primary">1</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
                    <h6 class="dropdown-header dropdown-notifications-header">
                        <i class="mr-2" data-feather="shopping-cart"></i>
                        Keranjang
                        <a class="text-primary ml-10" href="<?php echo site_url('Welcome/vKeranjang'); ?>">Lihat Sekarang!</a>
                    </h6>
                    <a class="dropdown-item" href="<?php echo site_url('Welcome/vKeranjang'); ?>">
                        <div class="row">
                            <div class="col">
                                <img class="ic-img" src="<?= base_url(); ?>assets/img/buku/kambingjantan.jpg" alt="Image">
                            </div>
                            <div class="col-mx-0">
                                <h6 class="card-title text-left ml-1">Kambing Jantan</h6>
                                <div class="w-100"></div>
                                <div class="col-mx-0">
                                    <h6 class="text-left ml-1 badge-2 badge-pill">1 Buku</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="dropdown-item " href="<?php echo site_url('Welcome/vKeranjang'); ?>">
                        <div class="row">
                            <div class="col">
                                <img class="ic-img" src="<?= base_url(); ?>assets/img/buku/kambingjantan.jpg" alt="Image">
                            </div>
                            <div class="col-mx-0">
                                <h6 class="card-title text-left ml-1">Kambing Jantan</h6>
                                <div class="w-100"></div>
                                <div class="col-mx-0">
                                    <h6 class="text-left ml-1 badge-2 badge-pill">1 Buku</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
        </ul>
    </nav>

    <!--Modal Konfirmasi-->
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="KonfirmasiModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Logout</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Apakah anda yakin keluar ? </h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary-soft" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Tutup</button>
                    <a href="<?= base_url('HomeController') ?>" type="button" class="btn btn-danger"><i class="fa fa-sign-out-alt mr-1"></i>Keluar</a>
                </div>
            </div>
        </div>
    </div>
    <!--Akhir Modal Konfirmasi-->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav shadow-right bg-content sidenav-light">
                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav">
                        <?php $this->load->view('template/anggota/menu'); ?>
                    </div>
                </div>
            </nav>
        </div>
        <div class="bg-content" id="layoutSidenav_content">
            <main>