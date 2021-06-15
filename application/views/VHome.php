<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="e-Libs Project" />
    <meta name="author" content />
    <title>e-Libs</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/ic_logoelibs.svg" />
    <link href="<?= base_url(); ?>assets/css/styles.css" rel="stylesheet" />

    <script data-search-pseudo-elements defer src="<?= base_url(); ?>assets/js/plugin/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>assets/js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
</head>

<body class="nav-fixed container bg-content">
    <header class="navbar navbar-expand-lg navbar-dark fixed-top bg-white" id="mainNav">
        <div class="container">
            <a class="nav-link text-md text-black font-weight-bold mt-auto" href="">About</a>
            <a class="nav-link text-md text-black font-weight-bold mt-auto mr-15" href="">Contact</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-15">
                    <div class="nav-link text-lg text-black mt-auto mr-15 ">Perpustakaan Online</div>
                </ul>
            </div>
            <a class="btn btn-sm btn-primary-soft mr-2 my-1 font-weight-bold" href="<?php echo site_url('LoginController'); ?>" type="button">Login</a>
            <a class="btn btn-sm btn-primary mr-2 my-1 font-weight-bold" href="<?php echo site_url('DaftarController'); ?>" type="button">Sign Up</a>
        </div>
    </header>
    <br>
    <br>
    <br>
    <br>
    <section class="page-section ">
        <div class="container bg-content">
            <div class="row ml-3">
                <div>
                    <img class="img-fluid ml-10" style="width: 50%;" src="<?= base_url(); ?>assets/img/ic_logoelibs.svg" alt="Responsive image" />
                    <div class="col text-left ml-4">
                        <h2 class="section-heading text-black font-weight-bold text-xl">Please Join Now </h2>
                        <a class="btn btn-primary mr-2 float-left my-1" type="button" href="<?php echo site_url('DaftarController'); ?>">Get Started</a>
                    </div>
                </div>
                <div class="col ml-5">
                    <img class="img-fluid float-right" style="width: 60%;" src="<?= base_url(); ?>assets/img/home/circlep.png" alt="Responsive image" />
                </div>
            </div>
        </div>
    </section>

    <footer class="navbar navbar-expand-xl navbar-nav fixed-bottom bg-primary" id="mainNav">
        <div class="container">
            <div>
                <h3 class="text-md text-white font-weight-bold mt-auto">Company</h3>
                <a class="nav-link text-md text-white mt-auto" href="">About Us</a>
                <a class="nav-link text-md text-white mt-auto" href="">Contact Us</a>
            </div>
            <div>
                <h3 class="text-md text-white font-weight-bold mt-auto">Support</h3>
                <a class="nav-link text-md text-white mt-auto" href="">Help Center</a>
                <a class="nav-link text-md text-white mt-auto" href="">Comunity Guidelines</a>
            </div>
            <div>
                <h3 class=" text-white font-weight-bold mt-auto">Legal</h3>
                <a class="nav-link text-white mt-auto" href="">Privacy Policy</a>
                <a class="nav-link text-md text-white mt-auto " href="">Terms of Services</a>
            </div>
            <div>
                <h3 class="text-md text-white mt-auto">Please Join Now !</h3>
                <img class="img-fluid ml-4" style="width: 40%;" src="<?= base_url(); ?>assets/img/ic_logoelibs.svg" alt="Responsive image" />
                <div class="">
                    <a class="btn btn-social" href="" target="_blank"><i class="fab fa-instagram" style="color:white"></i></a>
                    <a class="btn btn-social" href="" target="_blank"><i class="fab fa-facebook-f" style="color:white"></i></a>
                    <a class="btn btn-social" href="" target="_blank"><i class="fab fa-whatsapp" style="color:white"></i></a>
                    <a class="btn btn-social" href="" target="_blank"><i class="fas fa-envelope" style="color:white"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>