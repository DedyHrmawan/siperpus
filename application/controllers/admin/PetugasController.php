<?php
class PetugasController extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Petugas');
    }
    public function vPetugas(){
        $data['title']      = 'Petugas | e-Libs';
        $data['petugass']   = $this->Petugas->getAll(); 

        $this->admintemplate->view('admin/VPetugas', $data);
    }
    public function store(){
        $param = $_POST;
        $this->Petugas->insert($param);
        redirect('petugas');
    }

    public function ajxDetail(){
        $param = $_POST;
        echo json_encode($this->Petugas->get(['USERNAME_PETUGAS' => $param['USERNAME_PETUGAS']]));
    }
    public function edit(){
        $param = $_POST;
        $this->Petugas->update($param);
        redirect('petugas');
    }
    public function destroy(){
        $param = $_POST;
        $this->Petugas->delete($param);
        redirect('petugas');
    }
}
