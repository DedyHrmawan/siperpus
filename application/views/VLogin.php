<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>e-Libs</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/ic_logoelibs.svg" />
    <link href="<?= base_url(); ?>assets/css/styles.css" rel="stylesheet" />

    <script src="<?= base_url(); ?>assets/js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

</head>

<body class="nav-fixed container bg-content">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-white" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="<?= site_url('') ?>">
                <img style="width: 15%;" src="<?= base_url(); ?>assets/img/ic_logoelibs.svg" alt="..." />
            </a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-15">
                    <div class="nav-link text-lg text-black mt-auto mr-15 ">Perpustakaan Online</div>
                    <a class="nav-link text-md text-black font-weight-bold mt-auto" href="">About</a>
                    <a class="nav-link text-md text-black font-weight-bold mt-auto mr-15" href="">Contact</a>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <!-- Basic login form-->
                    <div class="card shadow-lg border-0 rounded-lg mt-10">
                        <div class="card-body">
                            <!-- Login form-->
                            <form>
                            <p class="small text-black text-center mb-5" for="inputEmailAddress">Silahkan masukkan Email dan Password untuk melanjutkan !</p>
                                <div class="form-group">
                                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                                    <input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Masukan Email" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="inputPassword">Password</label>
                                    <input class="form-control py-4" id="inputPassword" type="password" placeholder="Masukan Password" />
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-center mt-4 mb-0">
                                    <a class="btn btn-primary" href="<?php echo site_url('admin/OverviewController/vOverview'); ?>">Masuk</a>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-center mt-3 mb-0">
                                    <p class="small text-black text-center">Belum punya akun ?</p>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-center">
                                    <a class="btn btn-primary-soft" href="<?php echo site_url('DaftarController'); ?>">Daftar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>