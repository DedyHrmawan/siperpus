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
                                <p class="small text-black text-center mb-5" for="inputEmailAddress">Silahkan masukkan data dibawah ini untuk melanjutkan !</p>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="" class="form-control" placeholder="Masukkan Username" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="" class="form-control" placeholder="Masukkan Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="" class="form-control" placeholder="Masukkan Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="" class="form-control" placeholder="Masukkan Nama" required></input>
                                </div>
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input ml-4" type="radio" name="inlineRadioOptions" id="laki" value="1">
                                        <label class="form-check-label" for="laki">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input ml-4" type="radio" name="inlineRadioOptions" id="perempuan" value="2">
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <br>
                                    <input type="text" name="" class="form-control" placeholder="Masukkan Alamat" required>
                                </div>
                                <div class="form-group">
                                    <label for="telp">No Telepon</label>
                                    <br>
                                    <input type="number" name="" class="form-control" placeholder="Masukkan No Telepon" required>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-center">
                                    <a class="btn btn-primary" href="<?php echo site_url('LoginController'); ?>">Daftar</a>
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