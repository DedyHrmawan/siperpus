<?php
class SanksiController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sanksi');
        $this->load->model('Peminjaman');
    }
    public function vSanksi()
    {
        $data['title']          = 'Sanksi | e-Libs';
        $data['sanksis']        = $this->Sanksi->getAll(); 
        $data['peminjamans']    = $this->Peminjaman->getForSanksi();

        $this->petugastemplate->view('petugas/VSanksiPetugas', $data);
    }
    public function store(){
        $param = $_POST;
        $this->Sanksi->insert($param);
        redirect('sanksi');
    }

    public function ajxDetail(){
        $param = $_POST;
        echo json_encode($this->Sanksi->get(['ID_SANKSI' => $param['ID_SANKSI']]));
    }
    public function edit(){
        $param = $_POST;
        $this->Sanksi->update($param);
        redirect('sanksi');
    }
    public function destroy(){
        $param = $_POST;
        $this->Sanksi->delete($param);
        redirect('sanksi');
    }
}
