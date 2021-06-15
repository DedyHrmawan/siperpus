<div class="nav accordion" id="accordionSidenav">
    <a class="nav-link " href="<?php echo site_url('Welcome/vOverviewKepala'); ?>">
        <i class="fas fa-eye ml-2 mr-3 fa-lg fa-fw"></i>
        Overview
    </a>
    <a class="nav-link" href="<?php echo site_url('Welcome/vTransaksi'); ?>">
        <i class="fas fa-exchange-alt ml-2 mr-3 fa-lg  fa-fw"></i>
        Transaksi
    </a>
    <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#CollapseLaporan" aria-expanded="false" aria-controls="CollapseLaporan">
        <i class="fas fa-box ml-2 mr-3 fa-lg fa-fw"></i>
        Laporan
        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="CollapseLaporan" data-parent="#accordionSidenav">
        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
            <a class="nav-link" href="<?php echo site_url('welcome/vLaporanPeminjaman'); ?>">
                <i class="fas fa-people-carry ml-2 mr-2 fa-lg fa-fw"></i>
                Laporan Peminjaman
            </a>
            <a class="nav-link" href="<?php echo site_url('welcome/vLaporanPengembalian'); ?>">
                <i class="fas fa-people-arrows ml-2  mr-2 fa-lg fa-fw"></i>
                Laporan Pengembalian
            </a>
            <a class="nav-link" href="<?php echo site_url('welcome/vLaporanDenda'); ?>">
                <i class="fas fa-hand-holding-usd ml-2  mr-2 fa-lg fa-fw"></i>
                Laporan Denda
            </a>
            <a class="nav-link" href="<?php echo site_url('welcome/vLaporanBuku'); ?>">
                <i class="fas fa-book ml-2  mr-2 fa-lg fa-fw"></i>
                Laporan Buku
            </a>
            <a class="nav-link" href="<?php echo site_url('welcome/vLaporanPetugas'); ?>">
                <i class="fas fa-user-shield ml-2  mr-2 fa-lg fa-fw"></i>
                Laporan Petugas
            </a>
        </nav>
    </div>
    <a class="nav-link" href="<?php echo site_url('Welcome/vAdmin'); ?>">
        <i class="fa fa-user-edit ml-2 mr-3 fa-lg fa-fw"></i>
        Admin
    </a>
    <a class="nav-link" href="<?php echo site_url('Welcome/vPetugas'); ?>">
        <i class="fa fa-user-shield ml-2 mr-3 fa-lg fa-fw"></i>
        Petugas
    </a>
</div>
<div class="sidenav-footer">
    <div class="sidenav-footer-content">
        <div class="sidenav-footer-subtitle">Login Sebagai:</div>
        <div class="sidenav-footer-title">Kepala Perpustakaan</div>
    </div>
</div>