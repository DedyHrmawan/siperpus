<?php
class AnggotaController extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Anggota');
    }
    public function vAnggota(){
        $data['title']      = 'Anggota | e-Libs';
        $data['anggotas']   = $this->Anggota->getAll(); 

        $this->admintemplate->view('admin/VAnggota', $data);
    }
    public function store(){
        $param = $_POST;
        $this->Anggota->insert($param);
        redirect('anggota');
    }

    public function ajxDetail(){
        $param = $_POST;
        echo json_encode($this->Anggota->get(['USERNAME_ANGGOTA' => $param['USERNAME_ANGGOTA']]));
    }
    public function edit(){
        $param = $_POST;
        $this->Anggota->update($param);
        redirect('anggota');
    }
    public function destroy(){
        $param = $_POST;
        $this->Anggota->delete($param);
        redirect('anggota');
    }
}
