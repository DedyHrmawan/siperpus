<?php
class PetugasOverviewController extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Petugas');
        $this->load->model('Anggota');
        $this->load->model('Peminjaman');
        $this->load->model('Sanksi');
    }

    public function vOverview(){
        $data['title']              = 'Overview | e-Libs';
        $data['totalAnggota']       = $this->Anggota->getTotalData();
        $data['totalPetugas']       = $this->Petugas->getTotalData();
        $data['totalPeminjaman']    = $this->Peminjaman->getTotalData();
        $data['sanksis']            = $this->Sanksi->getAll();

        $this->petugastemplate->view('petugas/VOverviewPetugas', $data);
    }
}