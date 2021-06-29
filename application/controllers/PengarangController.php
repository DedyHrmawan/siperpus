<?php
class PengarangController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengarang');
    }
    public function vPengarang()
    {
        $data['title']      = 'Pengarang | e-Libs';
        $data['pengarangs'] = $this->Pengarang->getAll(); 

        $this->admin->view('admin/VPengarang', $data);
    }
    public function store(){
        $param = $_POST;
        $this->Pengarang->insert($param);
        redirect('pengarang');
    }

    public function ajxDetail(){
        $param = $_POST;
        echo json_encode($this->Pengarang->get(['ID_PENGARANG' => $param['ID_PENGARANG']]));
    }
    public function edit(){
        $param = $_POST;
        $this->Pengarang->update($param);
        redirect('pengarang');
    }
    public function destroy(){
        $param = $_POST;
        $this->Pengarang->delete($param);
        redirect('pengarang');
    }
}
