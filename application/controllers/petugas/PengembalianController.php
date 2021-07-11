<?php
class PengembalianController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengembalian');
        $this->load->model('Peminjaman');
    }
    public function vPengembalian()
    {
        $data['title']          = 'Pengembalian | e-Libs';
        $data['pengembalians']  = $this->Pengembalian->getAll(); 
        $data['peminjamans']    = $this->Peminjaman->getForPengembalian();

        $this->petugastemplate->view('petugas/VPengembalianPetugas', $data);
    }
    public function store(){
        $param = $_POST;
        $param['USERNAME_PETUGAS']  = 'ilhamsagitap';
        $this->Pengembalian->insert($param);
        redirect('pengembalian');
    }

    public function ajxDetail(){
        $param = $_POST;
        echo json_encode($this->Pengembalian->get(['ID_PENGEMBALIAN' => $param['ID_PENGEMBALIAN']]));
    }
    public function edit(){
        $param = $_POST;
        $this->Pengembalian->update($param);
        redirect('pengembalian');
    }
    public function destroy(){
        $param = $_POST;
        $this->Pengembalian->delete($param);
        redirect('pengembalian');
    }
}
