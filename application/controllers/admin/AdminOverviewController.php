<?php
class AdminOverviewController extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Petugas');
        $this->load->model('Anggota');
        $this->load->model('Peminjaman');
    }

    public function vOverview(){
        $data['title']              = 'Overview | e-Libs';
        $data['petugass']           = $this->Petugas->getAll();
        $data['anggotas']           = $this->Anggota->getAll();
        $data['totalPetugas']       = $this->Petugas->getTotalData();
        $data['totalAnggota']       = $this->Anggota->getTotalData();
        $data['totalPeminjaman']    = $this->Peminjaman->getTotalData();

        $this->admintemplate->view('admin/VOverview', $data);
    }
}