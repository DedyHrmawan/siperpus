<?php
class PenerbitController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penerbit');
    }
    public function vPenerbit()
    {
        $data['title']      = 'Penerbit | e-Libs';
        $data['penerbits'] = $this->Penerbit->getAll(); 

        $this->admintemplate->view('admin/VPenerbit', $data);
    }
    public function store(){
        $param = $_POST;
        $this->Penerbit->insert($param);
        redirect('penerbit');
    }

    public function ajxDetail(){
        $param = $_POST;
        echo json_encode($this->Penerbit->get(['ID_PENERBIT' => $param['ID_PENERBIT']]));
    }
    public function edit(){
        $param = $_POST;
        $this->Penerbit->update($param);
        redirect('penerbit');
    }
    public function destroy(){
        $param = $_POST;
        $this->Penerbit->delete($param);
        redirect('penerbit');
    }
}
